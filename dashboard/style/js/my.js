
// here start the quantity increasing and decreasing funntion
var qty = 1;
function plus(id){
  if(qty<9){
    var x = document.getElementById(id).value;
    document.getElementById(id).innerHTML = ++(Number(x));
  }else{
    document.getElementById(id).innerHTML = 9;
  }
}
function minus(){
  if(qty>1){
    document.getElementById(id).innerHTML = --qty;
  }else{
    document.getElementById(id).innerHTML = 1;
  }
}// here end the quantity increasing and decreasing funntion

function myFunction(id,id2,id3,id4) {
    var x = document.getElementById(id);
    var y = document.getElementById(id2);
    var z = document.getElementById(id3);
    var c = document.getElementById(id4);
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else {
      x.className = x.className.replace(" w3-show", "");
    }

    if (y.className.indexOf("w3-hide") == -1) {
        y.className += " w3-hide";
    } else {
      y.className = y.className.replace(" w3-hide", "");
    }

    if (z.className.indexOf("w3-hide") == -1) {
        z.className += " w3-hide";
    } else {
      z.className = z.className.replace(" w3-hide", "");
    }

    if (c.className.indexOf("w3-text-light-blue") == -1) {
        c.className = c.className.replace(" w3-text-gray", " w3-text-light-blue w3-white");
    } else {
      c.className = c.className.replace(" w3-text-light-blue w3-white", " w3-text-gray");
    }

}

// tab function for brands tab
function openBrand(evt, brandName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("Brand");
  for (i = 0; i < x.length; i++) {
      x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" w3-white", "");
  }
  document.getElementById(brandName).style.display = "block";
  evt.currentTarget.className += " w3-white";
}

// tab function for category tab
function openCat(evt, catName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("cat");
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink2");
  for (i = 0; i < x.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" w3-white", "");
  }
  document.getElementById(catName).style.display = "block";
  evt.currentTarget.className += " w3-white";
}

//sidebar function
function w3_open() {
  document.getElementById("main").style.marginLeft = "16%";
  document.getElementById("mySidebar").style.width = "16%";
  document.getElementById("icon").style.marginLeft = "16%";
  document.getElementById("mySidebar").style.display = "block";
  document.getElementById("openNav2").style.display = "inline-block";
  document.getElementById("openNav").style.display = 'none';
}
function w3_close() {
  document.getElementById("main").style.marginLeft = "0%";
  document.getElementById("main").style.width = "100%";
  document.getElementById("icon").style.marginLeft = "0%";
  document.getElementById("mySidebar").style.display = "none";
  document.getElementById("openNav2").style.display = "none";
  document.getElementById("openNav").style.display = "inline-block";
}
