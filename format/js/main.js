// window.addEventListener('load', function () {
//     alert('Hello!')
//   });

 /*animation*/

let video = document.getElementById('video');

document.getElementById("img-bg").addEventListener("click",()=>{
    window.scrollTo(0,2429.60009765625);
 document.getElementsByClassName("bg-modal-2")[0].style.display = "block";
 document.querySelector('body').style.overflowY = "hidden";
 document.querySelector('body').style.overflowX = "hidden";
 document.getElementById("img-bg").style.display = "none";
 video.src = "https://www.youtube.com/embed/PH90fl1AXe0?autoplay=1";
});

document.querySelector('.close').addEventListener("click",()=>{

	document.getElementsByClassName("bg-modal-2")[0].style.display = "none";
	video.src = "https://www.youtube.com/embed/PH90fl1AXe0?autoplay=0";
    location.reload();

});

//gestion menu
// var btn_menu=document.getElementById("btn_menu");
// var btn_close=document.getElementById("btn_close");
// var menu1=document.getElementById("menu1");
// btn_menu.onclick=function()
// {
// 	console.log("hello");
// 	btn_menu.style.display="none";
// 	btn_close.style.display="inline";
// 	menu1.style.display="block";
// } 
// btn_close.onclick=function()
// {
//    btn_menu.style.display="block";
//    btn_close.style.display="none";
//    menu1.style.display="none";

// }
/*slider*/
let title =  document.getElementsByClassName('title-2')[0];
let text = document.getElementsByClassName('text-2')[0];
let slideIndex = 1;
let image = document.getElementById('img-bg-2');
var Data = [

    {
        nom : "Chateau de Mere",
		text:"dkldfdkldkl",
		path : "format/img/mere.png",
    },
    {
		nom : "Best plate",
		text:"dklfjdlkksdks",
		path : "format/img/plat.png"
	},
];

  /*slider*/
Afficher2(slideIndex);
function Incrementer(n) {
  slideIndex = slideIndex + n;
    Afficher2(slideIndex);
    
  }
  function Afficher2(n){

  if (n > Data.length) {slideIndex = 1}
  else if (n < 1) {slideIndex = Data.length}
  console.log(n + " " + (slideIndex-1));
  title.innerText = Data[slideIndex -1].nom;
  image.src = Data[slideIndex - 1].path;
  console.log(image);


  }



 