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
  <title>Upload Notices</title>
<!-- daterange picker -->
<link rel="stylesheet" href="../plugins/daterangepicker/daterangepicker.css">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
  <link rel="stylesheet" href="../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="../plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="../plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="../plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <!-- Bootstrap4 Duallistbox -->
  <link rel="stylesheet" href="../plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">
  <!-- BS Stepper -->
  <link rel="stylesheet" href="../plugins/bs-stepper/css/bs-stepper.min.css">
  <!-- dropzonejs -->
  <link rel="stylesheet" href="../plugins/dropzone/min/dropzone.min.css">
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
                <a href="./show_notices" class="nav-link">
                  <i class="nav-icon fas fa-table"></i>
                  <p>Show Notices</p>
                </a>
              </li>
            </ul>
          <ul class="nav nav-treeview">
              
              <li class="nav-item">
                <a href="./notices" class="nav-link active" >
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
                <h3 class="card-title">Upload Notices</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form action="notices_chk.php" method="post" enctype="multipart/form-data">
                  

                  <div class="row">
                    <div class="col-sm-6">
                      <!-- select -->
                      <div class="form-group">
                        <label>Notice Type</label>
                        <select class="form-control" name="type">
                          <option>Select Type</option>
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
                    </div>
                    
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- Select multiple-->
                <!-- Date -->
                <div class="form-group">
                  <label>Date:</label>
                    <div class="input-group date" id="reservationdate" data-target-input="nearest">
                        <input type="text" class="form-control datetimepicker-input" name="dt" data-target="#reservationdate"/>
                        <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div>
                    </div>
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
                    <label>Upload Notice</label> <label style="color: red">(*only in pdf format*)</label>
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
<!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- bs-custom-file-input -->
<script src="../plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- Select2 -->
<script src="../plugins/select2/js/select2.full.min.js"></script>
<!-- Bootstrap4 Duallistbox -->
<script src="../plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
<!-- InputMask -->
<script src="../plugins/moment/moment.min.js"></script>
<script src="../plugins/inputmask/jquery.inputmask.min.js"></script>
<!-- date-range-picker -->
<script src="../plugins/daterangepicker/daterangepicker.js"></script>
<!-- bootstrap color picker -->
<script src="../plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Bootstrap Switch -->
<script src="../plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
<!-- BS-Stepper -->
<script src="../plugins/bs-stepper/js/bs-stepper.min.js"></script>
<!-- dropzonejs -->
<script src="../plugins/dropzone/min/dropzone.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
<!-- Page specific script -->


<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()

    //Date picker
    $('#reservationdate').datetimepicker({
        format: 'DD/MM/yyyy'
    });

    //Date and time picker
    $('#reservationdatetime').datetimepicker({ icons: { time: 'far fa-clock' } });

    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({
      timePicker: true,
      timePickerIncrement: 30,
      locale: {
        format: 'MM/DD/YYYY hh:mm A'
      }
    })
    //Date range as a button
    $('#daterange-btn').daterangepicker(
      {
        ranges   : {
          'Today'       : [moment(), moment()],
          'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month'  : [moment().startOf('month'), moment().endOf('month')],
          'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate  : moment()
      },
      function (start, end) {
        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
      }
    )

    //Timepicker
    $('#timepicker').datetimepicker({
      format: 'LT'
    })

    //Bootstrap Duallistbox
    $('.duallistbox').bootstrapDualListbox()

    //Colorpicker
    $('.my-colorpicker1').colorpicker()
    //color picker with addon
    $('.my-colorpicker2').colorpicker()

    $('.my-colorpicker2').on('colorpickerChange', function(event) {
      $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
    })

    $("input[data-bootstrap-switch]").each(function(){
      $(this).bootstrapSwitch('state', $(this).prop('checked'));
    })
    bsCustomFileInput.init();
  })
  // BS-Stepper Init
  document.addEventListener('DOMContentLoaded', function () {
    window.stepper = new Stepper(document.querySelector('.bs-stepper'))
  })

  // DropzoneJS Demo Code Start
  Dropzone.autoDiscover = false

  // Get the template HTML and remove it from the doumenthe template HTML and remove it from the doument
  var previewNode = document.querySelector("#template")
  previewNode.id = ""
  var previewTemplate = previewNode.parentNode.innerHTML
  previewNode.parentNode.removeChild(previewNode)

  var myDropzone = new Dropzone(document.body, { // Make the whole body a dropzone
    url: "/target-url", // Set the url
    thumbnailWidth: 80,
    thumbnailHeight: 80,
    parallelUploads: 20,
    previewTemplate: previewTemplate,
    autoQueue: false, // Make sure the files aren't queued until manually added
    previewsContainer: "#previews", // Define the container to display the previews
    clickable: ".fileinput-button" // Define the element that should be used as click trigger to select files.
  })

  myDropzone.on("addedfile", function(file) {
    // Hookup the start button
    file.previewElement.querySelector(".start").onclick = function() { myDropzone.enqueueFile(file) }
  })

  // Update the total progress bar
  myDropzone.on("totaluploadprogress", function(progress) {
    document.querySelector("#total-progress .progress-bar").style.width = progress + "%"
  })

  myDropzone.on("sending", function(file) {
    // Show the total progress bar when upload starts
    document.querySelector("#total-progress").style.opacity = "1"
    // And disable the start button
    file.previewElement.querySelector(".start").setAttribute("disabled", "disabled")
  })

  // Hide the total progress bar when nothing's uploading anymore
  myDropzone.on("queuecomplete", function(progress) {
    document.querySelector("#total-progress").style.opacity = "0"
  })

  // Setup the buttons for all transfers
  // The "add files" button doesn't need to be setup because the config
  // `clickable` has already been specified.
  document.querySelector("#actions .start").onclick = function() {
    myDropzone.enqueueFiles(myDropzone.getFilesWithStatus(Dropzone.ADDED))
  }
  document.querySelector("#actions .cancel").onclick = function() {
    myDropzone.removeAllFiles(true)
  }
  // DropzoneJS Demo Code End

</script>
</body>
</html>