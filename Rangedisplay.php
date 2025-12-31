
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="javas\cust.js"></script>
<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
   -->
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">                                
            <div class="card mt-4">
                <div class="card-header">
                    <h4>price</h4>
                </div>
                <div class="card-body">
                    <form action="" method="get">
                    <div class="row">
                        <div class="col-md-4">
                            <label for="">Start Price</label>
                            <input type="text" name="start_price" value="<?php if(isset($_GET['start_price'])){ echo $_GET['start_price'];}else{echo "100";}?>" class="form-control">
                        </div>
                        <div class="col-md-4">
                            <label for="">End Price</label>
                            <input type="text" name="end_price" value="<?php if(isset($_GET['end_price'])){ echo $_GET['end_price'];}else{echo "200000";}?>" class="form-control">
                        </div>
                        <div class="col-md-4">
                            <label for="">Click</label><br>
                            <input type="submit" value="Filter" class="btn btn-primary">    
                        </div>
                    </div>
                    </form>
                </div>
            </div>                
        </div>
        <div class="container py-5">
            <div class="row gy-3 ">
                <h1>Products</h1>
                <?php
                    $mysql=mysqli_connect("localhost","root","","electronicshop") or die("could not found".mysqli_error($mysql)); 
                    if(isset($_GET['start_price']) && isset($_GET['end_price']))
                    {
                        $start_price=$_GET['start_price'];
                        $end_price=$_GET['end_price'];
                        $q="SELECT * FROM product WHERE selling_price BETWEEN $start_price AND $end_price";
       
                    }
                    else{
                        $q="select * from product";
                    }
                   
                    $query_run=mysqli_query($mysql,$q);
                    $check_faculty=mysqli_num_rows($query_run)>0;
                    if($check_faculty)
                    {
                        while($row=mysqli_fetch_array($query_run))
                        {  
                        ?>
            
                        <div class="col-lg-3 col-md-4">
                                    <a href="ViewDetails.php?product_id=<?php echo $row['product_id'];?>" style="text-decoration:none;">
                                        <div class="card bg-white h-100 d-flex p-4 flex-column">
                                            <div class="content">
                                            <h6 class="card-title" align="center" style="color:black;"><?php echo $row['brand'];?></h6>
                                                <h6 class="card-title" align="center" style="color:black;"><?php echo $row['category'];?></h6>
                                                <img src="AdminPanel/upload/<?php echo $row['image']?>" style="width:200px; height:200px; align:center;"alt="">
                                                <h4 class="card-title" align="center" style="color:black;"><?php echo $row['product_name'];?></h4>
                                                <h4 class="card-title" align="center" style="color:green;">Rs.<?php echo $row['selling_price'];?> <s class="text-danger"><?= $row['price'];?></s></h4>
                                        </div>
                                        </div>
                                </a>
                                </div>
                                <?php
                            }
                            
                        }
                     ?>
            </div>
        </div>
        </div>
</div>
    <script>
// // $(document).ready(function(){
// //     filter_data();
// //     function filter_data()
// //     {
// //         $('.filter_data').html('<div id="loading" style="" ></div>');
// //         var action = 'fetch_data';
// //         var minimum_price = $('#hidden_minimum_price').val();
// //         var maximum_price = $('#hidden_maximum_price').val();
// //         $.ajax({
// //             url:"fetch_data.php",
// //             method:"POST",
// //             data:{action:action, minimum_price:minimum_price, maximum_price:maximum_price},
// //             success:function(data){
// //                 $('.filter_data').html(data);
// //             }
// //         });
// //     }
//     $('#price_range').slider({
//         range:true,
//         min:50,
//         max:500000,
//         values:[50,500000],
//         step:50,
//         stop:function(event, ui)
//         {
//             $('#price_show').html(ui.values[0] + ' - ' + ui.values[1]);
//             $('#hidden_minimum_price').val(ui.values[0]);
//             $('#hidden_maximum_price').val(ui.values[1]);
//             filter_data();
//         }
//     });
// });
    </script>
</body>
</html>