<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/thesmile.css">
    <style>
        
.section1{
    float:left;
    margin-left: 250px;
    padding-left:60px;
}

.section2{
    margin-left:450px;
    margin-right: 100px;
}

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

.link ul {
    margin-left:700px;

}

.section01{
    background-color:#FFE4C4;
    padding:20px;
}

.section02{
    
    background-color: white;
     margin-left:auto;
     margin-right: auto;
     width:70%;
     
 }
 body{
    background-color: darkgrey;
   
}



.outl{
    outline-style: double;
    padding-left:10px;
    padding-top:2px;
    padding-bottom:2px;
    border-radius:10px;
}

.section2 h2{
    font-family: Brush Script MT, Brush Script Std, cursive;
    font-size: 200%;
}



    </style>

</head>
<body>

    <div class="section01">
        <div class="logo ">
        <img src="image/euroflora-logo.png">
    
        </div>
    
        <div class="link">
            <ul>
                <li><a href="home.html"><i class="fa fa-home"></i> Home</a></li>
                <li><a href="contact.html"><i class="fa fa-envelope"></i> Contact us</a></li>
                <li><a href=""><i class="fa fa-th-large" aria-hidden="true"></i> The florist</a></li>
                <li><a href=""><i class="fa fa-camera" aria-hidden="true"></i> Gallery</a></li>
                <li><a href=""><i class="fa fa-cogs" aria-hidden="true"></i> How to order</a></li>
                <li><a href=""><i class="fa fa-phone"></i> Order by phone</a></li>
                <li><a href=""><i class="fa fa-comment" aria-hidden="true"></i> Chat</a></li>
    
    
            </ul>
        </div>
            </div>

    <div class ="section1">
        <img src="image/the smile.jpg">
        <p>Price(delivery included)</p><br>
        <hr><br>
        <div class="outl"><input type ="radio" name ="price"><labal>Standard 78.90 €</labal></div><br>
        <div class="outl"><input type ="radio" name ="price"><labal>Deluxe 98.90 €</labal></div><br>
        <div class="outl"><input type ="radio" name ="price"><labal>Premium 118.90 €</labal></div><br>
        
    </div>

    <div class ="section02">
    <div class="section2"><br>
        <h2>The Smile</h2><br>
        <p style="font-style: bold;">Bouquet of roses and mixed seasonal flowers in vivid colors, decorated with greenery. Suitable
            for every occasion. Conveys joy</p><br>
            <p>Seasonal Flowers or Plants may be changed if unavailable. However, we will try to stick to the type of the
                chosen flowers as much as possible. The vase is not included. The picture usually referring the "Deluxe"
                arrangement.</p><br>
                <hr><br>

                <from>
                    <labal>Delivery date*</labal>
                    <input type ="date" name ="date"><br><br>
                    <labal>Delivery time</labal>
                    
                    <input type ="radio" name ="wdate"><labal>Working Day-Free(9 a.m - 9 p.m) </labal><br>
                    <input type ="radio" name ="wdate"><labal>Sunday and Public Holidays 4.00 €</labal>
                    
                    <br><br>
                    <labal>Quantity</labal>
                    <input type ="text" name =quantity><br><br>
                    <labal>Message<br>out of ideas? Choose a message!</labal>
                    <input type ="" name ="message"><br><br>
                    <labal>Signature</labal><br>
                    <input type ="text" name="signature"><br><br>
                    <input type=submit value="Continue" name="submit">

                </from>
    
    
    </div>
    </div>

</body>
</html>