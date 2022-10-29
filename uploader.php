<?php
        
if(isset($_POST['upload'])) {

$name=$_POST['name'];
$dosage=$_POST['dosage'];
$active=$_POST['active'];
  $precausion=$_POST['precausion'];


$date=date("Y/m/d");
$time=date("h:i:sa");  

 
$in = "INSERT INTO product VALUES ('', '$name', '$dosage', '$active', '$date', '$time', '$img')";

if ($conn->query($in) === TRUE) {
    
$ale1 = "Uploaded sussucfully";
echo " <script type='text/javascript'>alert('$ale1'); </script>";

   
}else{echo "An error occured please try again <br>";
echo($conn->error);
    
}
}
    
         ?>

?>
