<?php 
    // Database connection
    include("config.php");
    
    if(isset($_POST["submit"])) {
        $dept=$_POST["dept"];
        $sess=$_POST["sess"].' '.$_POST["sess_y"];
        // Set image placement folder
        $target_dir = "../dist/img_dir/";
        // Get file path
        $target_file = $target_dir . basename($_FILES["fileUpload"]["name"]);
        // Get file extension
        $imageExt = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        // Allowed file types
        $allowd_file_ext = array("pdf", "docx","xlsx");
        
        if (!file_exists($_FILES["fileUpload"]["tmp_name"])) {
           $resMessage = array(
               "status" => "alert-danger",
               "message" => "Select image to upload."
           );
           echo '<script type="text/JavaScript"> 
     alert("Failed, Select image to upload.");
     window.location.href = "./timetable";
     </script>';
        } else if (!in_array($imageExt, $allowd_file_ext)) {
            $resMessage = array(
                "status" => "alert-danger",
                "message" => "Allowed file formats .pdf and .docx"
            );
            echo '<script type="text/JavaScript"> 
     alert("Failed, Allowed file formats .pdf,.xlsx and .docx");
     window.location.href = "./timetable";
     </script>'
;                
        } else if ($_FILES["fileUpload"]["size"] > 1073741824) {
            $resMessage = array(
                "status" => "alert-danger",
                "message" => "File is too large. File size should be less than 2 megabytes."
            );
            echo '<script type="text/JavaScript"> 
     alert("Failed, File is too large. File size should be less than 2 megabytes.");
     window.location.href = "./timetable";
     </script>';
        } else if (file_exists($target_file)) {
            $resMessage = array(
                "status" => "alert-danger",
                "message" => "File already exists."
            );
            echo '<script type="text/JavaScript"> 
     alert("Failed, File already exists");
     window.location.href = "./timetable";
     </script>'
;      
        } else {
            if (move_uploaded_file($_FILES["fileUpload"]["tmp_name"], $target_file)) {
                $sql = "INSERT INTO timetable (dept,sess,pdf_file) VALUES ('$dept','$sess','$target_file')";
                $stmt = $conn->prepare($sql);
                 if($stmt->execute()){
                    $resMessage = array(
                        "status" => "alert-success",
                        "message" => "Image uploaded successfully."
                    );    
                    echo '<script type="text/JavaScript"> 
     alert("Success");
     window.location.href = "./timetable";
     </script>'
;          
                 }
            } else {
                $resMessage = array(
                    "status" => "alert-danger",
                    "message" => "Image coudn't be uploaded."
                );
                echo '<script type="text/JavaScript"> 
     alert("Failed, Unable to upload");
     window.location.href = "./timetable";
     </script>'
;      
            }
        }
    }
    else{
        echo '<script type="text/JavaScript"> 
     alert("Failed");
     window.location.href = "./timetable";
     </script>'
;          
    }
?>