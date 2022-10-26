<?php require_once './functions/connect.php'; ?>
<?php
$row = $pdo->prepare("SELECT * FROM about");
$row->execute();
$about=$row->fetch(PDO::FETCH_OBJ);
?>

<div class="site-section bg-black">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-lg-3 col-md-7 mb-lg-0">
            <div class="about">
              <figure>
                <img src="admin/about/img/<?php echo $about->filename?>" alt="Image" class="img-fluid">
              </figure>
            </div>
          </div>
          <div class="col-md-8">
      
            <h3><?php echo $about->title?></h3>
            <p><?php echo $about->description?></p>
       
          </div>
        </div>
      </div>
    </div>