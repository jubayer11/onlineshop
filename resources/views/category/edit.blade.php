@extends('layouts.dashboard')

@section('content')
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
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
        <div class="row">


        <div class="col-sm-6">

            <div class="panel-body" >
                <h1>Editing Category</h1>

                <form  class="form-horizontal" action="{{route('category.update',['id'=>$category->id])}}" method="post" enctype="multipart/form-data" >
                    {{csrf_field()}}
                    {{method_field('PUT')}}


                        <label for="id_username" > Name: </label>
                        <div>
                            <input class="input-md textInput form-control" value="{{old('name')}}"  maxlength="30" name="name" placeholder="Change your category" style="margin-bottom: 10px" type="text" />
                        </div>



                    <div>
                        <input type="submit" name="submit" value="Submit" class="btn btn-primary btn btn-info" id="submit-id-signup" />
                    </div>

                </form>
            </div>

        </div>



    </div>
    </div>


@endsection

