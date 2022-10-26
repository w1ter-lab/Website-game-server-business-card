<?php
    $user = "root";
    $password = "";
    $host = "localhost";
    $db = "ascension_db";
    $dbh = 'mysql:host='.$host.';dbname='.$db.';charset=utf8';
    $pdo = new PDO($dbh,$user,$password);
?>

<?php
    $start_to_play=$_POST["start_to_play"];
    $discord=$_POST["discord"];
    $content=$_POST["content"];
    $title=$_POST["title"];
    $description=$_POST["description"];
    $row="UPDATE menu SET start_to_play=:start_to_play,discord=:discord,content=:content,title=:title,description=:description";
    $query=$pdo->prepare($row);
    $query->execute(["start_to_play"=>$start_to_play,"discord"=>$discord,"content"=>$content,"title"=>$title,"description"=>$description]);
    echo '<meta HTTP-EQUIV="Refresh" Content="0; URL=/admin/menu.php">';
?>