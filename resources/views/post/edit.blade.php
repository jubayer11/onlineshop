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
            <h3>Edit Post</h3>

            <form  class="form-horizontal" action="{{route('post.update',['id'=>$post->id])}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                {{method_field('PUT')}}

                <div id="div_id_username" class="form-group required">
                    <label for="id_username" class="control-label col-md-4  requiredField"> Title:<span class="asteriskField">*</span> </label>
                    <div class="controls col-md-8 ">
                        <input class="input-md  textinput textInput form-control" value="{{$post->title}}" maxlength="30" name="title" placeholder="Enter post title" style="margin-bottom: 10px" type="text" />
                    </div>
                </div>
                <div id="div_id_email" class="form-group required">
                    <label for="id_email" class="control-label col-md-4  requiredField"> Description:<span class="asteriskField">*</span> </label>
                    <div class="controls col-md-8 ">
                        <input class="input-md emailinput form-control" value="{{$post->body}}" name="body" placeholder="Enter post Description" style="margin-bottom: 10px" type="text" />
                    </div>
                </div>
                <div id="div_id_gender" class="form-group required">
                    <label for="id_gender"  class="control-label col-md-4  requiredField"> Status<span class="asteriskField">*</span> </label>
                    <div class="controls col-md-8 "  style="margin-bottom: 10px">
                        <label class="radio-inline"> <input type="radio" name="is_active" id="id_gender_1" value=0  style="margin-bottom: 10px">Non-Active</label>
                        <label class="radio-inline"> <input type="radio" name="is_active" id="id_gender_2" value=1  style="margin-bottom: 10px">Active </label>
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
                <div id="div_id_image" class="form-group required">
                    <label for="id_email" class="control-label col-md-4  requiredField"> Upload post Picture<span class="asteriskField">*</span> </label>
                    <div class="controls col-md-8 ">
                        <input type="file" name="image">
                    </div>
                </div>


                    <label for="id_email" class="control-label col-md-4  requiredField"><span class="asteriskField"></span> </label>
                    <div class="controls col-md-8 ">
                       <button class="btn-primary" type="submit"> Edit post </button>
                    </div>



            </form>
        </div>

    </div>


@endsection
