<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <meta charset="utf-8">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<style>
    *{
        margin:0px;
        padding:0px;
        box-sizing:border-box;
        font-family:'roboto',sans-serif;
    }
    body{
        background-color: #f2f2f2;

    }
    .heading{
        width:90%;
        display:flex;
        justify-content:center;
        align-items:center;
        flex-direction:column;
        text-align:center;
        margin:20px auto;
        }
        .heading h1{
            font-size:50px;
            color:#000;
            margin-bottom:25px;
            position:relative;
            font-family:arial black;
        }
        .heading h1 :: {
            content:"";
            position:absolute;
            width:100%;
            height:4px;
            display:block;
            margin:0 auto;
            background: color #4caf50;
        
        }
        .heanding p{
            font-size:18px;
            color:#666;
            margin-bottom:20px;
            
        }
        .container{
            width:90%;
            margin:0 auto;
            padding:10px 20px;
        }
        /* .about{
        display:flex;
        justify-content:space-between;
        align-items:center;
        flex-wrap:wrap;  
        }
        .about-image{
            flex:1;
            margin-right:40px;
            overflow:hidden;
        }
        .about-image{
            max-width:100%;
            height:auto;
            display:block;
            transition:0.5s ease;
        }
        .about-image: hover img{
            transform: scale(1.2);

        } */
        .about-content{
            flex:1 
        }
        .about-content h2{
            font-size:23px;
            color:#333;
            margin-bottom:15px;
        }
        .about-content p{
            font-size:18px;
            color:#666; 
            line-height:1.5;
        }
</style>
<body>
    <div class="heading">
        <h1>About Us</h1>
        <p style="font-family:verdana; font-size:25px;">Hey there! Welcome to our online electronic shop! 🎉 At TRK Electronic Shop</p>
    </div>
    <div class="container">
        <a href="index.php" class="btn btn-warning">Home</a>
        <section class="about">
            <div class="" style="margin-left:100px;">
                <!-- <img src="iphn15.jfif" alt=""> -->
                <video autoplay muted loop>
                    <source src="aboutv.mp4">
                </video>
            </div>
            <div class="about-content">
                <br>
                <br>
                <br>
                <p  style="font-family:times new romans; font-size:20px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Our mission is to provide you with the latest and greatest electronic gadgets that make your life easier and more enjoyable. We're a team of tech enthusiasts who are passionate about bringing you top-notch products and exceptional customer service.
With years of experience in the industry, we've carefully curated a collection of high-quality electronics that cater to all your needs. Whether you're looking for smartphones, laptops, smart home devices, or accessories, we've got you covered!
What sets us apart is our commitment to delivering outstanding value to our customers. We strive to offer competitive prices, fast shipping, and a hassle-free shopping experience. Our knowledgeable team is always here to assist you with any questions or concerns you may have.
We believe in the power of technology to transform lives, and we're excited to be a part of your journey. So go ahead, explore our shop, and discover the perfect tech companion for you!
Thank you for choosing our TRK Electronic Shop. We can't wait to help you find your next favorite gadget! 😊🛍️"
</p>
                <!-- <a href="" class="read-more">Read-More</a> -->
            </div>
        </section>
    </div>
</body>
</html>
<?php
    
?>