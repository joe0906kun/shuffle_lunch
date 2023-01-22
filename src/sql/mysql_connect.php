<?php

function dbConnect()
{
    $dbHost = 'db';
    $dbPass = 'pass';
    $dbDatabase = 'test_database';
    $dbUserName = 'test_user';
    $dataSourceName = "mysql:host=$dbHost;dbname=$dbDatabase;charset=utf8mb4";
    $dbh = new PDO($dataSourceName, $dbUserName, $dbPass);

    // if ($dbh) {
    //     echo 'sqlに接続できました。';
    // } else {
    //     echo 'sqlに接続できませんでした。';
    // }
    return $dbh;
}

function insertEmployees(PDO $dbh, string $name)
{
    $sql = <<<EOL
    INSERT INTO shuffle_lunch (member)
    VALUES ('{$name}');
    EOL;
    $sth = $dbh->query($sql);
    if ($sth) {
        // echo "'{$name}'登録完了: shuffle_lunch" . PHP_EOL;
    } else {
        exit("'{$name}'社員登録エラー: shuffle_lunch" . PHP_EOL);
    }
    $sth = null;
}
