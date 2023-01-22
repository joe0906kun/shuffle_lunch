<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>シャッフルランチサービス（社員登録）</title>
</head>

<body>
    <h1>シャッフルランチ</h1>
    <form action="register.php" method="POST">
        <label for="employee">社員の登録</label>
        <input type="text" name="name" id="employee" size="40">
        <?php
        require_once('sql/mysql_connect.php');
        $employeeName = $_POST['name'];
        $dbh = dbConnect();
        insertEmployees($dbh, $employeeName);
        ?>
        <button>登録する</button>
    </form>

    <h2>社員の一覧</h2>

    <?php require_once('employees_list.php') ?>
</body>

</html>
