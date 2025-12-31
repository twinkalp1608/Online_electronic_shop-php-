<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"> -->
<style>
    .carousel-indicators img{
        width:60px;
        display:block;
    }
    ..carousel-indicators button{
        width:max-content!important;
    }
    ..carousel-indicators{
        position:unset;
    }
</style>
</head>
<body>
    <div class="carousel slide" id="carouselDemo" data-bs-wrap="true" data-bs-ride="carousel">
        
    <div class="carousel-inner">

        <div class="carousel-item active" data-bs-interval="1000">
            <img src="electronics-image.jpg" alt="" class="w-100">
            <div class="carousel-caption">
                <h5></h5>
                
            </div>
        </div>
        <div class="carousel-item active" data-bs-interval="2000">
            <img src="apple.jpg" alt="" class="w-100">
            <div class="carousel-caption">
                <h5></h5>
                <p>
                    
                </p>
            </div>
        </div>
        <div class="carousel-item active" data-bs-interval="2000">
            <img src="1234.jpg" alt="" class="w-100">
            <div class="carousel-caption">
                <h5></h5>
                <p>
                   
                </p>
            </div>
        </div>
        

    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#carouselDemo" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </button>

    <button class="carousel-control-next" type="button" data-bs-target="#carouselDemo" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
    </button>
        <div class="carousel-indicators">
            <button type="button" class="active" data-bs-target="#carouselDemo" data-bs-slide-to="0"></button>
            <button type="button" data-bs-target="#carouselDemo"  data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#carouselDemo" data-bs-slide-to="2"></button>
        </div>
    </div>
    <!-- <script  src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script> -->
</body>
</html>