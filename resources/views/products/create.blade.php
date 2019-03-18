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
            <h3>Create Product</h3>

            <form  class="form-horizontal" action="{{route('product.store')}}" method="post" >
                {{csrf_field()}}

                <div id="div_id_username" class="form-group required">
                    <label for="id_username" class="control-label col-md-4  requiredField"> Name:<span class="asteriskField">*</span> </label>
                    <div class="controls col-md-8 ">
                        <input class="input-md  textinput textInput form-control" id="id_username" maxlength="30" name="name" placeholder="Enter Product Name" style="margin-bottom: 10px" type="text" />
                    </div>
                </div>
                <div id="div_id_email" class="form-group required">
                    <label for="id_email" class="control-label col-md-4  requiredField"> Price:<span class="asteriskField">*</span> </label>
                    <div class="controls col-md-8 ">
                        <input class="input-md emailinput form-control" id="id_email" name="price" placeholder="Enter Product Price" style="margin-bottom: 10px" type="text" />
                    </div>
                </div>




                <div id="div_id_image" class="form-group required">
                    <label for="id_email" class="control-label col-md-4  requiredField"><span class="asteriskField"></span> </label>
                    <div class="controls col-md-8 ">
                        <input type="submit"  value="Create Product">
                    </div>
                </div>


            </form>
        </div>

    </div>


@endsection
