
<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    //something posted

    if (isset($_POST['order'])) {
header('location:menu.php');

    } 
}
?>


<!DOCTYPE html>
<html>
<title>W3.CSS</title>

<link href="tt.css"  rel="stylesheet">
<style>
body {
 
margin-top: 0px; margin-bottom: 0px; margin-left: 0px; margin-right: 0px;

   }
   body,html{
    height: 100%;
    margin: 0;

   }
   .bg {
    background-image: url("large.JPG");
   /* Full height */
    height: 100%; 

    /* Center and scale the image nicely */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
   }
.ta{margin-left: 900px;
}
.ta2{
  float: left;

}
th {
  width: 200px;
}


.fl{
  float: left;
  float: right;
  margin-right: 400px;
}

h1{color: red;
float: right;
margin-right: 550px;
font-size: 37px;}
h2{ float: left; float:top; float: bottom; 
 }
.h21{
  color: white;
  font-family: serif; 
  font-size: 28px;
}
.h22{
  color: white;
}
.mySlides {display:none;}
.mid{

  }
  .fe{
    position: relative;
    display: inline-block;
  }
  .fe:hover{
    background-color: silver;
  }
.btnn {
    border: none;
    color: white;
    padding: 14px 28px;
    font-size: 16px;
    cursor: pointer;
}
.w2{
  width: 200px;
}
.w1{
  width: 140px;
}
.order {background-color:rgba(0, 153, 153,0.5);} /* Green */
.order:hover {background-color: rgb(0, 102, 102);}
.btnnn {
    border: none;
    color: white;
    padding: 14px 28px;
    font-size: 14px;
    cursor: pointer;
}
.w3{
  width:100px;
}
.orderr {background-color:rgba(51, 0, 51,0.2);} /* Green */
.orderr:hover {background-color:rgba(51, 0, 51,0.7);}
.bor{
border: 2px solid white;
border-radius: 7px;
margin-top: 500px;

}
.bo{

  width: 705px;
  height: 400px;
}
.b{
  border:2px solid white;
  border-radius: 7px;
  width: 500px;
}
.bord{
  width: 200px;
  height: 150px;
  
  

}
.flo {

  display: inline-block;

}
.flo:hover{
  box-shadow: 5px 5px 5px 5px rgba(20,20,20,0.1);
}
.floo{
  display: none;
  position: absolute;
  background-color: rgba(0,153,153,0.4);
  font-size: 20px;
  min-width: 50px;
  box-shadow: 0px 100px 100px 0px rgba(0,0,0,0.2);
  padding: 12px 16px;
border: 1px solid white;

}

.flo:hover .floo{display: block;}
.floooo{
  display: none;
  position: absolute;
  background-color: rgba(0, 0, 0,0.7);
  font-size: 20px;
  max-width: 100px;
  box-shadow: 0px 100px 100px 0px rgba(0,0,0,0.2);
  padding: 0px 0px;
  padding-top: 0px;
  padding-bottom: 0px;
  border: 1px solid white ;
  border-radius: 7px;



}

.flooo:hover .floooo{display: block;}


.float{
  float: right;float: left;float: top;float: bottom;

}


</style>
<body>
<form method="POST" action="tt.php">
  <section class="bg">
  <div style="background-color:rgba(0,0,0,0.6) ; margin:0;">

  <section style="background-color: rgba(0, 153, 153,0.4);

 height:90px; margin-top:0px ;"> <h1 style="color:rgb(51, 0, 51);">Developers restaurant</h1>
  <table style="margin-left:1200px; font-size:25px;" >
<tr><td style="color:white;font-size:32px;"><div class="flooo"><?php echo $_SESSION['firstname'] ;?><div class="floooo"><button class="btnn orderr w3" name="logout">Logout</button></div></div></td></tr>

   
 </table>
  </section>
  <br>
<center>
<table class="fl">
  <tr><td>
<h2 class="h21">Pick up your favorite food ! </h2>
</td></tr><tr><td>

<div class="b" style="max-width:500px">
  <img class="mySlides" src="lazanya.jpg" style="width:100%">
  <img class="mySlides" src="pizza.jpg" style="width:100%">
  <img class="mySlides" src="hum.jpg" style="width:100%">
</div>
</td></tr><tr><td>

  <input type="submit" class="btnn order w1 " name="order" value="Order now !">
 
                   

