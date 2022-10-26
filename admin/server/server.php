<?php
    $user = "root";
    $password = "";
    $host = "localhost";
    $db = "ascension_db";
    $dbh = 'mysql:host='.$host.';dbname='.$db.';charset=utf8';
    $pdo = new PDO($dbh,$user,$password);
?>

<?php
    $title=$_POST["title"];
    $ip_adress=$_POST["ip_adress"];
    $row="UPDATE server SET title=:title,ip_adress=:ip_adress";
    $query=$pdo->prepare($row);
    $query->execute(["title"=>$title,"ip_adress"=>$ip_adress]);
    echo '<meta HTTP-EQUIV="Refresh" Content="0; URL=/admin/server.php">';
?>