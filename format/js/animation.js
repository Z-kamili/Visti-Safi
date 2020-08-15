const ratio = .1
   const options = {
	root: null,
	rootMargin: '0px',
	threshold: .1
  }
const handleIntersect = function(entries,observer){
entries.forEach(function(entry){
  if(entry.intersectionRatio > ratio){
   entry.target.classList.add('reveal-visible')
    observer.unobserve(entry.target);
  }
})
  }
 const observer = new IntersectionObserver(handleIntersect,options);
document.querySelectorAll('.reveal').forEach(function(r){
  observer.observe(r);
})

/*animation maps*/
function animate_maps(classe){
    if ($(classe).is(":hidden")){
      $(classe).show("slow");
    }else{
      $(classe).hide("slow");
    }

}
function animate_maps_surf(classe){
  let x = document.getElementsByClassName(classe)[0];
// console.log("dssdffsd");
    if(window.getComputedStyle(x).display === "none"){
      x.style.display = "block";
    }else{
     x.style.display = "none";
    }

}

