<?php
 require('Controller/controller.php');

if(isset($_GET['action'])){
  if($_GET["action"] == "home"){
     gethome();
  }else if($_GET["action"] == "pottery"){
      getpottery();
  }else if($_GET["action"] == "sardine"){
      getsardine();
  }else if($_GET["action"] == "surf"){
    getsurf();
}
}else{
  gethome();
}
?> 