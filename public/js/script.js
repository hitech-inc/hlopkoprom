var a = document.getElementById("bar");

a.addEventListener("click",openNav);

function openNav() {
	document.getElementById("mySidenav").style.width = document.getElementById("mySidenav").style.width === "300px" ? "90px" : "300px" ;
  
  // document.getElementById("main").style.marginLeft = document.getElementById("main").style.marginLeft === "250px" ? "90px" : "250px" ;
     
  //document.getElementById("main").classList.toggle("bodycolor");
  document.getElementById("pseudoElement").classList.toggle("pseudo");
  document.getElementById("mySidenav").classList.toggle("sidenavBackground");
  //document.body.classList.toggle("bodycolor");

  a.classList.toggle("change");
  
}

//mobile menu
var mobileNav = document.getElementById("mMenuOpenBtn");

mobileNav.addEventListener("click", openMobileNav);

function openMobileNav(){
  var size = $("#mobileSideMenu").width();
  //alert(size);
  if (size == 0){
    document.getElementById("mobileSideMenu").style.width = "100%";
    
    $(".mMenu1").animate(
      {
        opacity:1,
      }, 
      {
        duration: 700, 
        specialEasing: {
        opacity: 'swing',
        }
      });

    $(".mMenu2").animate(
      {
        opacity:1,
      }, 
      {
        duration: 800, 
        specialEasing: {
        opacity: 'linear'
        }
      });

    $(".mMenu3").animate(
      {
        opacity:1,
      }, 
      {
        duration: 900, 
        specialEasing: {
        opacity: 'linear'
        }
      });

    $(".mMenu4").animate(
      {
        opacity:1,
      }, 
      {
        duration: 1000, 
        specialEasing: {
        opacity: 'linear'
        }
      });
  }
  else{
    document.getElementById("mobileSideMenu").style.width = "0";
    $(".mMenu1").animate(
    {
      opacity:0
    }, 
    100);
    $(".mMenu2").animate(
    {
      opacity:0
    }, 
    100);
    $(".mMenu3").animate(
    {
      opacity:0
    }, 
    100);
    $(".mMenu4").animate(
    {
      opacity:0
    }, 
    100);
  }
  mobileNav.classList.toggle("change");

}


var wall = document.getElementById("main");
    var newX,newY,oldX = 250,oldY = 250;
	wall.addEventListener("mousemove", function(e) {
    	newX = e.clientX;
		newY = e.clientY;
    if(oldX > e.clientX){
    	x = newX/40+0;
        y = newY/40+0;
    	wall.style.backgroundPosition = "" + -x + "px " + -y+ "px ";
    	oldX = e.clientX;
		oldY = e.clientY;
    } else {
    	x = newX/40+0;
        y = newY/40+0;
      	wall.style.backgroundPosition = "" + -x + "px " + -y + "px ";
        oldX = e.clientX;
		oldY = e.clientY;

    }

});

var romb1 = document.getElementById('romb1');
    romb2 = document.getElementById('romb2');
    romb3 = document.getElementById('romb3');
    romb4 = document.getElementById('romb4');
    romb5 = document.getElementById('romb5');
    romb6 = document.getElementById('romb6');
    romb7 = document.getElementById('romb7');

romb1.children[2].classList.add('fade');
romb2.children[2].classList.add('fade');
romb3.children[2].classList.add('fade');
romb4.children[2].classList.add('fade');
romb5.children[2].classList.add('fade');
romb6.children[2].classList.add('fade');
romb7.children[2].classList.add('fade');

var img1 = 0,
    img2 = 0,
    img3 = 0,
    img4 = 0,
    img5 = 0,
    img6 = 0,
    img7 = 0;
var lastImg1 = 2,
    lastImg2 = 2,
    lastImg3 = 2,
    lastImg4 = 2,
    lastImg5 = 2,
    lastImg6 = 2,
    lastImg7 = 2;

setInterval(fadeImg1, 10000);
setInterval(fadeImg2, 7500);
setInterval(fadeImg3, 7000);
setInterval(fadeImg4, 9000);
setInterval(fadeImg5, 8000);
setInterval(fadeImg6, 8500);
setInterval(fadeImg7, 10500);

function fadeImg1() {
  romb1.children[img1].classList.add('fade');
  img1++;
  romb1.children[lastImg1].classList.remove('fade');
  lastImg1 = img1-1;
  if(img1>2){
    img1 = 0;
    lastImg1 = 2;
  } 
}
function fadeImg2() {
  romb2.children[img2].classList.add('fade');
  img2++;
  romb2.children[lastImg2].classList.remove('fade');
  lastImg2 = img2-1;
  if(img2>2){
    img2 = 0;
    lastImg2 = 2;
  } 
}
function fadeImg3() {
  romb3.children[img3].classList.add('fade');
  img3++;
  romb3.children[lastImg3].classList.remove('fade');
  lastImg3 = img3-1;
  if(img3>2){
    img3 = 0;
    lastImg3 = 2;
  } 
}
function fadeImg4() {
  romb4.children[img4].classList.add('fade');
  img4++;
  romb4.children[lastImg4].classList.remove('fade');
  lastImg4 = img4-1;
  if(img4>2){
    img4 = 0;
    lastImg4 = 2;
  } 
}
function fadeImg5() {
  romb5.children[img5].classList.add('fade');
  img5++;
  romb5.children[lastImg5].classList.remove('fade');
  lastImg5 = img5-1;
  if(img5>2){
    img5 = 0;
    lastImg5 = 2;
  } 
}
function fadeImg6() {
  romb6.children[img6].classList.add('fade');
  img6++;
  romb6.children[lastImg6].classList.remove('fade');
  lastImg6 = img6-1;
  if(img6>2){
    img6 = 0;
    lastImg6 = 2;
  } 
}
function fadeImg7() {
  romb7.children[img7].classList.add('fade');
  img7++;
  romb7.children[lastImg7].classList.remove('fade');
  lastImg7 = img7-1;
  if(img7>2){
    img7 = 0;
    lastImg7 = 2;
  } 
}

