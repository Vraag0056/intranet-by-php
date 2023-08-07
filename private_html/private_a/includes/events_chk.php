<?php 
    // Database connection
    include("config.php");
    
    if(isset($_POST["submit"])) {
        $club_name=$_POST["club_name"];
        $academic_year=$_POST["academic_year"];
        $event_title=$_POST["event_title"];
        $dep=$_POST["dep"];
        if($dep!=""){
            $club_name=$_POST["club_name"]." [".$dep."]";
        }  

        $date=$_POST["date"];
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
     window.location.href = "./events_organised";
     </script>';
        } else if (!in_array($imageExt, $allowd_file_ext)) {
            $resMessage = array(
                "status" => "alert-danger",
                "message" => "Allowed file formats .pdf and .docx"
            );
            echo '<script type="text/JavaScript"> 
     alert("Failed, Allowed file formats .pdf and .docx");
     window.location.href = "./events_organised";
     </script>'
;                
        } else if ($_FILES["fileUpload"]["size"] > 1073741824) {
            $resMessage = array(
                "status" => "alert-danger",
                "message" => "File is too large. File size should be less than 2 megabytes."
            );
            echo '<script type="text/JavaScript"> 
     alert("Failed, File is too large. File size should be less than 2 megabytes.");
     window.location.href = "./events_organised";
     </script>';
        } else if (file_exists($target_file)) {
            $resMessage = array(
                "status" => "alert-danger",
                "message" => "File already exists."
            );
            echo '<script type="text/JavaScript"> 
     alert("Failed, File already exists");
     window.location.href = "./events_organised";
     </script>'
;      
        } else {
            if (move_uploaded_file($_FILES["fileUpload"]["tmp_name"], $target_file)) {
                $image=$_FILES["image"];
                $file_name=$_FILES["image"]["name"];
                $location="../dist/img_dir/";
                $image_name=implode(",__",$file_name);
                if(!empty($file_name)){
                    foreach($file_name as $key=>$val){
                        $targetPath=$location .$val;

                        move_uploaded_file($_FILES["image"]["tmp_name"][$key],$targetPath);
                    }
                
                $sql = "INSERT INTO events_organised (club_name,academic_year,event_title,date,report,event_photos) VALUES ('$club_name','$academic_year','$event_title','$date','$target_file','$image_name')";
                $stmt = $conn->prepare($sql);
                 if($stmt->execute()){
                    $resMessage = array(
                        "status" => "alert-success",
                        "message" => "Image uploaded successfully."
                    );    
                    echo '<script type="text/JavaScript"> 
     alert("Success");
     window.location.href = "./events_organised"
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
     window.location.href = "./events_organised";
     </script>'
;      
            }
        }
    }
    else{
        echo '<script type="text/JavaScript"> 
     alert("Failed");
     window.location.href = "./events_organised";
     </script>'
;          
    }
?>