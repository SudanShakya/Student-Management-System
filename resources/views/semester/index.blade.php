@extends('welcome')
@section('main_content')
    <div class="row">
        <div class="col-12">
        <div class="card">
            <div class="card-header">
            <h3 class="card-title">Semester Detail</h3>

            <div class="card-tools">
                <a href = "{{route('semester.create')}}" class = "btn btn-primary btn-sm">Add Semester</a>
            </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0" style="height: 300px;">
            <table class="table table-head-fixed text-nowrap">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Semester Name</th>
                    <th>Is Active</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($semesters as $semester)
                        <tr>
                            <td>{{ $semester->id }}</td>
                            <td>{{ $semester->semester_name }}</td>
                            <td>{{ $semester->is_active }}</td>
                            <td>
                                <a href="{{ route('semester.edit',$semester->id) }}" class="btn btn-warning btn-sm">
                                <span class="fa fa-edit"></span></a>

                            
                                <form method="post" action="{{ route('semester.destroy', $semester->id)}}" style="display:inline">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-danger btn-sm" id="id_btn_semesters_delete"><span class = "fa fa-trash"></span></button>
                                </form>
                            </td>
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