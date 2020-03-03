<!DOCTYPE html>
<html lang="en">



<?php 
// Include the database config file 
// Fetch all the country data
$con= mysqli_connect("localhost","root","","minipro1");

$query1 = "SELECT * FROM `s_organization` WHERE code  not LIKE '%0'"; 
$result1 = mysqli_query($con, $query1);
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    $("#selectbuilding").change(function(){
        var selectedCountry = $(this).children("option:selected").val();
       $("#textresults").val(selectedCountry+"-");
    });
  $("#selectss").change(function() { 
      var countryID = $(this).val();
                $("#textval").val(countryID);
            });

$('#country').on('change', function(){
var countryID = $(this).val();
if(countryID){
$.ajax({
type:'POST',
url:'ajaxData1.php',
data:'country_id='+countryID,
success:function(html){
$('#state').html(html);
$('#city').html('<option value="">เลือกสาขาวิชาก่อน</option>'); 
}
}); 
}else{
$('#state').html('<option value="">เลือกสาขาวิชาก่อน</option>');
$('#city').html('<option value="">Select state first</option>'); 
}
});
$('#state').on('change', function(){
var stateID = $(this).val();
if(stateID){
$.ajax({
type:'POST',
url:'ajaxData1.php',
data:'state_id='+stateID,
success:function(html){
$('#city').html(html);
}
}); 
}else{
$('#city').html('<option value="">Select state first</option>'); 
}
});

document.getElementById('b4').onclick = function(){
	swal({
		title: "คุณต้องการเพิ่มห้องเรียนใช่ไหม",
		type: "warning",
		showCancelButton: true,
		confirmButtonColor: '#DD6B55',
		confirmButtonText: 'ตกลง',
        cancelButtonText: "ยกเลิก",
        closeOnConfirm: false,
		closeOnCancel: false
	},
	function(){
		swal("สำเร็จ!", "", "success");
	});
};

});
</script>
  <style>
    body {
      font-family: 'Kanit', sans-serif;
      
      /*font-size: 14px;*/
    }
  </style>


</head>

<body>
    <!-- Content Header (Page header) -->


    <!-- start ajex -->




    <div class="col">
        <div class="card" style="width: 100% ">
            <div class="col">



                <tr>
                    <td>
                        <h6>
                            อาคาร
                        </h6>

                    </td>
                    <td>
                        <?php 
           
            $getbuilding = "SELECT * FROM `building` ";
            $result = $con->query($getbuilding);

      
          ?>
                        <select id="selectbuilding" class="form-control w-25" style="width: fit-content;" >
                        <option value="">กรุณาเลือก</option>
                        <?php
                        foreach($result as $row){
                        
                           

                            echo '<option value="'.$row['building_id'].'">'.$row['building_id'].' '.$row['building_name'].'</option>';
                             
                             
                              
                            }
                            
                           
                           ?> 
                        </select>

                    </td>

                </tr>
                <tr>
                    <td>
                        <h6>
                            หมายเลขห้อง
                        </h6>
                    </td>
                    <td>
                        <input id="textresults" class="form-control w-25" type="text">
                        
                    </td>
                </tr>
                <tr>
                    <td>
                        <h6>
                            ชื่อห้อง
                        </h6>
                    </td>
                    <td>
                        <input class="form-control w-25" type="text">
                    </td>
                </tr>
                <tr>
                    <td>
                        <h6>สาขาวิชา</h6>
                    </td>
                    <td>
                 <select class="form-control w-25" id="country" name='country_id'>
<option value="">กรุณาเลือก</option>
<?php while($row = mysqli_fetch_array($result1))
{
echo'<option value="'.$row['code'].'">'.$row["name"].'</option>';
}
?>
</select>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h6>ผู้ดูแล</h6>
                    </td>
                    <td>
                    <select class="form-control w-25" id='state' name='state_id'>
<option value="">กรุณาเลือก</option>
</select>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h6>
                            จำนวนที่รองรับ
                        </h6>
                    </td>
                    <td>
                        <input class="form-control w-25" type="text">
                    </td>
                </tr>
                <tr>
                    <td>
                        <h6> ประเภทห้อง</h6>
                    </td>
                    <td>
                    <?php
                    $kind  = "SELECT * FROM kind ";
                     $kind1 = $con->query($kind);

                    
                    ?>
                        <select class="form-control w-25">
                            <option>กรุณาเลือก</option>
                            <?php
                            foreach($kind1 as $row){
                                echo'<option value="'.$row['kind_id'].'">'.$row["kind_name"].'</option>';
                            }
                            
                            
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <br>
                    <td>
                        <button id="b4" type="submit" class="btn btn-primary">ตกลง</button> &nbsp;
                        <button type="button" class="btn btn-secondary">ยกเลิก</button>
                    </td>
                </tr>








            </div>



        </div>

    </div>




    </body>

</html>