@extends('welcome')
@section('main_content')
          <!-- left column -->
    <div class="col-md-6">
        <!-- general form elements -->
        <div class="card card-primary">
            <div class="card-header">
            <h3 class="card-title">Enter Batch Details</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form method="post" action="{{ route('batch.update',$batch->id) }}">
                @method('PATCH')
            @csrf <!--  cross origin side reference -->
            <div class="card-body">
                <div class="form-group">
                    <label for="batch_name">Batch Name</label>
                    <input name="batch_name" value={{ $batch->batch_name }} type="text" class="form-control" id="batch_name" placeholder="Enter Batch Name">
                </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
            </form>
        </div>
    </div>

@endsection