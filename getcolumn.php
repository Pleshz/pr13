<?
    include("../settings/connect_datebase.php");

    $column_query = $mysqli->query("SELECT * FROM `users`");

    echo "Данные таблицы users\n";
    while($row = $column_query->fetch_array()) {
        print_r($row);
        echo "<br>";
    }
?>