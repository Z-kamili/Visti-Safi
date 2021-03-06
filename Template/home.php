<!-- router -->
<?php include('config.php'); ?>
<?php
use PhPMailer\PHPMailer\PHPMailer;
use PhPMailer\PHPMailer\Exception;
require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';
$name = $email = $Message = $error = $nameerror = $emailerror = $Messageerror = "";
$mail = new PHPMailer;
//SMTP configuration
if(!empty($_POST)){

  $name = checkInput($_POST["name"]);
  $email = checkInput($_POST["email"]);
  $Message = checkInput($_POST["Message"]);

  if(!empty($name) && (!empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) && !empty($Message)){
    $mail->isSMTP();
    $mail->Host = "smtp.gmail.com";
    $mail->SMTPAuth = true;
    $mail->Username = "zm011476@gmail.com";
    $mail->Password = "safi1928";
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;
    
    $mail->setFrom('ZakariaKamili97@gmail.Com','VisitSafi');
    $mail->addAddress($email);
    
    $mail->Subject = "Send Email via SMTP using PHPMailer";
    
    $mail->isHTML(true);
    // $mail->SMTPDebug = 3;
    
    $mailContent = '<p> '. $Message . '</p>';
    $mail->Body = $mailContent;
    $mail->send();
    
    // if(!$mail->send()){
    
    //   $error =  'Message could not be sent';
    
    // }else{
    //   echo 'Message has been sent';
    // }

  }else{
    if(empty($name)){
      $nameerror = $lang['nameerror'];
    }
    if(empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)){
      $emailerror = $lang['emailerror'];
    }
    if(empty($Message)){

      $Messageerror = $lang['Messageerror'];

    }
  }


}

