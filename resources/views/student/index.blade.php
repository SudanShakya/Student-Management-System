@extends('welcome')
@section('main_content')
    <div class="row">
        <div class="col-12">
        <div class="card">
            <div class="card-header">
            <h3 class="card-title">Students Detail</h3>

            <div class="card-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                <div class="input-group-append">
                    <button type="submit" class="btn btn-default">
                    <i class="fas fa-search"></i>
                    </button>
                </div>
                </div>
            </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0" style="height: 300px;">
            <table class="table table-head-fixed text-nowrap">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Mobile</th>
                    <th>Email</th>
                    <th>Citizenship</th>
                    <th>Gender</th>
                    <th>Blood Group</th>
                    <th>Permanent Address</th> 
                    <th>Temporary Address</th>
                    <th>Date of Birth</th>
                    <th>Is Active</th>
                    <th>Is Alumini</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($students as $student)
                        <tr>
                            <td>{{ $student->id }}</td>
                            <td>{{ $student->name }}</td>
                            <td>{{ $student->mobile }}</td>
                            <td>{{ $student->email }}</td>
                            <td>{{ $student->citizenship }}</td>
                            <td>{{ $student->gender }}</td>
                            <td>{{ $student->blood_group }}</td>
                            <td>{{ $student->perm_address }}</td>
                            <td>{{ $student->temp_address }}</td>
                            <td>{{ $student->dob }}</td>
                            <td>{{ $student->is_active }}</td>
                            <td>{{ $student->is_almuni }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
        </div>
    </div>

@endsection