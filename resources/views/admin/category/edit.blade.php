@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card card-info border-secondary">
                <div class="card-header"><span>Add Category</span></div>
                <div class="card-body">
                    <form action="{{route('categoriesAdminUpdate')}}" method="post" enctype="multipart/form-data">
                          <div class="form-group">
                            <label for="exampleInputEmail1">Status</label>
                            {!!Form::select('status',$status,$category->status,['class'=>'form-control'])!!}
                          </div>

<div class="form-group">
                            <label for="exampleInputEmail1">Parent Category</label>
                            {!!Form::select('parent_id',$categories,$category->parent_id,['class'=>'form-control'])!!}
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Title</label>
                            <input type="text" class="form-control" value="{{$category->title}}" id="exampleInputEmail1" aria-describedby="emailHelp" name="title" placeholder="Title" required>
                          </div>
                          {{csrf_field()}}
<input type="hidden" value="{{$category->id}}" name="id">
                          <button type="submit" class="btn btn-success">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
