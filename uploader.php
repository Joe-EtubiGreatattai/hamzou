<?php include'../connect.php';

if(isset($_POST['upload'])) {

$name=$_POST['name'];
$dosage=$_POST['dosage'];
$active=$_POST['active'];
  $precausion=$_POST['precausion'];


$date=date("Y/m/d");
$time=date("h:i:sa");  

	$file="file";
$pic="images/broken.png";		
$medianame1=basename( $_FILES["$file"]["name"]);
$mediatemp1=$_FILES["$file"]['tmp_name'];
  $uploaddir="images/";
 $uploaddest1=$uploaddir.$medianame1;
 if($uploaddest1=="images/"){$uploaddest1=$pic;}
 move_uploaded_file($mediatemp1,$uploaddest1); 
 
$in = "INSERT INTO product VALUES ('', '$name', '$dosage', '$active', '$date', '$time', '$uploaddest1')";

if ($conn->query($in) === TRUE) {
    
$ale1 = "Uploaded sussucfully";
echo " <script type='text/javascript'>alert('$ale1'); </script>";

   
}else{echo "An error occured please try again <br>";
echo($conn->error);
    
}
}
    
         ?>

?>
