<form name="bwdatesdata" action="" method="post" action="">
    <table width="100%" height="117"  border="0">
        <tr>
            <th width="27%" height="63" scope="row">From Date :</th>
            <td width="73%">
                <input type="date" name="fdate" class="form-control" id="fdate">
            </td>
        </tr>
        <tr>
            <th width="27%" height="63" scope="row">To Date :</th>
            <td width="73%">
                <input type="date" name="tdate" class="form-control" id="tdate">
            </td>
        </tr>
        <tr>
            <th width="27%" height="63" scope="row">Request Type :</th>
            <td width="73%">
                <input type="radio" name="requesttype" value="mtwise" checked="true">Month wise
                <input type="radio" name="requesttype" value="yrwise">Year wise</td>
        </tr>
        <tr>
            <th width="27%" height="63" scope="row"></th>
            <td width="73%">
            <button class="btn-primary btn" type="submit" name="submit">Submit</button>
        </tr>
    </table>
</form>
<div class="row">
    <div class="col-xs-12">
      	 <?php
        $mysql=mysqli_connect("localhost","root","","electronicshop") or die("could not found".mysqli_error($mysql)); 
      	 if(isset($_POST['submit']))
        { 
            $fdate=$_POST['fdate'];
            $tdate=$_POST['tdate'];
            $rtype=$_POST['requesttype'];
            ?>
            <?php if($rtype=='mtwise'){
            $month1=strtotime($fdate);
            $month2=strtotime($tdate);
            $m1=date("F",$month1);
            $m2=date("F",$month2);
            $y1=date("Y",$month1);
            $y2=date("Y",$month2);
            ?>
            <h4 class="header-title m-t-0 m-b-30">Sales Report Month Wise</h4>
            <h4 align="center" style="color:blue">Sales Report  from <?php echo $m1."-".$y1;?> to <?php echo $m2."-".$y2;?></h4>
            <hr >
            <div class="row">
                <table class="table table-bordered" width="100%"  border="0" style="padding-left:40px">
                    <thead>
                        <tr>
                            <th>S.NO</th>
                            <th>Month / Year </th>
                            <th>Sales</th>
                        </tr>
                    </thead>
                <?php
                    $ret=mysqli_query($mysql,"select month(OrderDate) as lmonth,year(OrderDate) as lyear,
                        product.selling_price,order_items.qty from order_items 
                        join product on product.product_id=order_items.product_id 
                        where date(order_items.OrderDate) between '$fdate' and '$tdate' 
                        group by lmonth,lyear ");
                    $num=mysqli_num_rows($ret);
                    if($num>0){
                        $cnt=1;
                    while ($row=mysqli_fetch_array($ret)) {

                ?>
                <tbody>
                    <tr>
                            <td><?php echo $cnt;?></td>
                            <td><?php  echo $row['lmonth']."/".$row['lyear'];?></td>
                            <td><?php  echo $total=$row['selling_price']*$row['qty'];?></td>
                    </tr>
                    <?php
                        $ftotal+=$total;
                        $cnt++;
                    }?>
                    <tr>
                        <td colspan="2" align="center">Total </td>
                        <td><?php  echo $ftotal;?></td>
                    </tr>             
                </tbody>
                </table>
                <?php } } else {
                $year1=strtotime($fdate);
                $year2=strtotime($tdate);
                $y1=date("Y",$year1);
                $y2=date("Y",$year2);
                ?>
                <h4 class="header-title m-t-0 m-b-30">Sales Report Year Wise</h4>
                <h4 align="center" style="color:blue">Sales Report  from <?php echo $y1;?> to <?php echo $y2;?></h4>
                        <hr >
                <div class="row">
                    <table class="table table-bordered" width="100%"  border="0" style="padding-left:40px">
                        <thead>
                            <tr>
                                <th>S.NO</th>
                                <th>Year </th>
                                <th>Sales</th>
                            </tr>
                        </thead>
                        <?php
                        $ret=mysqli_query($mysql,"select month(OrderDate) as lmonth,year(OrderDate) as lyear,
                            product.selling_price,order_items.qty from order_items 
                            join product on product.product_id=order_items.product_id 
                            where date(order_items.OrderDate) between '$fdate' and '$tdate'
                            group by lyear ");
                        $num=mysqli_num_rows($ret);
                        if($num>0){
                            $cnt=1;
                        while ($row=mysqli_fetch_array($ret)) {
                        ?>
                        <tbody>
                            <tr>
                                <td><?php echo $cnt;?></td>
                                <td><?php  echo $row['lyear'];?></td>
                                <td><?php  echo $total=$row['selling_price']*$row['qty'];?></td>
                            </tr>
                        <?php
                            $ftotal+=$total;
                            $cnt++;
                        }?>
                            <tr>
                                <td colspan="2" align="center">Total </td>
                                <td><?php  echo $ftotal;?></td>
                            </tr>             
                        </tbody>
                    </table>  <?php } } }?>  
                </div>
      </div>
    </div>  
  </div>
