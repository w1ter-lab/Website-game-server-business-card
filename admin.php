<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Admin panel</title>
    </head>
<body>
<div style="text-align:center">

<?php if(!empty($_SESSION['login'])) :?>

<?php echo "Welcome to the admin panel, ".$_SESSION['login']."!"; ?>
    <br>
<a href="/logout.php">Exit</a>
    <br>
<a href="/admin/menu.php">Menu</a>
<a href="/admin/header.php">Header</a>
<a href="/admin/server.php">Server information</a>
<a href="/admin/about.php">About us</a>
<?php else:
    echo '<h2>Access denied!</h2>';
    echo '<a href="/">Home page</a>';
?>


<?php endif ?>
</div>
</body>
</html>