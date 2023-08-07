<?php 
    // Database connection
    include("config.php");
    
    if(isset($_POST["submit"])) {
        $club_name=$_POST["club_name"];
        $academic_year=$_POST["academic_year"];
        $faculty=$_POST["faculty"];
        $student=$_POST["student"]; 
        $dep=$_POST["dep"];
        if($dep!=""){
            $club_name=$_POST["club_name"]." [".$dep."]";
        }  
                
                $sql = "INSERT INTO club (club_name,academic_year,faculty,student) VALUES ('$club_name','$academic_year','$faculty','$student')";
                $stmt = $conn->prepare($sql);
                 if($stmt->execute()){
                     
                    echo '<script type="text/JavaScript"> 
     alert("Success");
     window.location.href = "./club_society"
     </script>'
;          
                }
    else{
        echo '<script type="text/JavaScript"> 
     alert("Failed");
     window.location.href = "./club_society";
     </script>'
;          
    }
}
?>