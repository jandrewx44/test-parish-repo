<?php
include dirname(__DIR__) . '/app/includes/conn.php';

$tables = array();
$result = $conn->query("SHOW TABLES");
while ($row = $result->fetch_row()) {
    $tables[] = $row[0];
}

$return = "-- Database Export\n";
$return .= "SET SQL_MODE = \"NO_AUTO_VALUE_ON_ZERO\";\nSTART TRANSACTION;\nSET time_zone = \"+00:00\";\n\n";

foreach ($tables as $table) {
    $result = $conn->query("SELECT * FROM " . $table);
    $num_fields = $result->field_count;

    $row2 = $conn->query("SHOW CREATE TABLE " . $table)->fetch_row();
    $return .= "\n\n" . $row2[1] . ";\n\n";

    // Only export data for essential tables, or all tables if they haven't been cleared
    // For this "fix", we want to export whatever is CURRENTLY in the database.
    // If the user cleared it, this will export structure only.
    
    for ($i = 0; $i < $num_fields; $i++) {
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

$handle = fopen(__DIR__ . '/2906898_mpcdatabase.sql', 'w+');
fwrite($handle, $return);
fclose($handle);

echo "Database exported successfully to wp_admin/DB/2906898_mpcdatabase.sql";
?>
