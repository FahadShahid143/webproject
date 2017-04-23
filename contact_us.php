<?php
require_once './views/header.php';
?>
      <div id="contact-us">
      	<div id="contact-picture">
                        <img src="images/FEATURED 3 copy.png" >
        
        </div>
      	<div id="contact-us-left">
        		<h1><u>Contact Us</u></h1>
            Name:<input class="contact-padding" type="text" name="name"  placeholder="Enter your Name">
            <br>
            Email:<input class="contact-padding" type="email" name="emal" placeholder="Enter your email"><br>
            Phone:<input class="contact-padding" type="number" name="phone" placeholder="Enter your phone #"><br>
            Role:<input class="contact-padding" type="radio" name="role">Student
            <input type="radio" name="role">Teacher
            <br>
            Message: <br><textarea rows="6" cols="25" id="message-spacing" class="contact-padding" name="message" placeholder="Enter your message"></textarea><br>
            <input type="submit" value="submit">
               

        
        
        </div>
        <div id="contact-us-right">
        	<h1>Address:</h1>
            <textarea rows="6" cols="25">The Business is located at XYZ mall, near ABC ground, at PQR road, Lahore, Pakistan.</textarea>
            
            <br>
            <b>Google Map</b>

<div id="googleMap" style="width:300px;height:100px;"></div>

<script>
function myMap() {
var mapProp= {
    center:new google.maps.LatLng(51.508742,-0.120850),
    zoom:5,
};
var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
}
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCaqzCi2yrY4WSwcxnqtJqSAHXGZgL2Vbc&callback=myMap"></script>
        
        </div>
      
      </div>
      
       <?php
require_once './views/sponsors.php';
require_once './views/footer.php';
?>