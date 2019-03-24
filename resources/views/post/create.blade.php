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
            <h3>Create Post</h3>

            <form  class="form-horizontal" action="{{route('post.store')}}" method="post" >
                {{csrf_field()}}

                <div id="div_id_username" class="form-group required">
                    <label for="id_username" class="control-label col-sm-4  requiredField"> Title:<span class="asteriskField">*</span> </label>
                    <div class="controls col-sm-8 ">
                        <input class="input-md  textinput textInput form-control" id="id_username" maxlength="30" name="title" placeholder="Enter Post Title" style="margin-bottom: 10px" type="text" />
                    </div>
                </div>
                <div id="div_id_email" class="form-group required">
                    <label for="id_email" class="control-label col-sm-4  requiredField"> Description:<span class="asteriskField">*</span> </label>
                    <div class="controls col-sm-8 ">
                        <input class="input-md emailinput form-control" id="id_email" name="body" placeholder="Enter Post discription" style="margin-bottom: 10px"  type="text" />
                    </div>
                </div>




                <div id="div_id_image" class="form-group required">
                    <label for="id_email" class="control-label col-sm-4  requiredField"><span class="asteriskField"></span> </label>
                    <div class="controls col-sm-8 ">
                        <input type="submit"  value="Create Post">
                    </div>
                </div>


            </form>
        </div>

    </div>


@endsection
@section('Post')
    @if(((Auth::user()->role_id==1 ||Auth::user()->role_id==2 ||Auth::user()->role_id==3) && Auth::user()->status==1))

        <li>
            <a href="{{route('post.index')}}">
                <i class="pe-7s-note2"></i>
                <p>ALL Post</p>
            </a>
        </li>
    @endif
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