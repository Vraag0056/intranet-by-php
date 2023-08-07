
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Events</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="./private_html/private_a/plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="./private_html/private_a/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="./private_html/private_a/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="./private_html/private_a/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="./private_html/private_a/dist/css/adminlte.min.css">

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
        <a href="./" class="d-block">Home</a>
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
                <a href="./papers" class="nav-link">
                  <i class="nav-icon fas fa-table"></i>
                  <p>Show Papers</p>
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
                <a href="./show_projects" class="nav-link">
                  <i class="nav-icon fas fa-table"></i>
                  <p>Project Report</p>
                </a>
              </li>
            </ul>

            <ul class="nav nav-treeview">
              
              <li class="nav-item">
                <a href="./show_student_notices" class="nav-link">
                  <i class="nav-icon fas fa-table"></i>
                  <p>Notices</p>
                </a>
              </li>
            </ul>

            <ul class="nav nav-treeview">
              
              <li class="nav-item">
                <a href="./show_events" class="nav-link active">
                  <i class="nav-icon fas fa-table"></i>
                  <p>Events</p>
                </a>
              </li>
            </ul>

            <ul class="nav nav-treeview">
              
              <li class="nav-item">
                <a href="./show_timetable" class="nav-link">
                  <i class="nav-icon fas fa-table"></i>
                  <p>Timetable</p>
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
            <h1>Events</h1>
          </div>
          
        </div>

        <div class="card card-danger">
              <form action="" method="post">
              <div class="card-body">
                <div class="row">

                  <div class="col-2">
                  <select class="form-control" name="ay">
                        <option>Select Academic Year</option>
                        <?php
                        $curr=(int)(date("Y"));
                        while($curr>=2018) {

                          echo "<option value='".$curr."-".($curr+1-2000)."'>". $curr."-".($curr+1-2000);
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
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Name</th>
                    <th>Event Title</th>
                    <th>Faculty Advisor</th>
                    <th>Student Members</th>
                    <th>Event Date</th>
                    <th>Event Report</th>
                    <th>Event Photos</th>
                  </tr>
                  </thead>
                  <tbody>
                    
                  
                  <?php 
                    if(isset($_POST['submit'])){
                    $conn = new mysqli('localhost', 'root', 'root', 'intranet');
                    $ay1=$_POST["ay"];
                    $conn1 = new mysqli('localhost', 'root', 'root', 'intranet');
        $sql = "SELECT academic_year,faculty,student FROM club WHERE academic_year='$ay1'"; 
        $result=mysqli_query($conn1,$sql);
        $fac='';
        $stu='';
        while($rows=mysqli_fetch_assoc($result)){
            $ay=$rows["academic_year"];
            $fac=$rows["faculty"];
            $stu=$rows["student"];
        }
                      $sql = "SELECT club_name,event_title,date,report,event_photos FROM events_organised WHERE academic_year='$ay1'";
$result = $conn->query($sql);
if($result){
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      $res = strtoupper(str_replace("../dist/img_dir/",'',$row["report"]));
      $res="./private_html/private_a/dist/img_dir/".$res;
      $imgs = explode(',__', $row["event_photos"]);
      $i=sizeof($imgs);
      while($i!=0){
        $imgs[$i-1]="./private_html/private_a/dist/img_dir/".$imgs[$i-1];
        $i=$i-1;
      }
        echo "<tr><td>". $row["club_name"]."</td><td>".$row["event_title"]."</td><td>".$fac."</td><td>".$stu."</td><td>".$row["date"]. "</td><td><a href='" .$res."'download>Report Of " . $row["club_name"]."</a></td><td>" ;
        $i=0;
        while($i!=sizeof($imgs)){
          if($i==0)
          echo "<a href='" .$imgs[$i]."'download>".($i+1)."st photo</a><br>";
          else if($i==1)
          echo "<a href='" .$imgs[$i]."'download>".($i+1)."nd photo</a><br>";
          else if($i==2)
          echo "<a href='" .$imgs[$i]."'download>".($i+1)."rd photo</a><br>";
          else
          echo "<a href='" .$imgs[$i]."'download>".($i+1)."th photo</a><br>";
          $i=$i+1;
        }
        echo "</td></tr>";
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
<script src="./private_html/private_a/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="./private_html/private_a/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="./private_html/private_a/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="./private_html/private_a/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="./private_html/private_a/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="./private_html/private_a/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="./private_html/private_a/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="./private_html/private_a/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="./private_html/private_a/plugins/jszip/jszip.min.js"></script>
<script src="./private_html/private_a/plugins/pdfmake/pdfmake.min.js"></script>
<script src="./private_html/private_a/plugins/pdfmake/vfs_fonts.js"></script>
<script src="./private_html/private_a/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="./private_html/private_a/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="./private_html/private_a/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="./private_html/private_a/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="./private_html/private_a/dist/js/demo.js"></script>
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
