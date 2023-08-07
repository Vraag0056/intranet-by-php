<?php 
    // Database connection
    include("config.php");
    
    if(isset($_POST["submit"])) {
        $prog=$_POST["prog"];
        $applicable=$_POST["applicable"];
        $type=$_POST["type"];
        $abt=$_POST["abt"];
        $conn1 = new mysqli('localhost', 'root', 'root', 'intranet');
        $sql = "SELECT id FROM program WHERE prog='$prog'"; 
        $result=mysqli_query($conn1,$sql);
        while($rows=mysqli_fetch_assoc($result)){
           $prog=$rows["id"];
        }
        // Set image placement folder
        $target_dir = "../dist/img_dir/";
        // Get file path
        $target_file = $target_dir . basename($_FILES["fileUpload"]["name"]);
        // Get file extension
        $imageExt = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        // Allowed file types
        $allowd_file_ext = array("pdf", "docx");
        
        if (!file_exists($_FILES["fileUpload"]["tmp_name"])) {
           $resMessage = array(
               "status" => "alert-danger",
               "message" => "Select image to upload."
           );
           echo '<script type="text/JavaScript"> 
     alert("Failed, Select image to upload.");
     window.location.href = "./academic_downloads";
     </script>';
        } else if (!in_array($imageExt, $allowd_file_ext)) {
            $resMessage = array(
                "status" => "alert-danger",
                "message" => "Allowed file formats .pdf and .docx"
            );
            echo '<script type="text/JavaScript"> 
     alert("Failed, Allowed file formats .pdf and .docx");
     window.location.href = "./academic_downloads";
     </script>'
;                
        } else if ($_FILES["fileUpload"]["size"] > 1073741824) {
            $resMessage = array(
                "status" => "alert-danger",
                "message" => "File is too large. File size should be less than 2 megabytes."
            );
            echo '<script type="text/JavaScript"> 
     alert("Failed, File is too large. File size should be less than 2 megabytes.");
     window.location.href = "./academic_downloads";
     </script>';
        } else if (file_exists($target_file)) {
            $resMessage = array(
                "status" => "alert-danger",
                "message" => "File already exists."
            );
            echo '<script type="text/JavaScript"> 
     alert("Failed, File already exists");
     window.location.href = "./academic_downloads";
     </script>'
;      
        } else {
            if (move_uploaded_file($_FILES["fileUpload"]["tmp_name"], $target_file)) {
                if($prog=='ALL'){
                    $conn1 = new mysqli('localhost', 'root', 'root', 'intranet');
                    $sql1 = "SELECT id FROM program";
                    $result = $conn1->query($sql1);
                    if($result){
                    if ($result->num_rows > 0) {
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                            $sql = "INSERT INTO academic_downloads (prog,applicable,type,about,pdf_file) VALUES ('$row[id]','$applicable','$type','$abt','$target_file')";
                
                            $stmt = $conn->prepare($sql);
                            if($stmt->execute()){
                               $resMessage = array(
                                   "status" => "alert-success",
                                   "message" => "Image uploaded successfully."
                               );    
                               echo '<script type="text/JavaScript"> 
                alert("Success");
                window.location.href = "./academic_downloads";
                </script>'
           ;          
                            }
                        }
                                        
                                      }}
                }
                else{

                $sql = "INSERT INTO academic_downloads (prog,applicable,type,about,pdf_file) VALUES ('$prog','$applicable','$type','$abt','$target_file')";
                
                $stmt = $conn->prepare($sql);
                if($stmt->execute()){
                   $resMessage = array(
                       "status" => "alert-success",
                       "message" => "Image uploaded successfully."
                   );    
                   echo '<script type="text/JavaScript"> 
    alert("Success");
    window.location.href = "./academic_downloads";
    </script>'
;          
                }
            }
            
            } else {
                $resMessage = array(
                    "status" => "alert-danger",
                    "message" => "Image coudn't be uploaded."
                );
                echo '<script type="text/JavaScript"> 
     alert("Failed, Unable to upload");
     window.location.href = "./academic_downloads";
     </script>'
;      
            }
        }
    }
    else{
        echo '<script type="text/JavaScript"> 
     alert("Failed");
     window.location.href = "./academic_downloads";
     </script>'
;          
    }
?>