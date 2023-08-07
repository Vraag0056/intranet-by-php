<?php 
    // Database connection
    include("config.php");
    
    if(isset($_POST["submit"])) {
        $prog1=$_POST["prog"];
        $sub_code=$_POST["sub_code"];
        $semester1=$_POST["sem"];
        $subject_name=$_POST["subject_name"];
        $subject_type=$_POST["subject_type"];
        $conn1 = new mysqli('localhost', 'root', 'root', 'intranet');
        $sql = "SELECT id FROM program WHERE prog='$prog1'"; 
        $result=mysqli_query($conn1,$sql);
        while($rows=mysqli_fetch_assoc($result)){
           $prog=$rows["id"];
        }
        $sql = "SELECT id FROM semester WHERE sem='$semester1'"; 
        $result=mysqli_query($conn1,$sql);
        while($rows=mysqli_fetch_assoc($result)){
           $semester=$rows["id"];
        }
        $sql = "INSERT INTO subjects (sub_code,subject_name,type,prog_id,sem_id) VALUES ('$sub_code','$subject_name','$subject_type','$prog','$semester')";
                $stmt = $conn->prepare($sql);
                 if($stmt->execute()){
                    $resMessage = array(
                        "status" => "alert-success",
                        "message" => "Image uploaded successfully."
                    );    
                    echo '<script type="text/JavaScript"> 
     alert("Success");
     window.location.href = "./subjects";
     </script>'
;   

    }
}

        ?>