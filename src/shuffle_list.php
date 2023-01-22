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

function grouping($employees)
{
    $employeesList = [];
    foreach ($employees as $employee) {
        $employeesList[] = $employee['member'];
    }

    shuffle($employeesList);

    $groupA = array_rand($employeesList, floor(count($employeesList) / 2));
    $groupA = array_map(fn ($employee) => $employeesList[$employee], array_rand($employeesList, floor(count($employeesList) / 2)));
    $groupB = array_diff($employeesList, $groupA);


    echo '<br>';
    echo 'グループA';
    echo '<br>';
    foreach ($groupA as $groupAMamber) {
        echo $groupAMamber . ' ';
    }

    echo '<br>';
    echo '<br>';
    echo 'グループB';
    echo '<br>';

    foreach ($groupB as $groupBMamber) {
        echo $groupBMamber . ' ';
    }
}

$dbh = dbConnect();
$employees = selectEmployees($dbh);
grouping($employees);
