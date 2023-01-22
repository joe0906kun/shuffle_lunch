<?php

require_once('mysql_connect.php');

function dorpTable(PDO $dbh)
{
    $sql = 'DROP TABLE IF EXISTS shuffle_lunch';
    $sth = $dbh->query($sql);
    if ($sth) {
        echo 'テーブル削除完了: shuffle_lunch' . PHP_EOL;
    } else {
        exit('テーブル削除エラー: shuffle_lunch' . PHP_EOL);
    }
    $sth = null;
}

function createTable(PDO $dbh)
{
    $sql = <<<EOL
    CREATE TABLE shuffle_lunch (
        id INT(100) AUTO_INCREMENT NOT NULL,
        member VARCHAR(100) NOT NULL,
        PRIMARY KEY (id));
    EOL;

    $sth = $dbh->query($sql);
    if ($sth) {
        echo 'テーブル作成完了: shuffle_lunch' . PHP_EOL;
    } else {
        exit('テーブル作成エラー: shuffle_lunch' . PHP_EOL);
    }
    $sth = null;
}

function insertQuery(PDO $dbh)
{
    $sql = <<<EOL
    INSERT INTO shuffle_lunch (member)
    VALUES ('山浦清透'), ('田中圭祐'), ('白水宏伸'), ('瀬戸弘樹'), ('高石健太郎');
    EOL;

    $sth = $dbh->query($sql);
    if ($sth) {
        echo '社員登録完了: shuffle_lunch' . PHP_EOL;
    } else {
        exit('社員登録エラー: shuffle_lunch' . PHP_EOL);
    }
    $sth = null;
}

$dbh = dbConnect();
dorpTable($dbh);
createTable($dbh);
insertQuery($dbh);
