<?php
session_start();

    if (isset($_POST['logout'])) {
header('location:tt.php');

    } 
?>


<html>
<head>
	<title></title>
</head>
<style type="text/css">

body{
margin-top: 0px;margin-right: 0px;margin-left: 0px;margin-bottom: 0px;
}
	 body,html{
    height: 100%;
    margin: 0;

   }
   .bg {
    background-image: url("capture.PNG");
   /* Full height */
    height: 100%; 

    /* Center and scale the image nicely */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
  padding-top: 0px;
   }
   p {
   	color:white;
   }
   .btnn {
    border: none;
    color: white;
    padding: 14px 28px;
    font-size: 14px;
    cursor: pointer;
}
.w3{
  width:100px;
}
.order {background-color:rgba(51, 0, 51,0.5);} /* Green */
.order:hover {background-color:rgba(51, 0, 51,1);}
   .flo {

  display: inline-block;

}
.flo:hover{
 
}
.floo{
  display: none;
  position: absolute;
  background-color: rgba(0, 0, 0,0.7);
  font-size: 20px;
  max-width: 170px;
  box-shadow: 0px 100px 100px 0px rgba(0,0,0,0.2);
  padding: 4px 16px;
  padding-top: 4px;
  padding-bottom: 4px;
  border: 1px solid white ;
  border-radius: 7px;



}

.flo:hover .floo{display: block;}
.float{
	float: right;float: left;float: top;float: bottom;

}
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
<body class="bg">
	<form action="menu.php" method="POST">

<div style="margin-left:1200px;" class="flooo float"><p class="" style="font-size:30px;"><?php echo $_SESSION['firstname'] ;?></p><div class="floooo"><button class="order btnn w3" name="logout">Logout</button><br></div></div>
		<center>
<p1 style="color:white;font-size:35px;margin-right:80px;">Menu</p1>
</center>
  	<table>
  	<tr><td><div style="border:1px solid white ;height:200px;width:300px;; margin-left:70;margin-top:70px;background-color:rgba(51, 0, 51,0.5);border-radius:11px;">
   		<center>
<p>Pizza</p>
</centermargin-top:70px;>
<table style="margin-top:20px;">
<tr><td style="color:white">Pizza poullet</td><td  style="width:110px"></td><td><div class="flo"><button>Buy</button> <div class="floo"><p>How much</p><table><tr><td><input style="width:90px;" type="text"></td><td><input type="submit" value="Buy"></td></tr></table></div></div></td></tr>
<tr><td style="color:white">Pizza au sommon</td><td  style="width:110px"></td><td><div class="flo"><button>Buy</button> <div class="floo"><p>How much</p><table><tr><td><input style="width:90px;" type="text"></td><td><input type="submit" value="Buy"></td></tr></table></div></div></td></tr>
<tr><td style="color:white">Pizza pomme</td><td  style="width:110px"></td><td><div class="flo"><button>Buy</button> <div class="floo"><p>How much</p><table><tr><td><input style="width:90px;" type="text"></td><td><input type="submit" value="Buy"></td></tr></table></div></div></td></tr>
<tr><td style="color:white">Pizza poullet</td><td  style="width:110px"></td><td><div class="flo"><button>Buy</button> <div class="floo"><p>How much</p><table><tr><td><input style="width:90px;" type="text"></td><td><input type="submit" value="Buy"></td></tr></table></div></div></td></tr>
</table>
  	</div> </td> <td style="width:100px;"></td><td>
   	<div style="border:1px solid white ;height:200px;width:300px;margin-top:70px;padding-left:10px;background-color:rgba(51, 0, 51,0.5);border-radius:11px;">
   		<center>
<p>Homburger</p>
</center>
<table style="margin-top:20px;">
<tr><td style="color:white">Homburger poullet</td><td  style="width:82px"></td><td><div class="flo"><button>Buy</button> <div class="floo"><p>How much</p><table><tr><td><input style="width:90px;" type="text"></td><td><input type="submit" value="Buy"></td></tr></table></div></div></td></tr>
<tr><td style="color:white">Homburger au sommon</td><td  style="width:82px"></td><td><div class="flo"><button>Buy</button> <div class="floo"><p>How much</p><table><tr><td><input style="width:90px;" type="text"></td><td><input type="submit" value="Buy"></td></tr></table></div></div></td></tr>
<tr><td style="color:white">Homburger viande</td><td  style="width:82px"></td><td><div class="flo"><button>Buy</button> <div class="floo"><p>How much</p><table><tr><td><input style="width:90px;" type="text"></td><td><input type="submit" value="Buy"></td></tr></table></div></div></td></tr>
<tr><td style="color:white">Homburger poullet</td><td  style="width:82px"></td><td><div class="flo"><button>Buy</button> <div class="floo"><p>How much</p><table><tr><td><input style="width:90px;" type="text"></td><td><input type="submit" value="Buy"></td></tr></table></div></div></td></tr>
</table>
  	</div></td><td style="width:100px;"></td><td>
 	<div style="border:1px solid white ;height:200px;width:300px;margin-top:70px;padding-left:10px;background-color:rgba(51, 0, 51,0.5);border-radius:11px;">
   		<center>
<p>Boisson</p>
</center>
<table style="margin-top:20px;">
<tr><td style="color:white"> Cocacola</td><td  style="width:155px"></td><td><div class="flo"><button>Buy</button> <div class="floo"><p>How much</p><table><tr><td><input style="width:90px;" type="text"></td><td><input type="submit" value="Buy"></td></tr></table></div></div></td></tr>
<tr><td style="color:white"> Fanta</td><td  style="width:155px"></td><td><div class="flo"><button>Buy</button> <div class="floo"><p>How much</p><table><tr><td><input style="width:90px;" type="text"></td><td><input type="submit" value="Buy"></td></tr></table></div></div></td></tr>
<tr><td style="color:white">Jus Banane</td><td  style="width:155px"></td><td><div class="flo"><button>Buy</button> <div class="floo"><p>How much</p><table><tr><td><input style="width:90px;" type="text"></td><td><input type="submit" value="Buy"></td></tr></table></div></div></td></tr>
<tr><td style="color:white">Jus d'orange</td><td  style="width:155px"></td><td><div class="flo"><button>Buy</button> <div class="floo"><p>How much</p><table><tr><td><input style="width:90px;" type="text"></td><td><input type="submit" value="Buy"></td></tr></table></div></div></td></tr>
</table>
  	</div></td></tr>

  </table>

  </div>
 </form>
</body>
</html>