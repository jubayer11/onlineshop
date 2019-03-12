@extends('layouts.dashboard')

@section('content')
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link rel="stylesheet" href="{{asset('app/css/buttons.css')}}" type="text/css" media="screen">
    <!------ Include the above in your HEAD tag ---------->

    <div class="container">

     <h3>Create Admin</h3>
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

                        <form  class="form-horizontal" action="{{route('super.admin.store')}}" method="post" >
                            {{csrf_field()}}

                            <div id="div_id_username" class="form-group required">
                                <label for="id_username" class="control-label col-md-4  requiredField"> Username<span class="asteriskField">*</span> </label>
                                <div class="controls col-md-8 ">
                                    <input class="input-md  textinput textInput form-control" id="id_username" maxlength="30" name="username" placeholder="Choose your username" style="margin-bottom: 10px" type="text" />
                                </div>
                            </div>
                            <div id="div_id_email" class="form-group required">
                                <label for="id_email" class="control-label col-md-4  requiredField"> E-mail<span class="asteriskField">*</span> </label>
                                <div class="controls col-md-8 ">
                                    <input class="input-md emailinput form-control" id="id_email" name="email" placeholder="Your current email address" style="margin-bottom: 10px" type="email" />
                                </div>
                            </div>
                            <div id="div_id_password1" class="form-group required">
                                <label for="id_password1" class="control-label col-md-4  requiredField">Password<span class="asteriskField">*</span> </label>
                                <div class="controls col-md-8 ">
                                    <input class="input-md textinput textInput form-control" id="id_password1" name="password" placeholder="Create a password" style="margin-bottom: 10px" type="password" />
                                </div>
                            </div>
                            <div id="div_id_password2" class="form-group required">
                                <label for="id_password2" class="control-label col-md-4  requiredField"> Re:password<span class="asteriskField">*</span> </label>
                                <div class="controls col-md-8 ">
                                    <input class="input-md textinput textInput form-control" id="id_password2" name="password_confirmation" placeholder="Confirm your password" style="margin-bottom: 10px" type="password" />
                                </div>
                            </div>
                            <div id="div_id_name" class="form-group required">
                                <label for="id_name" class="control-label col-md-4  requiredField"> Name<span class="asteriskField">*</span> </label>
                                <div class="controls col-md-8 ">
                                    <input class="input-md textinput textInput form-control" id="id_name" name="name" placeholder="Your Frist name and Last name" style="margin-bottom: 10px" type="text" />
                                </div>
                            </div>

                            <div id="div_id_name" class="form-group required">
                                <label for="role" class="control-label col-md-4  requiredField"> Role<span class="asteriskField">*</span> </label>
                                <div class="controls col-md-8 ">
                                    <select class="input-md textinput textInput form-control" id="id_name" name="role"   style="margin-bottom: 10px" >
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


                                <div class="aab controls col-md-4 "></div>
                                <div class="controls col-md-8 ">
                                    <input   type="submit" value="Create Admin" name="submit">
                                </div>


                        </form>
                </div>

                </div>


@endsection
@section('SuperAdmin')
    @if($r=='SuperAdmin')

        <li>
            <a href="{{route('super.admin.index')}}">
                <i class="pe-7s-users"></i>
                <p>ALL ADMIN</p>
            </a>
        </li>
    @endif
@endsection