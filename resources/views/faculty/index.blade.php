@extends('welcome')
@section('main_content')
    <div class="row">
        <div class="col-12">
        <div class="card">
            <div class="card-header">
            <h3 class="card-title">Faculties Detail</h3>

            <div class="card-tools">
                <a href = "{{route('faculty.create')}}" class="btn btn-primary btn-sm">Add Faculty</a>
            </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0" style="height: 300px;">
            <table class="table table-head-fixed text-nowrap">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($faculties as $faculty)
                        <tr>
                            <td>{{ $faculty->id }}</td>
                            <td>{{ $faculty->name }}</td>
                            <td>
                                <a href="{{ route('faculty.edit',$faculty->id) }}" class="btn btn-warning btn-sm">
                                <span class="fa fa-edit"></span></a>

                            
                                <form method="post" action="{{ route('faculty.destroy', $faculty->id)}}" style="display:inline">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-danger btn-sm" id="id_btn_faculties_delete"><span class = "fa fa-trash"></span></button>
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