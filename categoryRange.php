<div class="container">
<div class="row gy-3">
            <?php
                $mysql=mysqli_connect("localhost","root","","electronicshop") or die("could not found".mysqli_error($mysql)); 
                //$q="select * from product where category='$category'";
                if(isset($_GET['start_price']) && isset($_GET['end_price']) )
                {
                    // $category=$_GET['category'];
                    $start_price=$_GET['start_price'];
                    $end_price=$_GET['end_price'];
                    $q="SELECT * FROM product WHERE category='$category' and  selling_price BETWEEN $start_price AND $end_price ";
                
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
                                    <div class="content" >
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
                else
                {
                    echo"No data Found";
                }
            }
            ?>
            
        </div>
    </div>