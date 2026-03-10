<?php
$root = dirname(dirname(dirname(__DIR__)));
$envFile = $root . DIRECTORY_SEPARATOR . '.env';
$cfg = [
  'DB_HOST' => 'localhost',
  'DB_USER' => 'root',
  'DB_PASS' => '',
  'DB_NAME' => '2906898_mpcdatabase',
  'DB_PORT' => '',
  'APP_ENV' => 'production',
  'APP_DEBUG' => '0'
];
if (is_file($envFile)) {
  $vars = parse_ini_file($envFile, false, INI_SCANNER_RAW);
  if ($vars) {
    foreach ($cfg as $k => $v) {
      if (isset($vars[$k]) && $vars[$k] !== '') {
        $cfg[$k] = $vars[$k];
      }
    }
  }
}
if ($cfg['DB_PORT'] !== '') {
  $conn = new mysqli($cfg['DB_HOST'], $cfg['DB_USER'], $cfg['DB_PASS'], $cfg['DB_NAME'], (int)$cfg['DB_PORT']);
} else {
  $conn = new mysqli($cfg['DB_HOST'], $cfg['DB_USER'], $cfg['DB_PASS'], $cfg['DB_NAME']);
}
if ($conn->connect_error) {
  die('Connection failed: ' . $conn->connect_error);
}
$conn->set_charset('utf8mb4');

$debug = ($cfg['APP_DEBUG'] === '1' || strtolower((string)$cfg['APP_DEBUG']) === 'true');
@ini_set('display_errors', $debug ? '1' : '0');
@ini_set('display_startup_errors', $debug ? '1' : '0');
@ini_set('log_errors', '1');
error_reporting(E_ALL);

$logDir = $root . DIRECTORY_SEPARATOR . 'logs';
if (!is_dir($logDir)) {
  @mkdir($logDir, 0755, true);
}
$logFile = $logDir . DIRECTORY_SEPARATOR . 'php-error.log';
@ini_set('error_log', $logFile);

$respond = function($id, $message, $detail = null) use ($debug) {
  $accept = isset($_SERVER['HTTP_ACCEPT']) ? $_SERVER['HTTP_ACCEPT'] : '';
  $isAjax = (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && $_SERVER['HTTP_X_REQUESTED_WITH'] === 'XMLHttpRequest')
    || (stripos($accept, 'application/json') !== false);
  if ($isAjax) {
    if (!headers_sent()) {
      header('Content-Type: application/json');
    }
    $payload = ['status' => 'error', 'message' => $message, 'id' => $id];
    if ($debug && $detail !== null) {
      $payload['detail'] = $detail;
    }
    echo json_encode($payload);
    return;
  }
  if (!headers_sent()) {
    header('Content-Type: text/html; charset=utf-8');
  }
  $safeId = htmlspecialchars($id, ENT_QUOTES, 'UTF-8');
  $safeMsg = htmlspecialchars($message, ENT_QUOTES, 'UTF-8');
  $safeDetail = $debug && $detail !== null ? htmlspecialchars((string)$detail, ENT_QUOTES, 'UTF-8') : '';
  echo '<!doctype html><html lang="en"><head><meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1"><title>Error</title><style>body{font-family:Arial,Helvetica,sans-serif;background:#f5f5f5;margin:0} .box{max-width:720px;margin:40px auto;background:#fff;border:1px solid #e5e5e5;border-radius:8px;padding:20px} .id{color:#666;font-size:12px} .detail{margin-top:12px;white-space:pre-wrap;font-family:Consolas,monospace;font-size:12px;background:#fafafa;border:1px solid #eee;border-radius:6px;padding:12px}</style></head><body><div class="box"><h2>Something went wrong</h2><p>'.$safeMsg.'</p><p class="id">Error ID: '.$safeId.'</p>'.($safeDetail !== '' ? '<div class="detail">'.$safeDetail.'</div>' : '').'</div></body></html>';
};

set_exception_handler(function($e) use ($respond, $debug) {
  $id = bin2hex(random_bytes(6));
  $detail = get_class($e) . ': ' . $e->getMessage() . ' in ' . $e->getFile() . ':' . $e->getLine() . "\n" . $e->getTraceAsString();
  error_log('[' . date('c') . '] [' . $id . '] ' . $detail);
  while (ob_get_level() > 0) {
    @ob_end_clean();
  }
  http_response_code(500);
  $respond($id, 'An unexpected error occurred. Please try again.', $debug ? $detail : null);
  exit;
});

set_error_handler(function($severity, $message, $file, $line) {
  if (!(error_reporting() & $severity)) {
    return false;
  }
  if ($severity === E_USER_ERROR || $severity === E_RECOVERABLE_ERROR) {
    throw new ErrorException($message, 0, $severity, $file, $line);
  }
  error_log('[' . date('c') . '] PHP ' . $severity . ': ' . $message . ' in ' . $file . ':' . $line);
  return true;
});

register_shutdown_function(function() use ($respond, $debug) {
  $err = error_get_last();
  if (!$err) {
    return;
  }
  $fatal = [E_ERROR, E_PARSE, E_CORE_ERROR, E_COMPILE_ERROR];
  if (!in_array($err['type'], $fatal, true)) {
    return;
  }
  $id = bin2hex(random_bytes(6));
  $detail = 'PHP ' . $err['type'] . ': ' . $err['message'] . ' in ' . $err['file'] . ':' . $err['line'];
  error_log('[' . date('c') . '] [' . $id . '] ' . $detail);
  while (ob_get_level() > 0) {
    @ob_end_clean();
  }
  http_response_code(500);
  $respond($id, 'A system error occurred. Please try again.', $debug ? $detail : null);
});
?>
