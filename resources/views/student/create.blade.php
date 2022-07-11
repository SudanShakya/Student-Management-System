@extends('welcome')
@section('main_content')
          <!-- left column -->
    <div class="col-md-6">
        <!-- general form elements -->
        <div class="card card-primary">
            <div class="card-header">
            <h3 class="card-title">Enter Your Details</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form method="post" action="{{ route('students.store') }}">
            @csrf <!--  cross origin side reference -->
            <div class="card-body">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input name="name" type="text" class="form-control" id="name" placeholder="Enter Name">
                </div>
                <div class="form-group">
                    <label for="mobile">Mobile</label>
                    <input name="mobile" type="text" class="form-control" id="mobile" placeholder="Enter Mobile No.">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input name="email" type="text" class="form-control" id="email" placeholder="Enter Email">
                </div>
                <div class="form-group">
                    <label for="citizenship">Citizenship</label>
                    <input name="citizenship" type="text" class="form-control" id="citizenship" placeholder="Enter Citizenship">
                </div>
                <div class="form-group">
                    <label for="gender">Gender</label>
                    <input name="gender" type="text" class="form-control" id="gender" placeholder="Enter Gender">
                </div>
                <div class="form-group">
                    <label for="blood_group">Blood Group</label>
                    <input name="blood_group" type="text" class="form-control" id="blood_group" placeholder="Enter blood group">
                </div>
                <div class="form-group">
                    <label for="perm_address">Permanent Address</label>
                    <input name="perm_address" type="text" class="form-control" id="perm_address" placeholder="Enter Permanent Address">
                </div>
                <div class="form-group">
                    <label for="temp_address">Temporary Address</label>
                    <input name="temp_address" type="text" class="form-control" id="temp_address" placeholder="Enter Temporary Address">
                </div>
                <div class="form-group">
                    <label for="dob">Dob</label>
                    <input name="dob" type="text" class="form-control" id="dob" placeholder="Enter Dob">
                </div>
                <div class="form-group">
                    <label for="is_active">Is Active?</label>
                    <input name="is_active" type="checkbox" class="form-control" id="is_active">
                </div>
                <div class="form-group">
                    <label for="is_almuni">Is Almuni?</label>
                    <input name="is_almuni" type="checkbox" class="form-control" id="is_almuni">
                </div>
                <div class="form-group">
                    <label for="picture">Choose an image:</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="picture">
                        <label class="custom-file-label" for="picture">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            </form>
        </div>
    </div>

@endsection