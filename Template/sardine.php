<?php include('config.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="" name="descriptison">
    <meta content="" name="keywords">  
    <link href="format/css/sardine.css" rel="stylesheet">
    <link href="format/css/style.css" rel="stylesheet">
    <link href="format/css/headersardine.css" rel="stylesheet">
    <link rel="stylesheet" href="format/css/media-Sardine.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <title>Safi Sardine</title>
</head>
<body>
    
    
 
    <?php include 'include/headerSardine.php' ?>



    <!-- The Title Of the page -->
    <div class="container container-page">
        <div class="container-welcome reveal">
            <p class="small-text"><?php echo $lang['title']?></p>
            <p class="big-text"><?php echo $lang['title-sardine']?></p><br><br>
        </div>
    </div>

<div class="container-page-down reveal">
    <div class="container-page-down-des">
         <p class="container-page-down--title"><?php echo $lang['title-discover']?></p>
         <div class="line"></div>
         <p class="desc-text"><?php echo $lang['Sardine-discover']?>
</p>       
    </div>

    
   <div class="container-page-down-img">
    <!-- <div class="im">
        <div id="img1" class="page-down-img1"></div>
        <div  id="down1" class="page-down-down"></div>
    </div>

    <div  class="im">
        <div id="img2" class="page-down-img2"></div>
        <div  id="down2" class="page-down-down"></div>

    </div> -->
    <!-- <div  class="im">
        <div id="img3" class="page-down-img3"></div>
        <div  id="down3" class="page-down-down"></div>
        <div  id="down2" class="page-down-down">
        </div>
    </div> -->
    <div class="section">
<div class="section reveal">
<div class="Galery-img">
<div class="reveal reveal-image"> <img class="image" src="format/img/Sardine_img/IMG_9576.png"></div>
<div class="reveal reveal-image"> <img class="image" src="format/img/img1-2.png"></div>
<div class="reveal reveal-image"> <img class="image" src="format/img/fish.png"></div>
</div>
</div>
    </div>


   </div>

</div> <br><br><br>
<!--  
<div class="white-space"></div>
  -->

  <!-- Video -->
<div class="container-hills reveal">
    <div class="container-hills-video">
    <img class="icon-player" src="format/img/playvideo.png">
    </div>
    <div class="container-hills-des">
        <h1 class="container-hills2-title"><?php echo $lang['sardin-port']?></h1>
       
        <p class="container-hills-des-text"><?php echo $lang['sardin-port-desc']?></p>
 <div class="btn-2">
        <input type="submit" class="icon-player" onclick="Incrementer(-1)" value="<Prev">
        <input type="submit" onclick="Incrementer(1)" value="Next>">
      </div>
 <div class="white-space"></div>
    

    </div>
   

</div> <br><br><br><br><br><br>

<!-- START Sardines from market  -->

<div class="half-white-space"></div>
<div class="bg-design1">

</div>


<div class="container-hills2 reveal">
    <div class="container-hills2-pic1">
<img src="format/img/Sardine_img/sardine11.png" class="bg-img">
    </div>
    <div  class="container-hills2-des">
        <h1 class="container-hills2-title"><?php echo $lang['sardine-market']?> </h1>
        <div class="line"></div>
          
        <div class="half-white-space"></div>
        <p class="container-hills2-text"><?php echo $lang['sardine-market-desc']?></p>
<div class="half-white-space"></div>

        <div class="container-hills2-spot">

            <div class="circle" onclick="animate_maps('.Maps')"></div>
            <div class="container-hills2-spot-groupe">
                <p class="container-hills2-spot-name"><?php echo $lang['sardine-market']?>
 </p>
                <div class="straight_line">
                    <div class="line"></div>
                    <div class="line"></div>
                    <div class="line"></div>

                </div>
                

            </div>
        </div>
<div class="allMaps Maps">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3372.4350087346256!2d-9.24158568485522!3d32.30016498111859!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xdac21260200a3e7%3A0xc55a63db15955f1c!2sPoterie%20Serghini%20-%20Safi%20-%20Morocco!5e0!3m2!1sfr!2sma!4v1594741048887!5m2!1sfr!2sma" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
</div>
        

    </div>
    

</div>
<div class="all-webdesigns">
 
    <div class="groupe_all">

    </div>

</div>
<!-- END container_hills2 -->
<!-- START container_hills2 -->

<div class="half-white-space"></div>


</div>


<div class="container-hills2 reveal">
    
    <div  class="container-hills2-des">
        <h1 class="container-hills2-title"><?php echo $lang['sardine-BBQ']?> </h1>
        <div class="line"></div>
          
        <div class="half-white-space"></div>
        <p class="container-hills2-text"><?php echo $lang['sardine-bbq-desc']?></p>
<div class="half-white-space"></div>
<div class="images">
    <img src="format/img/Sardine_img/5201714104741.png" alt="">
    <img src="format/img/Sardine_img/hqdefault-3.png" class="images-img" alt="">
    <img src="format/img/Sardine_img/68478762_1306642516149886_8300367261248520192_n.png" alt="">
</div>
        <div class="container-hills2-spot">

            <div class="circle" onclick="animate_maps('.Maps2')"></div>
            <div class="container-hills2-spot-groupe">
                 <p class="container-hills2-spot-name"> visiter Tous les restaurants de Sardines</p>
                <div class="straight_line">
                    <div class="line"></div>
                    <div class="line"></div>
                    <div class="line"></div>

                </div>
                

            </div>
        </div>
        <div class="allMaps Maps2">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3372.4350087346256!2d-9.24158568485522!3d32.30016498111859!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xdac21260200a3e7%3A0xc55a63db15955f1c!2sPoterie%20Serghini%20-%20Safi%20-%20Morocco!5e0!3m2!1sfr!2sma!4v1594741048887!5m2!1sfr!2sma" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
</div>
        

    </div>
    <div class="container-hills2-pic2">

    </div>

</div>

<!-- END container_hills2 -->
<!-- START container_hills2 -->

<div class="half-white-space"></div>

</div>


<!-- END container_hills2 -->

</div>
<div class="bg-design2-blue">

</div>
<div class="Next-destination reveal">
    <h4><?php echo $lang['Destination']?> </h4><br>
    <div class="line-2" style="margin: auto;"></div>
    <div class="white-space"></div>
    <h1><?php echo $lang['Destination-desc']?></h1><br>
    <div class="white-space"></div>
    <button><a href="index.php?action=pottery" class="btn"><?php echo $lang['Discover-desc']?></a></button>
</div>
<?php include 'include/footer.php'?>
<script src="format/js/main.js"></script>
<script src="format/js/animation.js"></script>
 
</body>
</html>
