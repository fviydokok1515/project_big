<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
ิ<br>
<?php 
$mysqli = new mysqli("localhost","root","","mini_project_database_compelete");


//
$datalenght = 0;
// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
if ($result = $mysqli -> query("SELECT * FROM `teaching` WHERE 1 order by `day_id` asc")) {
    foreach($result as $data){
        $teaching[$datalenght]  = $data['teaching_id'];
        $starttime[$datalenght]  =  $data['period_begin'];
        $endtime[$datalenght]    =  $data['period_end'];
        $stday[$datalenght]    = $data['day_id'];
        $col[$datalenght] = $endtime[$datalenght] - $starttime[$datalenght]+1;
     
        // echo $starttime[$datalenght]." start<br>";
        // echo $endtime[$datalenght]." end<br>";
        // echo $stday[$datalenght]." std<br>";
        // echo $col[$datalenght]." time<br>";
       
        $datalenght++;

    }
}
?>

<?php $days = array("อาทิตย์","จันทร์","อังคาร","พุธ","พฤหัสบดี","ศุกร์","เสาร์");  
   ?>
   <div class="container">
   <div class="card-body p-1">

<div class="row">
    <!-- border="1" width="50%" hieght align="center" -->
<table class="table table-bordered">
   

    <thead class="thead-dark">
        <th scope="col">วัน</th>
        <th scope="col" value="1">08.00</th>
        <th scope="col" value="2">09.00</th>
        <th scope="col" value="3">10.00</th>
        <th scope="col" value="4">11.00</th>
        <th scope="col" value="5">12.00</th>
        <th scope="col" value="6">13.00</th>
        <th scope="col" value="7">14.00</th>
        <th scope="col" value="8">15.00</th>
        <th scope="col" value="9">16.00</th>
        <th scope="col" value="10">17.00</th>
        <th scope="col" value="10">18.00</th>
        <th scope="col" value="11">19.00</th>
        <th scope="col" value="12">20.00</th>
        <th scope="col" value="13">21.00</th>  
    </thead>
    
    <br>
<?php 
//for($i = 0; $i < $datalenght ; $i++ ){
   // echo " This is I ".$i." <br>";
    
    for($day = 0 ; $day < 7 ; $day++){

       ?> <tbody>    <th scope="row"> <?php echo $days[$day];?> </th>  <?php 

            
  
        for($time = 0 ; $time < 14 ; $time++){
           ?> <td>
            <?php 
                            for($i = 0; $i < $datalenght ; $i++ ) {
                                if($day == $stday[$i] && $starttime[$i] == $time){
                                    ?> 
                                            
                                      <td align="center" colspan="<?php echo $col[$i] ?> "><?php echo $teaching[$i];?></td> 
                                        <?php $time = $endtime[$i]+1 ?>
                                        
                                    <?php
                                }
                            }
                        
               ?> 
           
           </td> <?php
        }
       ?> </tbody><?php 
    }
//}
?>
</table>
</div>
</div>
</div>

   
</body>
</html>