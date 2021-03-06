﻿<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Malshan Flora</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/home.css">

    <style>
        
*{
    margin:0;
    padding:0;
}
.logo img{
    width:25%;
}
.logo{
    float:left;
    margin-left:35px;
    margin-top:0px;
}

.link ul li {
    display:inline;
    margin-left:15px;
    
    font-color:black;   
}
.link ul li a{
    text-decoration:none;
   
}
a:hover{
    text-decoration: underline;
    color:red;
}

.link ul {
    margin-left:700px;
}

.section1{
    background-color:#FFE4C4;
    padding:20px;
}

a:hover{
    text-decoration:underline;
}

body{
    background-color: darkgrey;
   
}

.section2{
    
   background-color: white;
    margin-left:auto;
    margin-right: auto;
    width:70%;
    padding-left: 50px;
    padding-right:20px;
    
}

.section2 h2{
    padding-top: 15px;
    margin-bottom: 15px;
    padding-left:15px;
    font-family: Brush Script MT, Brush Script Std, cursive;
    font-size: 200%;

}



.text1{
    background-color: white;
    background-color-width:200px;
    position:relative;
    top:-170px;
    left:50px;
    margin:auto;
    width: 320px;  
    text-align: center;     
    padding:15px;
    opacity: 0.7;

}

.text2{
    background-color: white;
    text-align: center;
    margin:auto;
    position:relative;
    top:-130px;
    left:380px;
    width:160px;
    opacity: 0.8;

}

.text3{
    margin:auto;
    width:990px;
    margin-top:-40px;
}

.row{
  display:flex;
  margin-bottom:50px;
}

.imgtext{
    margin-left:25px;
    display:inline-flexbox;
    
}

.mainimg{
    border:1px solid black;
    
 
}


.tsty{
   font-family: Brush Script MT, Brush Script Std, cursive;
   font-size: 160%;
}

.shap{

 margin-top:15px;  
float:right;   
display: inline-block;

width: auto;
height: 38px;

background-color: #521919;
-webkit-border-radius: 3px 4px 4px 3px;
-moz-border-radius: 3px 4px 4px 3px;
border-radius: 3px 4px 4px 3px;

border-left: 1px solid #979797;

/* This makes room for the triangle */
margin-left: 19px;

position: relative;

color: white;
font-weight: 300;
font-family: 'Source Sans Pro', sans-serif;
font-size: 22px;
line-height: 38px;

padding: 0 10px 0 10px;
}

/* Makes the triangle */
.shap:before {
content: "";
position: absolute;
display: block;
left: -19px;
width: 0;
height: 0;
border-top: 19px solid transparent;
border-bottom: 19px solid transparent;
border-right: 19px solid #521919;
}

/* Makes the circle */
.shap:after {
content: "";
background-color: white;
border-radius: 50%;
width: 4px;
height: 4px;
display: block;
position: absolute;
left: -9px;
top: 17px;


}

.imgt{
    
    margin-left:20px;
}

.icon1{
    position:absolute;
    top:145px;
    right:245px;
}

.icont{
    position: relative;
    top:-55px;
    right:-14px;
}
    </style>
