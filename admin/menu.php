<?php session_start(); ?>
<?php require_once '../functions/connect.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Admin panel</title>
    </head>
<body>
<div style="text-align:center">
    <h1>Editing a 'menu'</h1>
<?php if(!empty($_SESSION['login'])) :?>

<?php echo "Welcome to the admin panel, ".$_SESSION['login']."!"; ?>
    <br>
<a href="/logout.php">Exit</a>
    <br>
    <?php
        $sql = $pdo->prepare("SELECT * FROM menu");
        $sql->execute();
        $res=$sql->fetch(PDO::FETCH_OBJ);
    ?>
        <form action="/admin/menu/menu.php" method="post" enctype="multipart/form-data">

            <input type="text" name="start_to_play" value="<?php echo $res->start_to_play?>">
            <input type="text" name="discord" value="<?php echo $res->discord?>">
            <input type="text" name="content" value="<?php echo $res->content?>">
            <input type="text" name="title" value="<?php echo $res->title?>">
            <input type="text" name="description" value="<?php echo $res->description?>">
            <p>
                <input type="submit" name="save" value="Save">
            </p>
        
        </form>

<?php else:
    echo '<h2>Access denied!</h2>';
    echo '<a href="/">Home page</a>';
?>


<?php endif ?>
</div>
</body>
</html>