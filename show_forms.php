<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Forms</title>

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
                <a href="./show_forms" class="nav-link active">
                  <i class="nav-icon fas fa-table"></i>
                  <p>Forms</p>
                </a>
              </li>
            </ul>
          
            <ul class="nav nav-treeview">
             
             <li class="nav-item">
               <a href="./show_notices" class="nav-link">
                 <i class="nav-icon fas fa-table"></i>
                 <p>Notices</p>
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
            <h1>Forms</h1>
          </div>
          
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
                    <th>Title</th>
                    <th>Date</th>
                  </tr>
                  </thead>
                  <tbody>
                    
                  
                    <?php 
                    
                    $conn = new mysqli('localhost', 'root', 'root', 'intranet');
                   
                    
                      $sql = "SELECT title,pdf_file,date FROM forms";
$result = $conn->query($sql);

if($result){
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      $res = strtoupper(str_replace("../dist/img_dir/",'',$row["pdf_file"]));
      $res="./private_html/private_a/dist/img_dir/".$res;
      echo "<tr><td><a href='" .$res."'download>" .  $row["title"]."</a></td><td>".$row["date"]."</td></tr>" ;
    }
                    
                  }}
                
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
