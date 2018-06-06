@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card card-info">
                <div class="card-header"><span>Vendor Products</span>
                </div>
                <div class="card-body">
                    <div class="card">
                        <div class="card-body">
                            <div class="row justify-content-md-center">
                                <div class="col-md-10">
                                    <select class="form-control" name="admin_price">
                                        @foreach($ecoms as $ecom)
                                            <option value="{{$ecom->id}}">{{$ecom->title}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-2">
                                    <button type="button" id="map" class="btn btn-info">Map</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th># <input type="checkbox" id="selectAll"></th>
                                <th>Image</th>
                                <th>Title</th>
                                <th>Sold By</th>
                                <th>MOQ</th>
                                <th>Price/Peice</th>
                                <th>Price/Peice Branding</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                    @foreach($products as $product)
                            <tr>
                                <td>{{$loop->index+1}} <input type="checkbox" value="{{$product->id}}" class="product_id">
                                </td>
                                <td>
                                  <img class="admin-product-image" src="{{url('/')}}/public/product/{{$product->image}}" alt="Card image cap">
                                </td>
                                <td>
                                  {{$product->title}}&nbsp;@if($product->admin_price!='')
                                        <span class="badge badge-success"><i class="fa fa-check"></i></span>
                                        @else
                                            <span class="badge badge-secondary map_{{$product->id}}"><i class="fa fa-check"></i></span>
                                    @endif
                                </td>
                                <td>{{$product->user->name}}</td>
                                <td>{{$product->moq}}</td>
                                <td>{{$product->price}}</td>
                                <td>{{$product->price_brand}}</td>
                                <td>
                                    <a href="{{route('showProductAdminVendor',['id'=>$product->id])}}" class="btn btn-info">View</a>
                                </td>
                            </tr>
                    @endforeach
                        </tbody>
                        <tfoot>
                            {{$products->links()}}
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Button trigger modal -->
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
@endsection
@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
<script type="text/javascript">
    $(':checkbox[id="selectAll"]').click (function () {
      $(':checkbox[class="product_id"]').prop('checked', this.checked);
    });
    $("select[name='admin_price']").select2();
    $(document).on('click','#map',function(){
        $('.product_id:checkbox:checked').each(function () {
            var id=$(this).val();
            var obj="map_"+id;
            var product_id=$("select[name='admin_price']").val();
            $.ajax(
                    {
                        method:"POST",
                        data:{
                            "id":id,
                            "map_id":product_id
                        },
                        url:"{{route('mapProductAdminVendor')}}",
                        headers:{
                            "X-CSRF-TOKEN":"{{csrf_token()}}"
                        },
                        success:function(data)
                        {
                            if(data=="Success")
                            {
                                $("."+obj).removeClass('badge-secondary');
                                $("."+obj).addClass('badge-success');
                                toastr.success('Product Mapped Succesfully')
                            }
                            else
                            {
                                toastr.warning('Something Went Wrong');
                            }
                        }
                    }
                );
        });
    });
</script>
@endsection