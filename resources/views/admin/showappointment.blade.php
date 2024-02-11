<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <h1> <div class="container-scroller">
     <!-- partial:partials/_sidebar.html -->


     @include('admin.sidebar')
      

      <!-- partial -->


   @include('admin.navbar')


      <!-- partial -->

       
      <div class="container-fluid page-body-wrapper">
        <div align="center" style="padding: 100px;">
            <table>
                <tr align="center" style="background-color:
                skyblue;">
                    <th>Customer name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Doctor Name</th>
                    <th>Date</th>
                    <th>Message</th>
                    <th>Status</th>
                </tr>
            </table>
        </div>


</div>

      
  <!-- container-scroller -->
    <!-- plugins:js -->

    @include('admin.script')
     <!-- Custom js for this page -->
</h1>
    
</body>
</html>