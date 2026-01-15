<?
    include("../settings/connect_datebase.php");

    $column_query = $mysqli->query("SELECT * FROM `users`");

    echo "Поля в таблице users\n";
    while($row = $column_query->fetch_array()) {
        echo "- " . $row[0] . "\n";
    }
?>