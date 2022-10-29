<?php include'../connect.php';


$rselr="SELECT * FROM profile WHERE Id='".$userid."'";
$result= $conn6->query($rselr);
  If ($result->num_rows>0){
While ($row=$result->fetch_assoc()){
    $img=$row["img"];

   $name=$row["name"];
   $dosage=$row["dosage"];
   $active=$row["active"];
   $precausion=$row["precausion"];
   $description=$row["description"];

   


   


echo'<div class="product-categorie-box">
<div class="tab-content">
    <div class="row">
        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
            <div class="products-single fix">
                <div class="box-img-hover">
                    <div class="type-lb">
                        <p class="new">New</p>
                    </div>
                    <img src="'.$img.'" alt="Image">
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-8 col-xl-8">
            <div class="why-text full-width">
                <h4>'.$name.'</h4>
                <p>'.$description.'</p>
                <p>
                    <h4>Active Ingredient:</h4>'.$active.'
                </p>

                <p>
                    <h4>Dosage:</h4>'.$dosage.'
                </p>
                <p>
                    <h4>Precaution:</h4>'.$precausion.'
                </p>

            </div>
        </div>
    </div>
</div>
</div>
';
}}
?>
                            