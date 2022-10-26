<?php
    $user = "root";
    $password = "";
    $host = "localhost";
    $db = "ascension_db";
    $dbh = 'mysql:host='.$host.';dbname='.$db.';charset=utf8';
    $pdo = new PDO($dbh,$user,$password);
?>

<?php
    if(isset($_POST["save"])){
        $list=['.php','.zip','.rar','.js','.html'];
        foreach($list as $item){
            if(preg_match("/$item$/",$_FILES['im']['name']))exit("The file extension does not fit!");
        }
        $type=getimagesize($_FILES['im']['tmp_name']);
        if($type && ($type['mine'] !='image/png' || $type['mine'] !='image/jpg' || $type['mine'] !='image/jpeg')){
            if($_FILES['im']['name']<1024 * 1000){
                $upload='img/'.$_FILES['im']['name'];

                if(move_uploaded_file($_FILES['im']['tmp_name'],$upload)) echo "File uploaded!";
                else echo "Error while loading!";
            }
            else exit("File size exceeded!");
        }
        else exit("The file type does not fit!");
    }
?>

<?php
    $title=$_POST["title"];
    $description=$_POST["description"];
    $row="UPDATE about SET title=:title,description=:description,filename=:filename";
    $query=$pdo->prepare($row);
    $query->execute(["title"=>$title,"description"=>$description,"filename"=>$_FILES['im']['name']]);
    echo '<meta HTTP-EQUIV="Refresh" Content="0; URL=/admin/about.php">';
?>