</div>

</div>


</td></tr>
</table>
</center>
<table class="ta2">
<tr><td><button class="order btnn w2">Order</button></td></tr>
<tr><td><button class="order btnn w2">Food gallery</button></td></tr>
<tr><td><button class="order btnn w2">Restaurant photos</button></td></tr>
<tr><td><button class="order btnn w2">Our place</button></td></tr>
<tr><td><button class="order btnn w2">Your opinions</button></td></tr>
<tr><td><button class="order btnn w2">Our chefs</button></td></tr>
<tr><td><button class="order btnn w2">And more</button></td></tr>
</table>

<center>
<h2 class="h22" style="margin-left:153px;border-top:2px solid rgb(51, 0, 51);border-bottom:2px solid rgb(51, 0, 51);border-left:2px solid rgb(51, 0, 51) ; background-color: rgba(0, 153, 153,0.4);">Our retaurant</h2>

<section class="bor bo" style="border-bottom:2px solid white">
  <img class="mySlide" src="res.jpg" style="width:100%">
  <img class="mySlide" src="resta.jpg" style="width:100%">
  <img class="mySlide" src="rest.jpg" style="width:100%">
</section></center>


  <table style="border:   black; margin-left:350px; border-radius:6px;" > <tr>
  <th>  <div style="border:2px solid white;"> <img  class="bord"   src="res.jpg"></div></th>
 <th>  <div style="border:2px solid white;"> <img  class="bord"  src="resta.jpg" ></div></th>
  <th>  <div style="border:2px solid white;"> <img  class="bord" src="rest.jpg"></div></th>
</tr></table>
<br><br><br><br><br><br><br><br><br><br><br><br>

<table style="width:100% ; hight:180px; border:1px solid black;background-color: rgba(0, 153, 153,0.5);">
  <tr><td style="width:20%; color:rgb2(204,255,153); font-size:25px;">The Devolopers</td><td style="color:rgbrgb(255, 204, 204);font-size:20px; color:rgb(255, 204, 204)">contact us</td> <td style="color:rgb(0, 51, 0);font-size:20px; color:rgb(255, 204, 204)"> Our restaurant</td><td style="color:rgb(0, 51, 0);font-size:20px; color:rgb(255, 204, 204)" >Our chefs</td></tr>
  <tr><td style="width:20%;"></td><td> <a href="" target="_blank" style="color:rgb(204, 204, 255);"> Email </a></td> <td> <a href="" target="_blank" style="color:rgb(204, 204, 255);">  Our rooms </a></td><td > <a href="" target="_blank" style="color:rgb(204, 204, 255);"> Our chefs</td></tr>
  <tr><td style="width:20%;"></td><td> <a href="" target="_blank" style="color:rgb(204, 204, 255);"> Phone number </a></td> <td> <a href="" target="_blank" style="color:rgb(204, 204, 255);">  Our food </a></td><td > <a href="" target="_blank" style="color:rgb(204, 204, 255);"> Our chefs </a></td></tr>
    <tr><td style="width:20%;"></td><td> <a href="" target="_blank" style="color:rgb(204, 204, 255);"> Facebook </a></td> <td> <a href="" target="_blank" style="color:rgb(204, 204, 255);">  Our places </a></td><td > <a href="" target="_blank" style="color:rgb(204, 204, 255);"> Our chefs </a></td></tr>
    <tr><td style="width:20%;"></td><td> <a href="" target="_blank" style="color:rgb(204, 204, 255);"> Facebook </a></td> <td> <a href="" target="_blank" style="color:rgb(204, 204, 255);">  Our places </a></td><td > <a href="" target="_blank" style="color:rgb(204, 204, 255);"> Our chefs </a></td></tr>
<tr><td><br></td></tr>


</table>

</div>
</section>


<script>
var myIndex = 0;
carouse();

function carouse() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carouse, 2200); // Change image every 2 seconds
}

</script>
<script type="text/javascript">
var myInde = 0;
carousel();

function carousel() {
    var j;
    var y = document.getElementsByClassName("mySlide");
    for (j = 0; j < y.length; j++) {
       y[j].style.display = "none";  
    }
    myInde++;
    if (myInde > y.length) {myInde = 1}    
    y[myInde-1].style.display = "block";  
    setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>
</form>
</body>
</html>