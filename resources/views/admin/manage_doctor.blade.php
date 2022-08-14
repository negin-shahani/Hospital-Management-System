<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Corona Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="admin/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="admin/assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="admin/assets/vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="admin/assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="admin/assets/vendors/owl-carousel-2/owl.carousel.min.css">
    <link rel="stylesheet" href="admin/assets/vendors/owl-carousel-2/owl.theme.default.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="admin/assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="admin/assets/images/favicon.png" />
    <style>
        input[type=text]{
            color: black;
            width: 250px;
        }
        input[type=number]{
            color: black;
            width: 250px;
        }
        input[type=file]{
            color: white;
            width: 250px;
        }
        input[type=submit]{
            color: white;
            width: 100px;
        }
        label{
            width: 130px;
            text-align: left;
            
        }
    </style>
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        @include('admin.navbar')
        <div class="container-fluid page-body-wrapper">
            <div class="container" align="center" style="padding: 100px;" >
                @if(session()->has('message'))
                    <div class="alert alert-success" >
                        <button type="button" class="close" data-bs-dismiss="alert" >X</button>
                        {{session()->get('message')}}
                    </div>
                @endif

                <form action="{{url('upload_doctor')}}" method="POST" enctype="multipart/form-data" >
                    <div style="padding: 10px;">
                        <label for="name">Doctor name:</label>
                        <input type="text" name="name" placeholder="write the doctor name!" required>
                    </div>
                    <div style="padding: 10px;">
                        <label for="phone">Phone Number:</label>
                        <input type="number" name="phone" placeholder="ex: 0902***4164" required>
                    </div>
                    <div style="padding: 10px;">
                        <label for="Speciality">Doctor Speciality:</label>
                        <select name="Speciality" style="color: black; width:inherit; width: 250px;" required>
                            <option value="-- select --">-- select --</option>
                            <option value="Dermatologists">Dermatologists</option>
                            <option value="Internal medicine">Internal medicine</option>
                            <option value="Neurology">Neurology</option>
                            <option value="Plastic Surgeon">Plastic Surgeon</option>
                            <option value="General Surgeon">General Surgeon</option>
                        </select>
                    </div>
                    <div style="padding: 10px;">
                        <label for="Room">Room Number:</label>
                        <input type="text" name="Room" placeholder="ex: 104" required>
                    </div>
                    <div style="padding: 10px;">
                        <label for="Image">Doctor Image:</label>
                        <input type="file" name="Image" required>
                    </div>
                    <div style="padding: 10px;">
                        <input type="submit" class="btn btn-success">
                    </div>
                </form>
            </div>
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="admin/assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="admin/assets/vendors/chart.js/Chart.min.js"></script>
    <script src="admin/assets/vendors/progressbar.js/progressbar.min.js"></script>
    <script src="admin/assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
    <script src="admin/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="admin/assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
    <script src="admin/assets/js/jquery.cookie.js" type="text/javascript"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="admin/assets/js/off-canvas.js"></script>
    <script src="admin/assets/js/hoverable-collapse.js"></script>
    <script src="admin/assets/js/misc.js"></script>
    <script src="admin/assets/js/settings.js"></script>
    <script src="admin/assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="admin/assets/js/dashboard.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>