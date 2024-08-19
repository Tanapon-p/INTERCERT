<!DOCTYPE html>
<html lang="en">

<head>

    <?php require_once "./head.php"; ?>
    <?php require_once "./static/services_data.php"; ?>

</head>

<body>

    <?php require_once "./component/header.php"; ?>

    <h1><?=$services[$_GET['id']]['title'];?></h1>
    <img src="<?=$services[$_GET['id']]['img_url'];?>" alt="">

    <?php require_once "./component/footer.php"; ?>
    <?php require_once "./js.php"; ?>

</body>

</html>