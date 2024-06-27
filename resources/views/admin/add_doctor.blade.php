<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        label {
            display: inline-block;
            width: 200px;
        }
    </style>
    @include('admin.css')
    <!-- Include Bootstrap CSS (assuming admin.css includes it) -->
</head>
<body>
<div class="container-scroller">
    <!-- partial:partials/_sidebar.html -->
    @include('admin.sidebar')
    <!-- partial -->
    @include('admin.navbar')
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <div class="container" style="padding-top:100px; text-align:center;">

            @if(session()->has('message'))
                <div class="alert alert-success alert-dismissible fade show">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    {{ session()->get('message') }}
                </div>
            @endif

            <form action="{{ url('upload_doctor') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div style="padding:15px;">
                    <label>Doctor Name:</label>
                    <input type="text" style="color:black;" name="name" placeholder="" required>
                </div>
                <div style="padding:15px;">
                    <label>Phone:</label>
                    <input type="text" style="color:black;" name="number" placeholder="" required>
                </div>
                <div style="padding:15px;">
                    <label>Room No:</label>
                    <input type="text" style="color:black;" name="room" placeholder="" required>
                </div>
                <div style="padding:15px;">
                    <label>Specialty:</label>
                    <select name="specialty" style="color:black;width:200px;" required>
                        <option value="">-----</option>
                        <option value="Teeth">Teeth</option>
                        <option value="Skin">Skin</option>
                        <option value="Eyes">Eyes</option>
                    </select>
                </div>
                <div style="padding:15px;">
                    <label>Doctor Image:</label>
                    <input type="file" name="file">
                </div>
                <div style="padding:15px;">
                    <input type="submit" class="btn btn-success">
                </div>
            </form>
        </div>
    </div>
    <!-- main-panel ends -->
</div>

<!-- Include jQuery and Bootstrap JS -->
@include('admin.script')

</body>
</html>
