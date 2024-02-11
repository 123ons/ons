<!DOCTYPE html>
<html lang="en">
  <head>
    <style type="text/css">
        label
        {
            display: inline-block;
            width: 200px;

        }
    </style>
    @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">

    @include('admin.sidebar')

    @include('admin.navbar')

    <div class="container-fluid page-body-wrapper">

    <div class="container" align="center" style="padding-top: 100px;">

    @if(session()->has('message'))


<div class="alert alert-success">

  <button type="button" class="close" data-dimiss="alert">
    x
     </button>

  {{session()->get('message')}}

</div>

@endif 
<form action="{{url('upload_doctor')}}"methode="POST"
enctype="multipart/form-data">
    

  
        @csrf
            <div style="padding:15px">
                <label >Doctor Name</label>
                <input type="text" style="color:black;" name="name" placeholder="Write the name" required="">
            </div>

            <form >
            <div style="padding:15px">
                <label >Phone</label>
                <input type="number" style="color:black;" name="number" placeholder="Write the number" required="">
            </div>

            <form >
            <div style="padding:15px">
            <label >Speciality</label>

                <select name="speciality" style="color: black ; width: 200px">
                    <option >---Select---</option>
                    <option value="skin">skin</option>
                    <option value="heart">heart</option>
                    <option value="eye">eye</option>
                    <option value="nose">nose</option>

                </select>
            </div>

            <form >
            <div style="padding:15px">
                <label >Room no</label>
                <input type="text" style="color:black;" name="room" placeholder="wridth the room number" required="">
            </div>


            <div style="padding:15px">
                <label >Doctor Image</label>
                <input type="file"  name="file" required="">
            </div>


            <div style="padding:15px">
              
                <input type="submit" class="btn btn-success">
            </div>


        </form>

    </div>

    </div>

  
     
    <!-- End custom js for this page -->
    @include('admin.script')
  </body>
</html>