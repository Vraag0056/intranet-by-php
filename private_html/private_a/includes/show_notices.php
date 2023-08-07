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
  <title>Notices</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">

  <script>
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
      xmlhttp.open("GET","helper2.php?value="+str+"&semval="+output,true);
      xmlhttp.send()
    }
    </script>

</head>

<body class="hold-transition sidebar-mini">
 
<div class="wrapper">
 
  <!-- /.navbar -->
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
                <a href="./ques" class="nav-link">
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
                <a href="./show_notices" class="nav-link active">
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
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Notices</h1>
          </div>
          
        </div>

        <div class="card card-danger">
              <form action="" method="post">
              <div class="card-body">
                <div class="row">
                  <div class="col-2">
                  <select class="form-control" name="type">
                          <option>Select Notice Type</option>
                          <?php
    $conn = new mysqli('localhost', 'root', 'root', 'intranet');
                    
                    
    $sql = "SELECT type FROM notices_type";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {

echo "<option value='".$row["type"]."'>". $row["type"];
}
  
}
  ?>
   
                        </select>
                  </div>


                  <div class="col-2">
                  <select class="form-control" name="sess">
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

                  <div class="col-2">
                  <select class="form-control" name="sess_y">
                        <option>Sesion Year</option>
                        <?php
                        $curr=(int)(date("Y"));
                        while($curr>=2000) {

                          echo "<option value='".$curr."'>". $curr;
                          $curr=$curr-1;
                          }
                        ?>
                       </select>
                  </div>

                  
                  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                </div>
              </div>
              <!-- /.card-body -->
            </div>

      </div><!-- /.container-fluid -->
    </section>
    
    

    <!-- Main content -->
    <section class="content">
      
            <!-- /.card -->

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Notices: <?php 
                    if(isset($_POST['submit'])){
                        $conn = new mysqli('localhost', 'root', 'root', 'intranet');
                        $type=$_POST["type"];
            $sess=$_POST["sess"].' '.$_POST["sess_y"];
            echo $type;  
                    }?></h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Type</th>
                    <th>Session</th>
                    <th>Date</th>
                    <th>File</th>
                  </tr>
                  </thead>
                  <tbody>
                    
                  
                    <?php 
                    if(isset($_POST['submit'])){
                    $conn = new mysqli('localhost', 'root', 'root', 'intranet');
                    $type1=$_POST["type"];
                    $conn1 = new mysqli('localhost', 'root', 'root', 'intranet');
        $sql = "SELECT id FROM notices_type WHERE type='$type1'"; 
        $result=mysqli_query($conn1,$sql);
        while($rows=mysqli_fetch_assoc($result)){
            $type=$rows["id"];
        }
        $sess=$_POST["sess"].' '.$_POST["sess_y"];
                    
                      $sql = "SELECT type,date,sess,pdf_file FROM notices WHERE type='$type' and sess='$sess'";
$result = $conn->query($sql);
if($result){
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      $res = strtoupper(str_replace("../dist/img_dir/",'',$row["pdf_file"]));
        echo "<tr><td>". $type1. "</td><td>" . $row["sess"] ."</td><td>" . $row["date"] . "</td><td><a href='" .$row["pdf_file"]."'download>" .  $res."</a></td></tr>" ;
    }
                    
                  }}
                }
                    ?>
                   
                  
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <footer class="main-footer">
    
    Created By : <strong>Divyanshu Jain</strong> 
  </footer>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  

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
<!-- DataTables  & Plugins -->
<script src="../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="../plugins/jszip/jszip.min.js"></script>
<script src="../plugins/pdfmake/pdfmake.min.js"></script>
<script src="../plugins/pdfmake/vfs_fonts.js"></script>
<script src="../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="../plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="../plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>
