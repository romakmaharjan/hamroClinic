
<!DOCTYPE html>
<html lang="en">
  <head>
    <style>
      label{
        display: inline-block;
        width: 200px;
      }
    </style>
    @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">
     <!-- partial:partials/_sidebar.html -->
     @include('admin.sidebar')
      <!-- partial -->
    @include('admin.navbar')
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
      <div class="container"style="padding-top:100px; align=center;">
        <form action="{{url('upload_doctor')}}" method="POST" enctype="multipart/form-data">

            @csrf
            <div style="padding:15px;">
                <label>Doctor Name:</label>
                <input type="text" style="color:black;" name="name" placeholder="">
            </div>
             <div style="padding:15px;">
                <label>Phone:</label>
                <input type="text" style="color:black;" name="number" placeholder="">
            </div>
             <div style="padding:15px;">
                <label>Speciality:</label>
                <select name="specialty" style="color:black;weight:200px;">
                  <option>-----</option>
                  <option value="">Teeth</option>
                  <option value="">Skin</option>
                  <option value="">Eyes</option>
                </select>
            </div>
             <div style="padding:15px;">
                <label>Room No:</label>
                <input type="text" style="color:black;" name="room" placeholder="">
            </div>
            <div style="padding:15px;">
                <label>Doctor Image:</label>
                <input type="file"  name="file" >
            </div>
            <div style="padding:15px;">
                <input type="submit"  class="btn btn-success" >
            </div>
        </form>
      </div>
      </div>
        <!-- main-panel ends -->
    </div>


    @include('admin.script')

  </body>
</html>
