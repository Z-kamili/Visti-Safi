<header >      
    <div class="bg-image">
    <div class="header">
     <!-- <div class="div_logo"><img id="btn_menu" src="format/img/repo.png" class="logo"></div> -->
    <div class="div_logo"><img id="btn_close" src="format/img/close.png" class="logo"></div>
            <h1>SAFI VILLE</h1>
        <!-- <nav id="menu1">
            <a class="active" href="index.php?action=home">Home</a>
            <a href="index.php?action=sardine">Fish</a>
            <a href="index.php?action=pottery">Pottery</a>
            <a href="index.php?action=surf">Surf</a>
        </nav> -->
        <input type="checkbox" id="chk">
    <label for="chk" class="show-menu-btn">
    <i class="fas fa-ellipsis-h"></i>
    </label>
    <ul class="menu">
      <a href="index.php?action=home"><?php echo $lang['Menu-home']?></a>
      <a href="index.php?action=sardine"><?php echo $lang['Menu-fish']?></a>
      <a class="active" href="index.php?action=pottery"><?php echo $lang['Menu-pottery']?></a>
      <a href="index.php?action=surf"><?php echo $lang['Menu-surf']?></a>
      <a> <select name="forma" onchange="location = this.options[this.selectedIndex].value;">
        <option><?php echo $lang['Langue']?></option>
          <option value="index.php?action=home&lang=en"><a href="index.php?action=home&lang=en"><?php echo $lang['lang_en']?></a></option>
          <option value="index.php?action=home&lang=fr"><a href="index.php?action=home&lang=fr"><?php echo $lang['lang_fr']?></a></option>
      </select></a>
      <label for="chk" class="hide-menu-btn">
        <i class="fas fa-times"></i>
      </label>
    </ul>
    </div>
    
    <!-- <img class="image-bg" src="format/img/Mainheader.svg"> -->

    <!-- <div>
        <img class="image" src="format/img/Mere.svg">
    </div> -->
     
    <img class="image1" src="format/img/MainHeader.svg">
   
    <div class="img-header"><img class="image2"  src="format/img/head-img.svg"></div>
        <img class="image" src="format/img/Mere.svg">
    </div>  
</header>
<!-- <script src="format/js/main.js">
</script> -->