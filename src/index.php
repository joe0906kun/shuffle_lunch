<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>シャッフルランチサービス</title>
</head>

<body>
    <h1>シャッフルランチ</h1>
    <form action="shuffle_screen.php">
        <a href="../register.php">社員を登録する</a>
        <button>シャッフルする</button>
    </form>
    <h2>社員の一覧</h2>
    <?php require_once('employees_list.php') ?>
</body>

</html>
