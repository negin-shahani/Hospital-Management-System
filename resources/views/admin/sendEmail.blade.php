<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin Dashboard</title>
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
    <link rel="stylesheet" type="text/css" href="../assets/css/showAppointment.css" />
    <style>
        input[type=text]{
            color: black;
            width: 300px;
            border: 3px solid #009879;
            border-radius: 5px;
        }
        input[type=submit]{
            color: white;
            width: 200px;
            align:center;
        }
        label{
            width: 100px;
            text-align: left;
            color: #009879;
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
                        {{session()->get('message')}}
                        <button type="button" class="close" data-bs-dismiss="alert" style="color:red; border:1px solid red; margin:5px; padding:2px;" >X</button>
                    </div>
                @endif

                <form action="{{url('send',$data->id )}}" method="POST">
                    @csrf
                    <div style="padding: 10px;">
                        <label for="name">Greeting:</label>
                        <input type="text" name="greeting" value="" >
                    </div>
                    <div style="padding: 10px;">
                        <label for="phone">Body:</label>
                        <input type="text" name="body" value="" style="width:300px; height:80px;">
                    </div>
                    <div style="padding: 10px;">
                        <label for="name">Action Text:</label>
                        <input type="text" name="actiontext" value="" >
                    </div>
                    <div style="padding: 10px;">
                        <label for="name">Action URL:</label>
                        <input type="text" name="actionurl" value="" >
                    </div>
                    <div style="padding: 10px;">
                        <label for="name">End Part:</label>
                        <input type="text" name="endpart" value="" >
                    </div>
                    <div style="padding: 10px;">
                        <input type="submit" class="btn btn-success" value="Send Message">
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