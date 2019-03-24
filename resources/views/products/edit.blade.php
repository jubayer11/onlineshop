@extends('layouts.dashboard')

@section('content')
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link rel="stylesheet" href="{{asset('app/css/buttons.css')}}" type="text/css" media="screen">
    <!------ Include the above in your HEAD tag ---------->

    <div class="container">

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif



        <div class="panel-body" >
            <h3>Edit Product</h3>

            <form  class="form-horizontal" action="{{route('product.update',['id'=>$product->id])}}" method="post" enctype="multipart/form-data" >
                {{csrf_field()}}
                {{method_field('PUT')}}

                <div id="div_id_username" class="form-group required">
                    <label for="id_username" class="control-label col-md-4  requiredField"> Name:<span class="asteriskField">*</span> </label>
                    <div class="controls col-md-8 ">
                        <input class="input-md  textinput textInput form-control" value="{{$product->name}}" maxlength="30" name="name" placeholder="Enter Product Name" style="margin-bottom: 10px" type="text" />
                    </div>
                </div>
                <div id="div_id_email" class="form-group required">
                    <label for="id_email" class="control-label col-md-4  requiredField"> Price:<span class="asteriskField">*</span> </label>
                    <div class="controls col-md-8 ">
                        <input class="input-md emailinput form-control" value="{{$product->price}}" name="price" placeholder="Enter Product Price" style="margin-bottom: 10px" type="text" />
                    </div>
                </div>
                <div id="div_id_password2" class="form-group required">
                    <label for="id_password2" class="control-label col-md-4  requiredField"> Size:<span class="asteriskField">*</span> </label>
                    <div class="controls col-md-8 ">
                        <select class="input-md textinput textInput form-control" id="id_name"  name="size"   style="margin-bottom: 10px" >
                            @foreach($sizes as $size)
                                <option value="{{$size->id}}">{{$size->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div id="div_id_password2" class="form-group required">
                    <label for="id_password2" class="control-label col-md-4  requiredField"> Color:<span class="asteriskField">*</span> </label>
                    <div class="controls col-md-8 ">
                        <select class="input-md textinput textInput form-control" id="id_name"  name="color"   style="margin-bottom: 10px" >
                            @foreach($colors as $color)
                                <option value="{{$color->id}}">{{$color->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div id="div_id_password2" class="form-group required">
                    <label for="id_password2" class="control-label col-md-4  requiredField"> Category:<span class="asteriskField">*</span> </label>
                    <div class="controls col-md-8 ">
                        <select class="input-md textinput textInput form-control" id="id_name"  name="category"   style="margin-bottom: 10px" >
                            @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div id="div_id_password2" class="form-group required">
                    <label for="id_password2" class="control-label col-md-4  requiredField"> Tag:<span class="asteriskField">*</span> </label>
                    <div class="controls col-md-8 ">
                        <select class="input-md textinput textInput form-control" id="id_name"  name="tag"   style="margin-bottom: 10px" >
                            @foreach($tags as $tag)
                                <option value="{{$tag->id}}">{{$tag->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group required">
                    <label  class="control-label col-md-4"> Upload Product Image:</label>
                    <div class="controls col-md-8 ">
                        <input type="file" name="image">
                    </div>
                </div>

                <div id="div_id_image" class="form-group required">
                    <label for="id_email" class="control-label col-md-4  requiredField"><span class="asteriskField"></span> </label>
                    <div class="controls col-md-8 ">
                       <button class="btn-primary" type="submit"> Creat Product </button>
                    </div>
                </div>


            </form>
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