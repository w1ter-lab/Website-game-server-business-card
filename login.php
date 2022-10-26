<script type="text/javascript">
function toggler(e) {
  if( e.innerHTML == 'Show' ) {
      e.innerHTML = 'Hide'
      document.getElementById('password').type="text";
  } else {
      e.innerHTML = 'Show'
      document.getElementById('password').type="password";
  }
}
</script>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Login to the admin panel</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="https://www.pngall.com/wp-content/uploads/9/Radiation-PNG-Picture.png">
    </head>
<body>
    <div class="intro">
        <div class="video">
            <video class="video_media" src="videos/background.mp4" autoplay muted loop></video>
        </div>

        <div class="intro_content_login">
            <div class="container">
                <h2 style="color:white;text-align:center">Login to the admin panel</h2>

                <form action="admin/admin.php" method="post" style="text-align:center">
                    <div class="form-group">
                        <p>
                            <input type="text" placeholder="Enter login" name="login">
                        </p>
                    </div>
                    <div class="form-group-pass">
                        <p>
                            <input class="password" type="password" id="password" placeholder="Enter password" name="password"></input>
                            <a onclick="toggler(this)" class="btn-showpass">Show</a>
                        </p>
                    </div>
                    <button type="submit" class="btn-login">Log in</button>
                </form>
            </div>
        </div>
    </div>

</body>

</html>