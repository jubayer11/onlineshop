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
            <img src=" {{ URL::to('/') }}/uploads/carousel/{{$carousel->photo ? $carousel->photo: 'http://placehold.it/400*400'}}" alt="no photo" class="img-responsive img-rounded">
        </div>
        <div class="col-sm-9">

            <div class="panel-body" >

                <form  class="form-horizontal" action="{{route('second_carousel.update',['id'=>$carousel->id])}}" method="post" enctype="multipart/form-data" >
                    {{csrf_field()}}
                    {{method_field('PUT')}}

                    <div id="div_id_username" class="form-group required">
                        <label for="id_username" class="control-label col-md-4  requiredField"> name:<span class="asteriskField">*</span> </label>
                        <div class="controls col-md-8 ">
                            <input class="input-md  textinput textInput form-control" id="id_username" maxlength="30" value="{{$carousel->name}}" name="name" placeholder="Choose your username" style="margin-bottom: 10px" type="text" />
                        </div>
                    </div>
                    <div id="div_id_name" class="form-group required">
                        <label for="role" class="control-label col-md-4  requiredField"> Category:<span class="asteriskField">*</span> </label>
                        <div class="controls col-md-8 ">
                            <select class="input-md textinput textInput form-control" id="id_name" name="category"   style="margin-bottom: 10px" >
                                @foreach($categories as $category)
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            </select>

                        </div>
                    </div>

                    <div id="div_id_image" class="form-group required">
                        <label for="id_email" class="control-label col-md-4  requiredField"> Upload Carousel Picture<span class="asteriskField">*</span> </label>
                        <div class="controls col-md-8 ">
                            <input type="file" name="photo">
                        </div>
                    </div>



                    <div class="aab controls col-md-4 "></div>
                    <div class="controls col-md-8 ">
                        <input type="submit" name="submit" value="Editing Carousel" class="btn btn-primary btn btn-info" id="submit-id-signup" />
                    </div>


                </form>
            </div>

        </div>



    </div>


@endsection

@section('SuperAdmin')
    @if(Auth::user()->role->name=='SuperAdmin' && Auth::user()->status==1)

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