<!DOCTYPE html>
<html lang="en">
  <head>
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
            <div class="container" align="center" style="padding: 10px;" >
                @if(session()->has('message'))
                    <div class="alert alert-success" >
                        {{session()->get('message')}}
                        <button type="button" class="close" data-bs-dismiss="alert" style="color:red; border:1px solid red; margin:5px; padding:2px;" >X</button>
                    </div>
                @endif

                <table class="styled-table" cellspacing='0'>
                    <thead>
                        <tr>
                            <th>Patient name</th>
                            <th>Email</th>
                            <th>phone</th>
                            <th>Doctor</th>    
                            <th>Date</th> 
                            <th>Message</th>
                            <th>Status</th> 
                            <th>Approve</th>       
                            <th>Cancel</th>                                         
                            <th>Send Mail</th>                                         
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $appoint)
                            <tr>
                                <td>{{$appoint->name}}</td>
                                <td>{{$appoint->email}}</td>
                                <td>{{$appoint->phone}}</td>
                                <td>{{$appoint->doctor}}</td>
                                <td>{{$appoint->date}}</td>
                                <td>{{$appoint->message}}</td>
                                <td>{{$appoint->status}}</td>
                                <td><a class="btn btn-success" href="{{url('approve', $appoint->id)}}" onclick="return confirm('Are you sure you want to Approve this Appointment?')">
                                    Approve</a>
                                </td>
                                <td><a class="btn btn-danger" href="{{url('cancel', $appoint->id)}}" onclick="return confirm('Are you sure you want to cancel this Appointment?')">
                                    Cancel</a>
                                </td>
                                <td><a class="btn btn-primary" href="{{url('sendEmail', $appoint->id)}}" onclick="return confirm('Are you sure you want to send mail?')">
                                    Send Mail</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
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