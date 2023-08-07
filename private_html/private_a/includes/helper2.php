<?php
$conn = new mysqli('localhost', 'root', 'root', 'intranet');
$id=0;
if(!$conn){
    exit("Sorry,Connection Error...");
}

$val=$_GET["value"];
$val1=$_GET["semval"];
$val_M=mysqli_real_escape_string($conn,$val);
$val_S=mysqli_real_escape_string($conn,$val1);

$sql1 = "SELECT id FROM program WHERE prog='$val_M'";
$result=mysqli_query($conn,$sql1);

$sql2 = "SELECT id FROM semester WHERE sem='$val_S'";
$result1=mysqli_query($conn,$sql2);

if(mysqli_num_rows($result)>0){
    while($rows=mysqli_fetch_assoc($result)){
       $id= $rows["id"];
    }
    
}
else{
    $id=0;
}

if(mysqli_num_rows($result1)>0){
    while($rows=mysqli_fetch_assoc($result1)){
       $id1= $rows["id"];
    }
    
}
else{
    $id1=0;
}



$sql = "SELECT sub_code FROM subjects WHERE prog_id='$id' AND sem_id='$id1'AND type='THEORY'"; 
$result=mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0){
    echo "<select class='form-control' name='sub_code' onchange='chng(this.value);'><option>Select Code</option>";

    while($rows=mysqli_fetch_assoc($result)){
        echo "<option>".$rows["sub_code"]."</option>";
    }
    echo "</select>";
}
else{
    echo "<select class='form-control' name='sub_code' onchange='chng(this.value);'><option>Select Code</option>";
}
?>