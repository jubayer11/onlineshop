@extends('layouts.dashboard')
@section('content')

    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="{{asset('app/css/buttons.css')}}" type="text/css" media="screen">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <div class="container">


        <div class="row">
            <div class="col-sm-6">

                <h3>Create Category for this Product</h3>




                <div class="panel-body" >

                    <form  class="form-horizontal" action="{{route('product.sub_category.update',['id'=>$product->id])}}" method="post" >
                        {{csrf_field()}}
                        {{method_field('PUT')}}

                        <div id="div_id_password2" class="form-group required">
                            <label for="id_password2" class="control-label col-md-4  requiredField"> sub_category:<span class="asteriskField">*</span> </label>
                            <div class="controls col-md-8 ">
                                <select class="input-md textinput textInput form-control" id="id_name"  name="sub_category"   style="margin-bottom: 10px" >
                                    @foreach($sub_categories as $sub_category)
                                        <option value="{{$sub_category->id}}">{{$sub_category->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="aab controls col-md-4 "></div>
                        <div class="controls col-md-8 ">
                            <input   type="submit" value="Create sub_category" name="submit">
                        </div>


                    </form>
                </div>

            </div>
            <div class="col-sm-4">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">Product sub_category</h3>

                    </div>

                    <table class="table table-hover" id="dev-table">
                        <thead>
                        <tr>

                            <th>Name</th>
                            <th>Created At</th>
                            <th>Updated At</th>
                            <th>delete</th>


                        </tr>
                        </thead>
                        <tbody>

                        @foreach($product->sub_categories as $sub_category)
                            <tr>
                                <td>{{$sub_category->name}}</td>
                                <td>{{$sub_category->created_at->diffForHumans()}}</td>
                                <td>{{$sub_category->updated_at->diffForHumans()}}</td>
                                <td>
                                    <form action="{{route('product.sub_category.delete',['sub_category_id'=>$sub_category->id,'product_id'=>$product->id])}}" method="post" enctype="multipart/form-data" >

                                        {{csrf_field()}}



                                        <button class="btn btn-xs btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach



                        </tbody>
                    </table>


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
