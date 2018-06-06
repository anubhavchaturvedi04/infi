@extends('layouts.app')
@section('header')
Products
@endsection
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card card-info border-secondary">
                <div class="card-header"><span>Update: <strong>{{$product->title}}</strong></span></div>
              <div class="card-body">
                  <form action="{{route('updateProductAdmin')}}" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Product Name</label>
                            <input type="text" class="form-control" value="{{$product->title}}" id="exampleInputEmail1" aria-describedby="emailHelp" name="title" placeholder="Title" required>
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Category</label>
                            {!!Form::select('category_id',$categories,$product->category_id,['class'=>'form-control'])!!}
                          </div>
                          <div class="form-group">
                            <label for="exampleInputPassword1">Description</label>
                            <textarea name="description"  class="form-control ckeditor" required>{{$product->description}}</textarea>
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Capacity</label>
                            <input type="text" class="form-control" value="{{$product->capacity}}" id="exampleInputEmail1" aria-describedby="emailHelp" name="capacity" placeholder="Capacity" >
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Weight</label>
                            <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="weight" step="0.01" value="{{$product->weight}}" placeholder="Weight" >
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Colour</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" value="{{$product->colour}}" aria-describedby="emailHelp" name="colour" placeholder="Colour" >
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Packing Type</label>
                            <input type="text" class="form-control" value="{{$product->packing_type}}" id="exampleInputEmail1" aria-describedby="emailHelp" name="packing_type" placeholder="Colour" >
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Price Per Piece</label>
                            <input type="number" class="form-control" step="0.01" required id="exampleInputEmail1" aria-describedby="emailHelp" name="price" value="{{$product->price}}" placeholder="Price Per Piece" min="1">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">MOQ</label>
                            <input type="number" class="form-control" step="100" id="exampleInputEmail1" aria-describedby="emailHelp" min="100" name="moq" value="{{$product->moq}}" placeholder="Minimum Order Quantity" >
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Price Per Piece With Branding</label>
                            <input type="number" class="form-control" step="0.01" id="exampleInputEmail1" aria-describedby="emailHelp" name="price_brand" value="{{$product->price_brand}}" placeholder="Price Per Piece With Branding" required min="1">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">MOQ With Branding</label>
                            <input type="number" class="form-control" step="100" id="exampleInputEmail1" aria-describedby="emailHelp" min="100" name="moq_brand" value="{{$product->moq_brand}}" placeholder="Minimum Order Quantity With Branding" >
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Material</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="material" placeholder="Material" value="{{$product->material}}">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Food Grade</label>
                            <select name="food_grade">
                              <option value="0">No</option>
                              <option value="1">Yes</option>
                            </select>
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Price On Request</label>
                            <select name="ecom">
                              <option value="0">No</option>
                              <option value="1">Yes</option>
                            </select>
                          </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Dispatch Time In Days</label>
                          <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="dispatch_time" placeholder="Dispatch Time In Days" value="{{$product->dispatch_time}}">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Dispatch With Branding Time In Days</label>
                          <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="dispatch_time_brand" placeholder="Dispatch Time In Days" value="{{$product->dispatch_time_brand}}">
                        </div>
                        <div class="form-group">
<label>Pieces Per Box</label>                          <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="pieces_per_box" value="{{$product->pieces_per_box}}" placeholder="Pieces Per Box">
                        </div>
                          <div class="form-group productImages">
                            <label for="exampleInputEmail1">Images</label>
                            <input type="file" multiple accept="image/*" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="image[]" placeholder="Product Image">
                          </div>
                           @foreach($attributes as $attribute)
                                  <div class='form-group'><a href="javascript:void(0);" class="removeAttribute"><i class="fa fa-times pull-right"></i></a><label>{{$attribute->attr_name}}:</label><input type='hidden' value="{{$attribute->attr_name}}" class='form-control' name='attr_name[]'><input type='text' class='form-control' name='attr_value[]' value="{{$attribute->attr_value}}"></div><hr/>
                                @endforeach
                          <label>Utility Of Product:</label>
                          <div class="row">
                            @foreach($utilities as $utility)
                            <div class="col-md-3">
                              @if(UtilityHelper::utility($utility->id,$product->id))
                                <input type="checkbox" name="utility[]" value="{{$utility->id}}" checked>{{$utility->title}}
                              @else
                                <input type="checkbox" name="utility[]" value="{{$utility->id}}">{{$utility->title}}
                              @endif
                              
                            </div>
                            @endforeach
                          </div>
                          <div class="form-group">
                            <label for="exampleInputPassword1">Meta Keywords</label>
                            <textarea name="meta_keywords"  class="form-control ckeditor" required>{{$product->meta_keywords}}</textarea>
                          </div>
                          <div class="form-group">
                            <label for="exampleInputPassword1">Meta Description</label>
                            <textarea name="meta_description"  class="form-control ckeditor" required>{{$product->meta_description}}</textarea>
                          </div>
                          <div class="card card-info">
                              <div class="card-header">Properties<button class="btn btn-success addAttribute pull-right" type="button"><i class="fa fa-plus"></i></button></div>
                              <div class="card-body editProductForm">
                            </div>
                          </div>
                        {{csrf_field()}}
                        <input type="hidden" name="id" value="{{$product->id}}">
                        <button type="submit" class="btn btn-success">Update</button>
                  </form>
              </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
<script src="{{asset('public/plugins/ckeditor/ckeditor.js')}}"></script>
<script type="text/javascript">
  $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    ClassicEditor
      .create(document.querySelector('.ckeditor'))
      .then(function (editor) {
        // The editor instance
      })
      .catch(function (error) {
        console.error(error)
      })
  })
  $(document).on('click','.addAttribute',function(){
    $('.editProductForm').append("<div class='form-group'><a href='javascript:void(0);' class='removeAttribute'><i class='fa fa-times pull-right'></i></a>Property Name:<input type='text' class='form-control' name='attr_name[]'> Property Value:<input type='text' class='form-control' name='attr_value[]'><hr/>"); 
  });
  $(document).on('click','.removeAttribute',function(){
    $(this).parents().closest('.form-group').remove();
  });
</script>
@endsection