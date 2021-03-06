@extends('layouts.dashboard')
@section('content')

    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="{{asset('app/css/buttons.css')}}" type="text/css" media="screen">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>


    <!------ Include the above in your HEAD tag ---------->

    <div class="container">

        <a href="{{route('product.create')}}">  <button class="punch">Create Product</button></a>
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">All the Product</h3>

                    </div>

                    <table class="table table-hover" id="dev-table">
                        <thead>
                        <tr>
                            <th>id</th>
                            <th>Image</th>
                            <th>Name</th>
                            <th>price</th>
                            <th>Category</th>
                            <th>Sub Category</th>
                            <th>Tag</th>
                            <th>color</th>
                            <th>size</th>
                            <th>Created at</th>
                            <th>Updated at</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if($products)
                            @foreach($products as $product)
                                <tr>
                                    <td>{{$product->id}}</td>
                                    <td><img height="50px" src="{{ URL::to('/') }}/uploads/product/{{$product->image ? $product->image->name: 'no product photo'}}" alt="no photo"></td>
                                    <td>{{$product->name}}</td>
                                    <td>{{$product->price}}</td>
                                    <td><a href="{{route('product.category',$product->id)}}"><button class="btn btn-xs btn-info">View Category</button></a> </td>
                                    <td><a href="{{route('product.sub_category',$product->id)}}"><button class="btn btn-xs btn-info">View Sub Category</button></a> </td>
                                    <td><a href="{{route('product.tag',$product->id)}}"><button class="btn btn-xs btn-info">View Tag</button></a> </td>

                                    <td><a href="{{route('product.color',$product->id)}}"><button class="btn btn-xs btn-info">View Color</button></a> </td>
                                    <td><a href="{{route('product.size',$product->id)}}"><button class="btn btn-xs btn-info">View size</button></a> </td>
                                    <td>{{$product->created_at->diffForHumans()}}</td>
                                    <td>{{$product->updated_at->diffForHumans()}}</td>
                                    <td><a href="{{route('product.edit',$product->id)}}"><button class="btn btn-xs btn-primary">Edit</button></a> </td>

                                    <td>
                                        <form action="{{route('product.destroy',['id'=>$product->id])}}" method="post" enctype="multipart/form-data" >
                                            {{csrf_field()}}
                                            {{method_field('DELETE')}}

                                            <button class="btn btn-xs btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        @endif

                        </tbody>
                    </table>


                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-md-6">


            <div class="btn-group-vertical">

                        <button type="button" class="btn btn-group-justified"><a href="{{route('category.index')}}">Create Category</a></button>
                        <button type="button" class="btn btn-group-justified"><a href="{{route('sub_category.index')}}">Create Sub Category</a></button>
                        <button type="button" class="btn btn-group-justified"><a href="{{route('color.index')}}">Create Color</a></button>
                        <button type="button" class="btn btn-group-justified"><a href="{{route('size.index')}}">Create Size</a></button>
                        <button type="button" class="btn btn-group-justified"><a href="{{route('tag.index')}}">Create Tag</a> </button>
                    </div>
            </div>
        </div>
    </div>



@endsection
@section('SuperAdmin')
    @if(Auth::user()->role_id==1 && Auth::user()->status==1)

        <li>
            <a href="{{route('super.admin.index')}}">
                <i class="pe-7s-users"></i>
                <p>ALL ADMIN</p>
            </a>
        </li>
    @endif
@endsection
@section('Admin')
    @if(((Auth::user()->role_id==1 ||Auth::user()->role_id==2) && Auth::user()->status==1))

        <li>
            <a href="{{route('product.index')}}">
                <i class="pe-7s-display2"></i>
                <p>ALL Product</p>
            </a>
        </li>
        <li>
            <a href="{{route('post.index')}}">
                <i class="pe-7s-note2"></i>
                <p>ALL Post</p>
            </a>
        </li>
    @endif
@endsection