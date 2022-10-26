<?php require 'public/menu.php' ?>
<?php require_once './functions/connect.php'; ?>
<?php
$main = $pdo->prepare("SELECT * FROM header");
$main->execute();
$result=$main->fetch(PDO::FETCH_OBJ);
?>

<?php
$sql2 = $pdo->prepare("SELECT * FROM server");
$sql2->execute();
$server=$sql2->fetch(PDO::FETCH_ASSOC);
?>

<script type="text/javascript">
  function server_connect(ip) {
		let utm = '';
		let srv_name = 'stalker_rp';
		
		if(utm != '')
		{
			gtag('event', 'connect', {
				'event_category': 'Forms_Ascension'
			});
		}
    if(utm == "vkontakte")
		{
			VK.Retargeting.Event('connect-button-click-' + srv_name);
		}
		
		window.location.replace('steam://connect/' + ip); 
	}
</script>

<div class="intro">
    <div class="video">
        <iframe src="https://www.youtube.com/embed/8PelQopvO4I?controls=0&showinfo=0&rel=0&modestbranding=0&autoplay=1&loop=1&mute=1" frameborder="0" allowfullscreen style="overflow:hidden;overflow-x:hidden;overflow-y:hidden;height:100%;width:100%;position:absolute;top:0px;left:0px;right:0px;bottom:0px" height="100%" width="100%"></iframe>
        <!--<video class="video_media" src="videos/background.mp4" autoplay muted loop></video>-->
    </div>

    <div class="intro_content">
        <div class="container">
                <h1 style="color: white"><?php echo $server["title"]?></h1>
                <span class="text" style="color: red"><?php echo $server["ip_adress"]?></span>
                <br>
                <a onclick="server_connect('127.0.0.1:25565')" class="btn-server-connect"><span class="text">connect</span></a>
        </div>
    </div>
</div>

<?php require 'public/about.php' ?>
<?php require 'public/footer.php' ?>