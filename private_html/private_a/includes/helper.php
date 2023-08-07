<?php
$conn = new mysqli('localhost', 'root', 'root', 'intranet');

if(!$conn){
    exit("Sorry,Connection Error...");
}

$val=$_GET["value"];
$val_M=mysqli_real_escape_string($conn,$val);
$sql = "SELECT subject_name FROM subjects WHERE sub_code='$val_M'";
$result=mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0){
    echo "<label>Subject</label><select class='form-control' name='subject_name' readonly='readonly'>";

    while($rows=mysqli_fetch_assoc($result)){
        echo "<option>".$rows["subject_name"]."</option>";
    }
    echo "</select>";
}

?>