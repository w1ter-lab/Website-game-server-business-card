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
    <h1>Editing a 'Server information'</h1>
<?php if(!empty($_SESSION['login'])) :?>

<?php echo "Welcome to the admin panel, ".$_SESSION['login']."!"; ?>
    <br>
<a href="/logout.php">Exit</a>
    <br>
    <?php
        $sql = $pdo->prepare("SELECT * FROM server");
        $sql->execute();
        $res=$sql->fetch(PDO::FETCH_ASSOC);
    ?>

        <form action="/admin/server/server.php/" method="post" enctype="multipart/form-data">
            <input type="text" name="title" value="<?php echo $res->title?>">
            <input type="text" name="ip_adress" value="<?php echo $res->ip_adress?>">
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