@extends('welcome')
@section('main_content')
    <div class="row">
        <div class="col-12">
        <div class="card">
            <div class="card-header">
            <h3 class="card-title">Batch Detail</h3>

            <div class="card-tools">
                <a href = "{{route('batch.create')}}" class = "btn btn-primary btn-sm">Add Batch</a>
            </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0" style="height: 300px;">
            <table class="table table-head-fixed text-nowrap">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Batch Name</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($batches as $batch)
                        <tr>
                            <td>{{ $batch->id }}</td>
                            <td>{{ $batch->batch_name }}</td>
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