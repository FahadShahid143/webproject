<div id="main-section"> 
          <div id="main-top-poster">
              <div class="w3-content w3-section">
  <img class="mySlides" src="images/slider.png">
  <img class="mySlides" src="images/VIJ.14.07_Slider_Shopping_FINAL.jpg" width="100%">
  <img class="mySlides" src="images/slider-images-1.jpg" width="100%">
  <img class="mySlides" src="images/slider.jpg" width="100%">
</div>

<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>
          </div>