</head>
<body>
    <div class="section1">
    <div class="logo ">
    <img src="image/euroflora-logo.png">

    </div>

    <div class="link">
        <ul>
            <li><a href=""><i class="fa fa-home"></i> Home</a></li>
            <li><a href="contact.php"><i class="fa fa-envelope"></i> Contact us</a></li>
            <li><a href=""><i class="fa fa-th-large" aria-hidden="true"></i> The florist</a></li>
            <li><a href=""><i class="fa fa-camera" aria-hidden="true"></i> Gallery</a></li>
            <li><a href=""><i class="fa fa-cogs" aria-hidden="true"></i> How to order</a></li>
            <li><a href=""><i class="fa fa-phone"></i> Order by phone</a></li>
            <li><a href=""><i class="fa fa-comment" aria-hidden="true"></i> Chat</a></li>


        </ul>
    </div>
        </div>

        <div class ="section2">
          <h2><span style="font-size: 140%;">Malshan Flora</span>  your online Florist to deliver Flowers in Kotikawatta</h2>
          <div class="mainimg">
          <img src="image/euroflora-florist-flower-bouquet.jpg">
          <img src="image/Cheyanne.jpg">
          </div>
          <div class=icon1><i class="fa fa-certificate" style="font-size:75px;color:#ffa64d"></i>
          <p class =icont style="font-size:180%">5%</p>
        </div>
       
    
        <div class ="text1">
            <h4>SEPTEMBER OFFERS: TODAY -15%</h4>
            <hr>
            <p> Delivery service included</p>

        </div>

        <div class ="text2">
            <p>Roses and mixed flowers from 78.80 €</p>

        </div>
        <br>
        
        <div class ="text3">
            <p>We offer a same day Flowers and Plants delivery service in Kotikawatta even in a few hours.
                From our online Flower shop can order nice Bouquets and Flowers Gifts quickly and easily.
                Choose your Bouquet from 68 € delivery included. Payments accepted: Credit Card and Paypal.</p>
        </div>
        <br><br>

        <div class ="image">
            <div class="row">

            <div class="imgt">
            <a href ="thesmile.php"><img src ="image/the smile.jpg"></a>
            <div class="imgtext"><span class="tsty">The Smile</span><br>Roses and mixed flowers</div>
            <i style="font-size:35px; color:#521919; margin-top: 50px; margin-right: 30px;" class="fa">&#xf05a;</i>
            <p class="shap" style="margin-top: 50px;">from 78.90 €</p>
            </div>

           <div class="imgt">
            <img src ="image/remy.jpg">
            <div class =imgtext><span class="tsty">Remy</span><br>White and red roses, lilies,<br> daisies or gerberas and<br> mixed flowers</div>
            <i style="font-size:35px; color:#521919; margin-top: 14px;" class="fa">&#xf05a;</i>
            <p class="shap">from 78.80 €</p>
           </div>

            <div class="imgt">
            <img src ="image/vwana.jpg">
            <div class="imgtext"><span class="tsty">Vwana</span><br>Sunny roses, gerberas, <br>alstroemerias and mixed flowers</div>
            <i style="font-size:35px; color:#521919; margin-top: 28px;" class="fa">&#xf05a;</i>
            <p class="shap" style="margin-top: 30px;">from 77.50 €</p>
            </div>

            <div class="imgt">           
            <img src ="image/nora.jpg">
            <div class="imgtext" style="margin-top: 10px;"><span class="tsty">Nora</span><br>Red roses, daisies and mixed flowers</div>
            <i style="font-size:35px; color:#521919; margin-top: 40px;" class="fa">&#xf05a;</i>
            <p class="shap" style="margin-top: 45px;">from 77.70 €</p>
            </div>
            </div>

            <div class="row">

                <div class="imgt">
                <img src ="image/alexa.jpg">
                <div class="imgtext" style="margin-top: 40px;"><span class="tsty">The Smile</span><br>Roses and mixed flowers</div>
                <i style="font-size:35px; color:#521919; margin-top: 45px;" class="fa">&#xf05a;</i>
                <p class="shap" style="margin-top: 50px;">from 77.00 €</p>
                </div>
    
               <div class="imgt">
                <img src ="image/aria.jpg">
                <div class =imgtext><span class="tsty">Remy</span><br>White and red roses, lilies,<br> daisies or gerberas and<br> mixed flowers</div>
                <i style="font-size:35px; color:#521919; margin-top: 15px;" class="fa">&#xf05a;</i>
                <p class="shap">from 77.70 €</p>
               </div>
    
                <div class="imgt">
                <img src ="image/bianca.jpg">
                <div class="imgtext"><span class="tsty">Vwana</span><br>Sunny roses, gerberas, <br>alstroemerias and mixed flowers</div>
                <i style="font-size:35px; color:#521919; margin-top: 25px;" class="fa">&#xf05a;</i>
                <p class="shap" style="margin-top: 30px;">from 89.00  €</p>
                </div>
    
                <div class="imgt">           
                <img src ="image/Cheyanne.jpg">
                <div class="imgtext"><span class="tsty">Nora</span><br>Red roses, daisies and mixed flowers</div>
                <i style="font-size:35px; color:#521919; margin-top: 27px;" class="fa">&#xf05a;</i>
                <p class="shap" style="margin-top: 35px;">from 78.00 €</p>
                </div>
                </div>
        
                <div class="row">

                    <div class="imgt">
                 <img src ="image/Denise.jpg">
                    <div class="imgtext"><span class="tsty">The Smile</span><br>Roses and mixed flowers</div>
                    <i style="font-size:35px; color:#521919; margin-top: 48px;" class="fa">&#xf05a;</i>
                    <p class="shap" style="margin-top: 50px;">from 78.90 €</p>
                    </div>
        
                   <div class="imgt">
                    <img src ="image/gabriella.jpg">
                    <div class =imgtext style="margin-top: 15px;"><span class="tsty">Remy</span><br>White and red roses, lilies,<br> daisies or gerberas and<br> mixed flowers</div>
                    <i style="font-size:35px; color:#521919; margin-top: 12px;" class="fa">&#xf05a;</i>
                    <p class="shap">from 77.80 €</p>
                   </div>
        
                    <div class="imgt">
                    <img src ="image/Lia.jpg">
                    <div class="imgtext"><span class="tsty">Vwana</span><br>Sunny roses, gerberas, <br>alstroemerias and mixed flowers</div>
                    <i style="font-size:35px; color:#521919; margin-top: 25px;" class="fa">&#xf05a;</i>
                    <p class="shap" style="margin-top: 30px;">from 92.70 €</p>
                    </div>
        
                    <div class="imgt">           
                    <img src ="image/Lucille.jpg">
                    <div class="imgtext"><span class="tsty">Nora</span><br>Red roses, daisies and mixed flowers</div>
                    <i style="font-size:35px; color:#521919; margin-top: 40px;" class="fa">&#xf05a;</i>
                    <p class="shap" style="margin-top: 45px;">from 84.90  €</p>
                    </div>
                    </div>


    
        </div><hr>

        </div>


</body>
</html>