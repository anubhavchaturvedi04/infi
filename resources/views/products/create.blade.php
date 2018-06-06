@extends('layouts.app')
@section('header')
Products
@endsection
@section('content')

    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card card-info border-secondary">
                <div class="card-header"><span>Add Product</span></div>
                <div class="card-body">
                    <form action="{{route('saveProduct')}}" id="saveProduct" method="post" enctype="multipart/form-data">
                          <div class="form-group">
                            <label for="exampleInputEmail1">Product Name</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="title" placeholder="Title" required>
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Category</label>
                            {!!Form::select('category_id',$categories,null,['class'=>'form-control'])!!}
                          </div>
                          <div class="form-group">
                            <label for="exampleInputPassword1">Description</label>
                            <textarea name="description" class="form-control ckeditor" required></textarea>
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Weight</label>
                            <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="weight" step="0.01" placeholder="Weight" >
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Colour</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="colour" placeholder="Colour" >
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Packing Type</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="packing_type" placeholder="Packing Type" >
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Price Per Piece</label>
                            <input type="number" class="form-control" step="0.01" required id="exampleInputEmail1" aria-describedby="emailHelp" name="price" placeholder="Price Per Piece" min="1">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">MOQ</label>
                            <input type="number" class="form-control" step="100" id="exampleInputEmail1" aria-describedby="emailHelp" min="100" name="moq" placeholder="Minimum Order Quantity" >
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Price Per Piece With Branding</label>
                            <input type="number" class="form-control" step="0.01" id="exampleInputEmail1" aria-describedby="emailHelp" name="price_brand" placeholder="Price Per Piece With Branding" required min="1">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">MOQ With Branding</label>
                            <input type="number" class="form-control" step="100" id="exampleInputEmail1" aria-describedby="emailHelp" min="100" name="moq_brand" placeholder="Minimum Order Quantity With Branding" >
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Material</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="material" placeholder="Material" >
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
                          <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="dispatch_time" placeholder="Dispatch Time In Days">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Dispatch With Branding Time In Days</label>
                          <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="dispatch_time_brand" placeholder="Dispatch Time In Days">
                        </div>
                        <div class="form-group">
<label>Pieces Per Box</label>                          <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="pieces_per_box" placeholder="Pieces Per Box">
                        </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Image</label>
                            <input type="file" accept="image/*" multiple class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="image" placeholder="Product Image" required>
                          </div>
                          <div class="card card-info">
                            <div class="card-header">Properties<button class="btn btn-success addAttribute pull-right" type="button"><i class="fa fa-plus"></i></button></div>
                            <div class="card-body editProductForm">
                            </div>
                          </div>
                          {{csrf_field()}}
                          <button type="button" onclick="saveProduct();" class="btn btn-success">Save</button>
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
  function saveProduct()
  {
    $('textarea').val($('.ck-content>p').text());
    $('#saveProduct').submit();
  }
  $(document).on('click','.addAttribute',function(){
    $('.editProductForm').append("<div class='form-group'><a href='javascript:void(0);' class='removeAttribute'><i class='fa fa-times pull-right'></i></a>Property Name:<input type='text' class='form-control' name='attr_name[]'> Property Value:<input type='text' class='form-control' name='attr_value[]'><hr/>"); 
  });
  $(document).on('click','.removeAttribute',function(){
    $(this).parents().closest('.form-group').remove();
  });
</script>
@endsection