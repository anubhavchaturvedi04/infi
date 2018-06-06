@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card card-info border-secondary">
                <div class="card-header"><span>Add Utility</span></div>
                <div class="card-body">
                    <form action="{{route('utilitiesAdminSave')}}" method="post" enctype="multipart/form-data">
                          <div class="form-group">
                            <label for="exampleInputEmail1">Status</label>
                            {!!Form::select('status',$status,null,['class'=>'form-control'])!!}
                          </div>

<div class="form-group">
                            <label for="exampleInputEmail1">Parent Utility</label>
                            {!!Form::select('parent_id',$categories,'',['class'=>'form-control'])!!}
                          </div>                          <div class="form-group">
                            <label for="exampleInputEmail1">Title</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="title" placeholder="Title" required>
                          </div>
                          {{csrf_field()}}
                          <button type="submit" class="btn btn-success">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
