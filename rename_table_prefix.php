<?php
$database_host = "localhost";
$database_user = "andrewfa";
$database_password = "50b27lrYJj";
$magento_database = "andrewfa_mage487";
$table_prefix = "dby_";


$db = mysql_connect($database_host, $database_user, $database_password);
mysql_select_db($magento_database);
$query = "SHOW TABLES";
$result = mysql_query($query) or die('Err');
while($row = mysql_fetch_array($result)) {
    $old_table = $row[0];
    if(preg_match('/'.$table_prefix.'/', $old_table)) {
        echo "Table $old_table already done<br/>\n";
        continue;
    }

    $new_table = $table_prefix.$old_table;
    echo "Renaming $old_table to $new_table<br/>\n";
    $query = "RENAME TABLE `$old_table`  TO `$new_table`";
    mysql_query($query);
}
