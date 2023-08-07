<?php


$val=$_GET["value"];

if($val=="AMENDMENTS"){
    echo "<label> About Amendment</label><textarea class='form-control' name='abt' style='height:100px;'>";

}
else{
    echo "<label hidden> About Amendment</label><input type='text' class='form-control' name='abt' value='' hidden>";
}

?>