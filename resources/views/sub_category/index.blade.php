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
            <div class="col-sm-6">

            <h3>Create Category</h3>




            <div class="panel-body" >

                <form  class="form-horizontal" action="{{route('sub_category.store')}}" method="post" >
                    {{csrf_field()}}

                    <div id="div_id_username" class="form-group required">
                        <label for="id_username" class="control-label col-md-4  requiredField"> name<span class="asteriskField">*</span> </label>
                        <div class="controls col-md-8 ">
                            <input class="input-md  textinput textInput form-control" id="id_username" maxlength="30" name="name" placeholder="create a sub_category" style="margin-bottom: 10px" type="text" />
                        </div>
                    </div>

                    <div class="aab controls col-md-4 "></div>
                    <div class="controls col-md-8 ">
                        <input   type="submit" value="Create sub_category" name="submit">
                    </div>


                </form>
            </div>

        </div>
 <div class="col-sm-6">

         <div class="panel panel-primary">
             <div class="panel-heading">
                 <h3 class="panel-title">All the sub_category</h3>

             </div>

             <table class="table table-hover" id="dev-table">
                 <thead>
                 <tr>
                     <th>id</th>
                     <th>name</th>
                     <th>created_at</th>
                     <th>updated_at</th>
                     <th>edit</th>
                     <th>delete</th>

                 </tr>
                 </thead>
                 <tbody>
                 @if($sub_categories)
                     @foreach($sub_categories as $sub_category)
                         <tr>

                             <td>{{$sub_category->id}}</td>

                             <td>{{$sub_category->name}}</td>

                             <td>{{$sub_category->created_at->diffForHumans()}}</td>
                             <td>{{$sub_category->updated_at->diffForHumans()}}</td>
                             <td><a href="{{route('sub_category.edit',$sub_category->id)}}"><button class="btn btn-xs btn-primary">Edit</button></a> </td>

                             <td>
                                 <form action="{{route('sub_category.destroy',['id'=>$sub_category->id])}}" method="post">
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


    </div>
@stop
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