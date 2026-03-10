<?php
include dirname(__DIR__) . '/app/includes/conn.php';

$tables = array();
$result = $conn->query("SHOW TABLES");
while ($row = $result->fetch_row()) {
    $tables[] = $row[0];
}

$return = "-- Clean Database Structure\n";
$return .= "SET SQL_MODE = \"NO_AUTO_VALUE_ON_ZERO\";\nSTART TRANSACTION;\nSET time_zone = \"+00:00\";\n\n";

foreach ($tables as $table) {
    $row2 = $conn->query("SHOW CREATE TABLE " . $table)->fetch_row();
    $return .= "\n\n" . $row2[1] . ";\n\n";

    // Only export data for essential tables
    if (in_array($table, ['tbl_users', 'tbl_system_setting', 'tbl_services', 'tbl_requirements'])) {
        $result = $conn->query("SELECT * FROM " . $table);
        $num_fields = $result->field_count;
        while ($row = $result->fetch_row()) {
            $return .= "INSERT INTO " . $table . " VALUES(";
            for ($j = 0; $j < $num_fields; $j++) {
                $row[$j] = addslashes($row[$j]);
                $row[$j] = str_replace("\n", "\\n", $row[$j]);
                if (isset($row[$j])) {
                    $return .= '"' . $row[$j] . '"';
                } else {
                    $return .= '""';
                }
                if ($j < ($num_fields - 1)) {
                    $return .= ',';
                }
            }
            $return .= ");\n";
        }
    }
    $return .= "\n\n\n";
}

$handle = fopen(__DIR__ . '/clean_database.sql', 'w+');
fwrite($handle, $return);
fclose($handle);

echo "Clean database structure created successfully in wp_admin/DB/clean_database.sql";
?>
