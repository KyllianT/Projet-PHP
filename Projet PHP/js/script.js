$(document).ready(function(){
    $('.sidenav').sidenav();
    $('.dropdown-trigger').dropdown();
  
    var instance = M.Carousel.init({
      fullWidth: true,
     
    });
  
    // Or with jQuery
  
    $('.carousel.carousel-slider').carousel({
      fullWidth: true,
     
    });
  
  setInterval (function(){
     $('.carousel').carousel('next');
    },2000)
  
    $("#black").click(function(){
      $("#color").css("background-color", "black");
  })

  
    $("#white").click(function(){
      $("#color").css("background-color", "white");
  })

    
    $("#grey").click(function(){
      $("#color").css("background-color", "grey");
  })

  
});

// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

$(".background-style1").on("click", function() {
  var audio = document.getElementById("audio");
  audio.play();
});

$(".background-style2").on("click", function() {
  var audio = document.getElementById("audio");
  audio.play();
});

$(".song").on("click", function() {
  $("#video").css("display", "block");
  var video = document.getElementById("video");
  video.play();
});

$(".brand-logo").click(function(){
  window.open("pagetroll.html");
})

$(".background1").click(function(){
  window.open("project-1.html");
})

$(".background2").click(function(){
  window.open("project-2.html");
})

$(".background3").click(function(){
  window.open("project-3.html");
})