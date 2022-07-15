@extends('welcome')
@section('main_content')
          <!-- left column -->
    <div class="col-md-6">
        <!-- general form elements -->
        <div class="card card-primary">
            <div class="card-header">
            <h3 class="card-title">Enter Semester Details</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form method="post" action="{{ route('semester.store') }}">
            @csrf <!--  cross origin side reference -->
            <div class="card-body">
                <div class="form-group">
                    <label for="semester_name">Semester Name</label>
                    <input name="semester_name" type="text" class="form-control" id="semester_name" placeholder="Enter Semester Name">
                </div>

                <div class="form-group">
                    <label for="is_active">Is Active?</label>
                    <input name="is_active" type="checkbox" class="form-control" id="is_active">
                </div>
                
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
            </form>
        </div>
    </div>

@endsection