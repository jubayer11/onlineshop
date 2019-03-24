@extends('layouts.dashboard')

@section('content')
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <div class="container">


<h3>Editing Admin</h3>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="col-sm-3">
            <img src=" {{ URL::to('/') }}/uploads/profile/{{$admin->image ? $admin->image: 'http://placehold.it/400*400'}}" alt="no photo" class="img-responsive img-rounded">
        </div>
        <div class="col-sm-9">

            <div class="panel-body" >

                <form  class="form-horizontal" action="{{route('admin.update',['id'=>$admin->id])}}" method="post" enctype="multipart/form-data" >
                    {{csrf_field()}}
                    {{method_field('PUT')}}

                    <div id="div_id_username" class="form-group required">
                        <label for="id_username" class="control-label col-md-4  requiredField"> Username<span class="asteriskField">*</span> </label>
                        <div class="controls col-md-8 ">
                            <input class="input-md  textinput textInput form-control" value="{{$admin->user_name}}" id="id_username" maxlength="30" name="username" placeholder="Choose your username" style="margin-bottom: 10px" type="text" />
                        </div>
                    </div>
                    <div id="div_id_email" class="form-group required">
                        <label for="id_email" class="control-label col-md-4  requiredField"> E-mail<span class="asteriskField">*</span> </label>
                        <div class="controls col-md-8 ">
                            <input class="input-md emailinput form-control" id="id_email" value="{{$admin->email}}" name="email" placeholder="Your current email address" style="margin-bottom: 10px" type="email" />
                        </div>
                    </div>
                    <div id="div_id_password1" class="form-group required">
                        <label for="id_password1" class="control-label col-md-4  requiredField">Password<span class="asteriskField">*</span> </label>
                        <div class="controls col-md-8 ">
                            <input class="input-md textinput textInput form-control" id="id_password1" name="password" value="{{$admin->password}}" placeholder="Create a password" style="margin-bottom: 10px" type="password" />
                        </div>
                    </div>

                    <div id="div_id_name" class="form-group required">
                        <label for="id_name" class="control-label col-md-4  requiredField"> Name<span class="asteriskField">*</span> </label>
                        <div class="controls col-md-8 ">
                            <input class="input-md textinput textInput form-control" id="id_name" name="name" value="{{$admin->name}}" placeholder="Your Frist name and Last name" style="margin-bottom: 10px" type="text" />
                        </div>
                    </div>

                    <div id="div_id_name" class="form-group required">
                        <label for="role" class="control-label col-md-4  requiredField"> Role<span class="asteriskField">*</span> </label>
                        <div class="controls col-md-8 ">
                            <select class="input-md textinput textInput form-control" id="id_name"  name="role"   style="margin-bottom: 10px" >
                                @foreach($roles as $role)
                                    <option value="{{$role->id}}">{{$role->name}}</option>
                                @endforeach
                            </select>

                        </div>
                    </div>

                    <div id="div_id_gender" class="form-group required">
                        <label for="id_gender"  class="control-label col-md-4  requiredField"> Status<span class="asteriskField">*</span> </label>
                        <div class="controls col-md-8 "  style="margin-bottom: 10px">
                            <label class="radio-inline"> <input type="radio" name="status" id="id_gender_1" value=0  style="margin-bottom: 10px">Non-Active</label>
                            <label class="radio-inline"> <input type="radio" name="status" id="id_gender_2" value=1  style="margin-bottom: 10px">Active </label>
                        </div>
                    </div>

                    <div id="div_id_image" class="form-group required">
                        <label for="id_email" class="control-label col-md-4  requiredField"> Upload profile Picture<span class="asteriskField">*</span> </label>
                        <div class="controls col-md-8 ">
                            <input type="file" name="image">
                        </div>
                    </div>



                    <div class="aab controls col-md-4 "></div>
                    <div class="controls col-md-8 ">
                        <input type="submit" name="submit" value="Editing Admin" class="btn btn-primary btn btn-info" id="submit-id-signup" />
                    </div>


                </form>
            </div>

        </div>



    </div>


@endsection

@section('SuperAdmin')
    @if($r=='SuperAdmin' && Auth::user()->status==1)

        <li>
            <a href="{{route('super.admin.index')}}">
                <i class="pe-7s-users"></i>
                <p>ALL ADMIN</p>
            </a>
        </li>
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