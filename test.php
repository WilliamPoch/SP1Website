<!DOCTYPE html>
<html>
<?php 
include('database.php');
?>
<body>

<h2>Basic HTML Table</h2>

<table style="width:100%">
  <tr>
    <th>Month</th>
    <th>Total</th> 
    
  </tr>
  <tr>
  <?php 
    $jan = array();
    $feb = array();
    $mar = array();
    $apr = array();
    $june = array();
    $jul = array();
    $aug = array();
    $sep = array();
    $oct = array();
    $nov = array();
    $dec = array();
    ?>
    <td>Jan</td>
    <td>
    <?php 
    $r1 = mysqli_query($conn,"SELECT * FROM counts where MONTH(dates) = '01' AND YEAR(dates)='2019'") or die("Connection failed".mysqli_error());
    while ($row1=mysqli_fetch_array($r1)) {
   
     ?>
     <?php
     array_push($jan,$row1['total']);
    }
    echo array_sum($jan)
?>
   

    </td>
    
  </tr>
  <tr>
    <td>Feb</td>
    <td>

    <?php 
    $r2 = mysqli_query($conn,"SELECT * FROM counts where MONTH(dates) = '02' AND YEAR(dates)='2019'") or die("Connection failed".mysqli_error());
    while ($row2=mysqli_fetch_array($r2)) {
   
     ?>
     <?php
     array_push($feb,$row2['total']);
    }
    echo array_sum($feb)
?>
    </td>
    
  </tr>
  <tr>
    <td>Mar</td>
    <td>
    <?php 
    $r3 = mysqli_query($conn,"SELECT * FROM counts where MONTH(dates) = '03' AND YEAR(dates)='2019'") or die("Connection failed".mysqli_error());
    while ($row3=mysqli_fetch_array($r3)) {
   
     ?>
     <?php
     array_push($mar,$row3['total']);
    }
    echo array_sum($mar)
?>
    </td>
    
  </tr>
  <tr>
    <td>Apr</td>
    <td>
    <?php 
    $r4 = mysqli_query($conn,"SELECT * FROM counts where MONTH(dates) = '04' AND YEAR(dates)='2019'") or die("Connection failed".mysqli_error());
    while ($row4=mysqli_fetch_array($r4)) {
   
     ?>
     <?php
     array_push($apr,$row4['total']);
    }
    echo array_sum($apr)
?>
    </td>
    
  </tr>
  <tr>
    <td>May</td>
    <td>
    <?php 
    $r5 = mysqli_query($conn,"SELECT * FROM counts where MONTH(dates) = '05' AND YEAR(dates)='2019'") or die("Connection failed".mysqli_error());
    while ($row5=mysqli_fetch_array($r5)) {
   
     ?>
     <?php
     array_push($may,$row5['total']);
    }
    echo array_sum($may)
?>
    </td>
    
  </tr>
  <tr>
    <td>June</td>
    <td>
    <?php 
    $r6 = mysqli_query($conn,"SELECT * FROM counts where MONTH(dates) = '06' AND YEAR(dates)='2019'") or die("Connection failed".mysqli_error());
    while ($row6=mysqli_fetch_array($r6)) {
   
     ?>
     <?php
     array_push($june,$row6['total']);
    }
    echo array_sum($june)
?>
    </td>
    
  </tr>
  <tr>
    <td>July</td>
    <td>
    <?php 
    $r7 = mysqli_query($conn,"SELECT * FROM counts where MONTH(dates) = '07' AND YEAR(dates)='2019'") or die("Connection failed".mysqli_error());
    while ($row7=mysqli_fetch_array($r7)) {
   
     ?>
     <?php
     array_push($jul,$row7['total']);
    }
    echo array_sum($jul)
?>
    </td>
    
  </tr>
  <tr>
    <td>August</td>
    <td>
    <?php 
    $r8 = mysqli_query($conn,"SELECT * FROM counts where MONTH(dates) = '08' AND YEAR(dates)='2019'") or die("Connection failed".mysqli_error());
    while ($row1=mysqli_fetch_array($r8)) {
   
     ?>
     <?php
     array_push($aug,$row8['total']);
    }
    echo array_sum($aug)
?>
    </td>
    
  </tr>
  <tr>
    <td>Sep</td>
    <td>
    <?php 
    $r9 = mysqli_query($conn,"SELECT * FROM counts where MONTH(dates) = '09' AND YEAR(dates)='2019'") or die("Connection failed".mysqli_error());
    while ($row9=mysqli_fetch_array($r9)) {
   
     ?>
     <?php
     array_push($sep,$row9['total']);
    }
    echo array_sum($sep)
?>
    </td>
    
  </tr>
  <tr>
    <td>Nov</td>
    <td>
    <?php
    $r11 = mysqli_query($conn,"SELECT * FROM counts where MONTH(dates) = '11' AND YEAR(dates)='2019'") or die("Connection failed".mysqli_error());
    while ($row11=mysqli_fetch_array($r11)) {
   
     ?>
     <?php
     array_push($nov,$row11['total']);
    }
    echo array_sum($nov)
?>
    </td>
    
  </tr>
  <tr>
    <td>Dec</td>
    <td>
    <?php 
    $r12 = mysqli_query($conn,"SELECT * FROM counts where MONTH(dates) = '12' AND YEAR(dates)='2019'") or die("Connection failed".mysqli_error());
    while ($row1=mysqli_fetch_array($r12)) {
   
     ?>
     <?php
     array_push($dec,$row12['total']);
    }
    echo array_sum($dec)
?>
    </td>
    
  </tr>






</table>

</body>
</html>