function checkInput($data){
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="" name="descriptison">
    <meta content="" name="keywords">
    <link href="format/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">
    <!-- <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet"> -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

    <title>Safi_Ville</title>
</head>
<body>

<?php include 'include/header.php'; ?>
<!-- Section :  -->
<main>

    <section class="Welcom-safi ">

        <h1 class="reveal"><?php echo $lang['title']?></h1>
        <div class="title reveal">
          <h1>SAFI</h1>   
        </div>
        <p class="reveal">
        <?php echo $lang['desc-home']?>
        </p>

    </section>
    <div class="marg"></div>
    <section class="Galery-Safi">
<div class="Galery-inf reveal">
<h2><?php echo $lang['title-discover']?>
</h2>
<div class="border"></div>
<p><?php echo $lang['desc-discover']?></p>
</div>
<div class="section">
<div class="Galery-img">
<div class="reveal reveal-image"> <img class="image" src="format/img/pottery.png"></div>
<div class="reveal reveal-image"> <img class="image" src="format/img/img1-2.png"></div>
<div class="reveal reveal-image"> <img class="image" src="format/img/fish.png"></div>
</div>
</div>

    </section>
    <div class="marg"></div>
<section class="city-safi reveal ">
    <h2><?php echo $lang['title-city']?></h2>
    <div class="border"></div>
    <p><?php echo $lang['Desc_city']?></p>
</section>
<div class="marg"></div>
<section class="Learn-More reveal">
    <h2><?php echo $lang['title-section']?>
</h2>
    <div class="border"></div>
    <div class="cards">
        <div class="cart">
            <div class="cart-image">
<img class="icon-player" src="format/img/playvideo.png">
            </div>
            <!-- <img class="cart-img-top" src="format/img/image2-1.png" alt="Card image cap"> -->
            <div class="cart-body">
                <h3><?php echo $lang['title-fish']?></h3>
              <p class="cart-text reveal">Sardines au barbecue:
c'est la meilleure façon de consommer les sardines.elles conservent tout leur apport nutritif</p>
            </div>
            <input type="submit" value="encore plus">
          </div>
          <div class="cart-2">
            <div class="cart-image">
                <img class="icon-player" src="format/img/playvideo.png">
            </div>
            <!-- <img class="cart-img-top" src="format/img/image2-1.png" alt="Card image cap"> -->
            <div class="cart-body">
                <h3><?php echo $lang['title-Surf']?></h3>
              <p class="cart-text reveal">Plongée par les vagues de l'océan Atlantique, Safi est une ville balnéaire où un séjour agréable est garanti</p>
            </div>
            <input type="submit" value="encore plus">
          </div>
          <div class="cart-3">
            <div class="cart-image">
                <img class="icon-player" src="format/img/playvideo.png">
            </div>
            <!-- <img class="cart-img-top" src="format/img/image2-1.png" alt="Card image cap"> -->
            <div class="cart-body">
                <h3><?php echo $lang['title-Pottery']?></h3>
              <p class="cart-text reveal">Il est signé "Safi" au dos. Safi, c'est le nom d'une ville côtière où la majeure partie de la poterie marocaine</p>
            </div>
            <input type="submit" value="encore plus">
          </div>
          <!-- <div class="card" style="width: 18rem;">
            <i class="far fa-play-circle"></i>
            <img class="card-img-top" src="format/img/image2-2.png" alt="Card image cap">
            <div class="card-body">
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
            <input type="submit" value="Learn More">
          </div>
          <div class="card" style="width: 18rem;">
            <i class="far fa-play-circle"></i>
            <img class="card-img-top" src="format/img/img1.png" alt="Card image cap">
            <div class="card-body">
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
            <input type="submit" value="Learn More">
          </div> -->
    </div>
</section>
<div class="marg"></div>
<section>
<h1 class="reveal"><?php echo $lang['Safi-Motion']?>
</h1>
<div class="bg-chateau reveal">
<img class="icon-player-2" id="img-bg" src="format/img/playvideo.png">
</div>
</section>
<div class="marg"></div>

<section>
  <div class="Safi-video reveal">
    <div class="bg-image-slider">
      <img class="icon-player" id="img-bg-2">
    </div>
    <div class="text">
      <h3 class="title-2 reveal"><?php echo $lang['Safi-Motion']?></h3>
      <p class="text-2 reveal"><?php echo $lang['description']?></p>
      <div class="btn">
        <input type="submit" class="icon-player" onclick="Incrementer(-1)" value="<?php echo $lang['Prev']?>">
        <input type="submit" onclick="Incrementer(1)" value="<?php echo $lang['Next']?>">
      </div>
    </div>
  </div>
</section>
<div class="marg"></div>
<section class="reveal">
  <h2 class="title"><?php echo $lang['Contact']?></h2>
    <div class="border"></div>
  <div class="Contact">
    <div class="bg-image">
      
    </div>
   <form action="index.php?action=home" method="post" name="send">
     <div  class="div-text"><?php echo $lang['Contact-name']?></div>
     <div class="div-inpt">
      <input type="text" name="name">
     </div>
     <div> <span class="error"><?php echo $nameerror ?></span> </div>
     <div class="div-text"><?php echo $lang['Contact-Desc']?></div>
     <div class="div-inpt">
      <input type="text" name="email">
     </div>
     <div> <span class="error"><?php echo $emailerror ?></span> </div>
     <div class="div-text"><?php echo $lang['Contact-message']?></div>
     <div class="div-inpt">
      <textarea name="Message" ></textarea>
     </div>
     <div> <span class="error"><?php echo $Messageerror ?></span> </div>
     <input type="submit" value="<?php echo $lang['Subscribe']?>">
   </form>
    </div>
</section>
</main>
<!-- footer -->
<?php include 'include/footer.php'; ?>
<!-- video call -->
 <!-- Video -->
 <div class="bg-modal-2">
        <div class="modal-content2">
            <div class="close">+</div>
            <iframe width="560" height="315" id="video"  frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </div>
</body>
<script src="format/js/animation.js"></script>
<script src="format/js/main.js"></script>
</html>