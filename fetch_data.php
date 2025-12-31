<?php
$mysql=mysqli_connect("localhost","root","","electronicshop") or die("could not found".mysqli_error($mysql)); 

// if(isset($_POST["action"]))
// {
//     $query = $mysql->query("SELECT * FROM product");
if(isset($_POST["minimum_price"], $_POST["maximum_price"]) && !empty($_POST["minimum_price"]) && !empty($_POST["maximum_price"])){
        $min=$_POST["minimum_price"];
        $max=$_POST["maximum_price"];
        $query="SELECT * FROM product WHERE selling_price BETWEEN '$min' AND '$max'";
        $query_run=mysqli_query($mysql,$query);
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
            else{
                echo"No data Found";
            }
        }
        else
        {
            $q="select * from product";
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
            else{
                echo"No data Found";
            }
        }
        ?>