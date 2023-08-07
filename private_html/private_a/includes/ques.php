<?php
session_start();
if(isset($_SESSION['user_id'])<=0)
{
 
  header('location:../../../admin/');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Upload Papers</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
  <script>
    function chng(str){
      if(window.XMLHttpRequest){
        xmlhttp=new XMLHttpRequest();
      }
      else{
        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
      }

      xmlhttp.onreadystatechange=function(){
        if(this.readyState==4 && this.status==200){
          document.getElementById('poll').innerHTML=this.responseText;
        }
      }
      
      xmlhttp.open("GET","helper.php?value="+str,true);
      xmlhttp.send()
    }

    function chng1(){
      if(window.XMLHttpRequest){
        xmlhttp=new XMLHttpRequest();
      }
      else{
        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
      }

      xmlhttp.onreadystatechange=function(){
        if(this.readyState==4 && this.status==200){
          document.getElementById('poll1').innerHTML=this.responseText;
        }
      }
      select= document.querySelector('#selectop');
      output= select.value;
      select= document.querySelector('#selectpr');
      str= select.value;
      xmlhttp.open("GET","helper1.php?value="+str+"&semval="+output,true);
      xmlhttp.send()
    }
    </script>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      

      
      
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
   

   <!-- Sidebar -->
   <div class="sidebar">
     <!-- Sidebar user (optional) -->
     <div class="user-panel mt-3 pb-3 mb-3 d-flex">
       <div class="info">
         <a href="#" class="d-block">Admin</a>
       </div>
     </div>

     

     <!-- Sidebar Menu -->
     <nav class="mt-2">
       <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
         <!-- Add icons to the links using the .nav-icon class
              with font-awesome or any other icon font library -->
       
         <li class="nav-item menu-open">

         <ul class="nav nav-treeview">
             
             <li class="nav-item">
               <a href="./" class="nav-link">
                 <i class="nav-icon fas fa-table"></i>
                 <p>Show Papers</p>
               </a>
             </li>
           </ul>
         <ul class="nav nav-treeview">
             
             <li class="nav-item">
               <a href="./ques" class="nav-link active">
                 <i class="nav-icon fas fa-table"></i>
                 <p>Upload Papers</p>
               </a>
             </li>
           </ul>

           <ul class="nav nav-treeview">
              
              <li class="nav-item">
                <a href="./show_ebook" class="nav-link">
                  <i class="nav-icon fas fa-table"></i>
                  <p>Show e-book</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="./ebook.php" class="nav-link">
                  <i class="nav-icon fas fa-table"></i>
                  <p>Upload e-book</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              
              <li class="nav-item">
                <a href="./show_projects" class="nav-link">
                  <i class="nav-icon fas fa-table"></i>
                  <p>Show Projects</p>
                </a>
              </li>
            </ul>
          <ul class="nav nav-treeview">
              
              <li class="nav-item">
                <a href="./projects" class="nav-link">
                  <i class="nav-icon fas fa-table"></i>
                  <p>Upload Projects</p>
                </a>
              </li>
            </ul>

            <ul class="nav nav-treeview">
              
              <li class="nav-item">
                <a href="./show_subjects" class="nav-link">
                  <i class="nav-icon fas fa-table"></i>
                  <p>Show Subjects</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              
              <li class="nav-item">
                <a href="./subjects" class="nav-link">
                  <i class="nav-icon fas fa-table"></i>
                  <p>Upload Subjects</p>
                </a>
              </li>
            </ul>

            <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="./show_timetable" class="nav-link">
                  <i class="nav-icon fas fa-table"></i>
                  <p>Show TimeTable</p>
                </a>
              </li>
            </ul>
          <ul class="nav nav-treeview">
              
              <li class="nav-item">
                <a href="./timetable" class="nav-link" >
                  <i class="nav-icon fas fa-table"></i>
                  <p>Upload TimeTable</p>
                </a>
              </li>
            </ul>

            <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="./show_academic" class="nav-link">
                  <i class="nav-icon fas fa-table"></i>
                  <p>Show Academic Downloads</p>
                </a>
              </li>
            </ul>
          <ul class="nav nav-treeview">
              
              <li class="nav-item">
                <a href="./academic_downloads" class="nav-link" >
                  <i class="nav-icon fas fa-table"></i>
                  <p>Upload Academic Downloads</p>
                </a>
              </li>
            </ul>
            


            
            
            <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="./show_notices" class="nav-link">
                  <i class="nav-icon fas fa-table"></i>
                  <p>Show Notices</p>
                </a>
              </li>
            </ul>
          <ul class="nav nav-treeview">
              
              <li class="nav-item">
                <a href="./notices" class="nav-link" >
                  <i class="nav-icon fas fa-table"></i>
                  <p>Upload Notices</p>
                </a>
              </li>
            </ul>

            <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="./show_forms" class="nav-link">
                  <i class="nav-icon fas fa-table"></i>
                  <p>Show Forms</p>
                </a>
              </li>
            </ul>
          <ul class="nav nav-treeview">
              
              <li class="nav-item">
                <a href="./forms" class="nav-link" >
                  <i class="nav-icon fas fa-table"></i>
                  <p>Upload Forms</p>
                </a>
              </li>
            </ul>

            <ul class="nav nav-treeview">
              
              <li class="nav-item">
                <a href="./events_organised" class="nav-link" >
                  <i class="nav-icon fas fa-table"></i>
                  <p>Upload Events Organised</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              
              <li class="nav-item">
                <a href="./club_society" class="nav-link" >
                  <i class="nav-icon fas fa-table"></i>
                  <p>Upload Club & Society</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              
              <li class="nav-item">
                <a href="./gallery/?page=albums" class="nav-link" >
                  <i class="nav-icon fas fa-table"></i>
                  <p>Upload Gallery</p>
                </a>
              </li>
            </ul>
           <ul class="nav nav-treeview">
             
             <li class="nav-item">
               <a href="./logout" class="nav-link">
                 <i class="nav-icon fas fa-table"></i>
                 <p>Logout</p>
               </a>
             </li>
           </ul>
         </li>
         
       </ul>
     </nav>
     <!-- /.sidebar-menu -->
   </div>
   <!-- /.sidebar -->
 </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
            <!-- general form elements disabled -->
            <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Upload Question Papers</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form action="chk.php" method="post" enctype="multipart/form-data">
                  

                  <div class="row">
                    <div class="col-sm-6">
                      <!-- select -->
                      <div class="form-group">
                        <label>Program</label>
                        <select class="form-control" name="prog" id='selectpr' onchange="chng1();">
                          <option>Select Program</option>
    <?php
    $conn = new mysqli('localhost', 'root', 'root', 'intranet');
                    
                    
    $sql = "SELECT prog FROM program";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {

echo "<option value='".$row["prog"]."'>". $row["prog"];
}
  
}
  ?>
                        </select>
                      </div>
                    </div>
                    
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- Select multiple-->
                      <div class="form-group">
                        <label>Semester</label>
                        <select class="form-control" name="sem" id='selectop' onchange="chng1();">
                        <option>Select Semester</option>
    <?php
    $conn = new mysqli('localhost', 'root', 'root', 'intranet');
                    
                    
    $sql = "SELECT sem FROM semester";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {

echo "<option value='".$row["sem"]."'>". $row["sem"];
}
  
}
  ?>
                        </select>
                      </div>
                    </div>
                    
                  </div>

                  <div class="row">
                    <div class="col-sm-6">
                      <!-- Select multiple-->
                      <div class="form-group" id="poll1">
                        <label>Subject Code</label>
                        <select class="form-control" name="sub_code" onchange="chng(this.value);">
                        <option>Select Code</option>
                        
                        </select>
                      </div>
                    </div>
                    </div>

                    <div class="row">
                    <div class="col-sm-6">
                      <!-- Select multiple-->
                      <div class="form-group"  id="poll">
                        <label>Subject</label>
                        <select class="form-control" name="subject_name" readonly="readonly">
                          
                          </select>
                      </div>
                    </div>
                    </div>

                    <div class="row" style="width:500px;">
                    <div class="col-sm-6" >
                      <!-- Select multiple-->
                      <div class="form-group">
                        <label>Session</label>
                        <select class="form-control" name="sess" style="width:200px;">
                        <option>Select Session</option>
    <?php
    $conn = new mysqli('localhost', 'root', 'root', 'intranet');
                    
                    
    $sql = "SELECT sess FROM session";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {

echo "<option value='".$row["sess"]."'>". $row["sess"];
}
  
}
  ?>
                        </select>
                      </div>
                    </div>

                    
                      <!-- Select multiple-->
                      <div class="form-group">
                        <label>Year</label>
                        <select class="form-control" name="sess_y" style="width:200px;">
                        <option>Select Year</option>
                        <?php
                        $curr=(int)(date("Y"));
                        while($curr>=2000) {

                          echo "<option value='".$curr."'>". $curr;
                          $curr=$curr-1;
                          }
                        ?>
                       </select>
                        </div>
                        

                    </div>
                    
                  <div class="row">
                    <div class="col-sm-6">
                  <div class="form-group">
                    <!-- <label for="customFile">Custom File</label> -->
                    <label>Upload Question Paper</label> <label style="color: red">(*only in pdf format*)</label>
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" id="customFile" name="fileUpload">
                      <label class="custom-file-label" for="customFile">Choose file</label>
                    </div>
                  </div>
                  </div>
                  </div>
                  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                
                </form>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            <!-- general form elements disabled -->
            
            <!-- /.card -->
          </div>
          <footer class="main-footer">
    
    Created By : <strong>Divyanshu Jain</strong> 
  </footer>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- bs-custom-file-input -->
<script src="../plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
$(function () {
  bsCustomFileInput.init();
});
</script>
</body>
</html>