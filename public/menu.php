<?php require_once './functions/connect.php'; ?>
<?php
$sql = $pdo->prepare("SELECT * FROM menu");
$sql->execute();
$res=$sql->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
  <title><?php echo $res["title"]?></title>
  <meta name="description" content="<?php echo $res["description"]?>">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="icon" href="https://www.pngall.com/wp-content/uploads/9/Radiation-PNG-Picture.png">
</head>
<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
<script type="text/javascript">
  function togglePopup(){
    document.getElementById("popup-1").classList.toggle("active");
  }
</script>
  <div class="navbar">
    <div class="container">
      <!--<img src="admin/menu/img/<?php echo $res["filename"]?>" alt="Image" class="navbar-brand img-fluid">-->
      <a href="#" class="navbar-brand">ASCENSION</a>

      <div class="navbar-wrap">
        <ul class="navbar-menu">
          <li><a href="https://steamcommunity.com/sharedfiles/filedetails/?id=2836913719"><?php echo $res["content"]?></a></li>
          <li><a href="https://discord.gg/4nm8954DGr"><?php echo $res["discord"]?></a></li>
        </ul>
        <div class="popup" id="popup-1">
          <div class="overlay"></div>
          <div class="content">
            <div class="close-btn" onclick="togglePopup()">&times;</div>
              <h1>HOW TO START PLAYING?</h1>
                <p>1 - First, install the <a href="https://store.steampowered.com/about/">STEAM</a> app from the official website;</p>
                <p>2 - Then go to the <a href="https://store.steampowered.com/app/4000/Garrys_Mod/">Garry's Mod</a> page in STEAM and buy the game;</p>
                <p>3 - Install your purchased copy of the game in the LIBRARY section;</p>
                <p>4 - Familiarize yourself with the RULES and HISTORY of the server;</p>
                <p>5 - Write a quilt in our <a href="https://discord.gg/4nm8954DGr">DISCORD SERVER FORUM</a> and get an interview;</p>
                <p>6 - Install the <a href="https://steamcommunity.com/sharedfiles/filedetails/?id=2836913719">CONTENT</a> server and come play!</p>
          </div>
        <div class="container">
          <a href="#" class="start_to_play" onclick="togglePopup()"><?php echo $res["start_to_play"]?></a>
        </div>
      </div>
    </div>
  </div>

          <div class="col-6 d-block d-lg-none text-right">
              <a href="#" class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black"><span
                class="icon-menu h3"></span></a>
          </div>

        </div>
      </div>
    </div>