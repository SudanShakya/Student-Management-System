    @extends('welcome')
@section('content_header')

@endsection

@section('main_content')
<div class="col-md-12">

<!-- /.card-header -->
    <div class="card-body p-0">
        <table class="table">
            <thead>
                <tr>
                    <th style="width: 10px">ID</th>
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
            </tbody>
        </table>
    </div>
<!-- /.card-body -->
</div>
<!-- /.card -->
@endsection