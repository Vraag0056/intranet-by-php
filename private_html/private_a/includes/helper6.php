<?php


$val=$_GET["value"];

if($val!="AMENDMENTS" && $val!="EXAM REGULATIONS" && $val!="ORDINANCE"){
    echo '<label>Applicable For</label>
    <select class="form-control" name="applicable" >
    <option>Select Session</option>';
    $curr=(int)(date("Y"));
    while($curr>=2018) {

      echo "<option value='".$curr."-".($curr+1-2000)."'>". $curr."-".($curr+1-2000);
      $curr=$curr-1;
      };
    '</select>';

}
else{
    echo "<input type='text' class='form-control' name='applicable' value='' hidden>";
}

?>