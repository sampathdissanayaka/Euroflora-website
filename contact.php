<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="css/contact.css">
    <style>
        
        img{
           
           width:20%;
           margin-left:auto;
           margin-right: auto;
           display:block;
       }

       p{
           margin-left:auto;
           margin-right:auto;
           width: 750px;
       }

       form{
           text-align:right;
           margin-left: auto;
           margin-right:auto;
           width:500px;
       }

       .input1{
           padding-right:250px;
           padding-bottom: 10px;
           
       }

       .input2{
           padding-right:250px;
           padding-bottom: 100px;
       }

       .textphone{
           padding-bottom: 10px;
           padding-right: 88px;
       }

       .text3{
           padding-right: 50px;
           padding-bottom: 10px;
       }

       .attachment{
           margin-right:px;
       }
        
   
 
    </style>

</head>
<body>
    <hr>
    <img src ="image/euroflora-logo.png"><br><br>
    <p>We are Online! Welcome to Instant Answer Messaging. During the opening hours of the shop, your
        request will be read and managed in real time. If you have already placed an order you can call the
        phone number dedicated to the customers, you received in the summary email.</p>

        <br><br><br>
        <form>
            <label>Name*</label>
            <input type ="text" name ="name" class ="input1"><br><br>
            <labal>E-Mail*</labal>
            <input type = "text" name ="email" class ="input1"><br><br>
            <labal>Phone*</labal>
            <select name ="phone" class ="textphone">
                <option>Sri Lanka +94</option>
            </select>
            <input type ="text" class="text3" placeholder ="Mobile number">
            <br><br>
            <labal>Order code</labal>
            <input type ="text" name="order" placeholder ="Enter the code received by email if available" class ="input1"><br><br>
            <labal>Message</labal>
            <input type ="text" class="input2" name ="message" placeholder="Describe your request accurately to receive better info."><br><br>
            <labal>Attachment</labal>
            <input type ="file" name ="Attachment" class="attacment"><br><br>
            <input type ="submit" name="submit">
            
        </form>
    



</body>
</html>