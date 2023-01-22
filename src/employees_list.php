<?php

require_once('sql/mysql_connect.php');

function selectEmployees(PDO $dbh)
{
    $sql = <<<EOL
    SELECT member
    FROM shuffle_lunch
    ;
    EOL;

    $sth = $dbh->query($sql);
    return $sth;
}

$dbh = dbConnect();
$employees = selectEmployees($dbh);
foreach ($employees as $employee) {
    echo '<p>' . $employee['member'] . '</p>';
}
