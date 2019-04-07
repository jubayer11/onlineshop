@extends('layouts.dashboard')
@section('content')

    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="{{asset('app/css/buttons.css')}}" type="text/css" media="screen">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <div class="container">

        <a href="{{route('second_carousel.create')}}">  <button class="punch">Create Second Carousel</button></a>
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">All the Second Carousel</h3>

                    </div>

                    <table class="table table-hover" id="dev-table">
                        <thead>
                        <tr>
                            <th>id</th>
                            <th>Photo</th>
                            <th>name</th>
                            <th>Category</th>
                            <th>Created at</th>
                            <th>Updated at</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if($carousel)
                            @foreach($carousel as $car)
                                <tr>

                                    <td>{{$car->id}}</td>
                                    <td><img height="50px" src="{{ URL::to('/') }}/uploads/carousel/{{$car->photo ? $car->photo: 'no carousel photo'}}" alt="no photo"></td>
                                    <td>{{$car->name}}</td>
                                    <td>{{$car->categories ? $car->categories['name']:'user has no role'}}</td>

                                    <td>{{$car->created_at->diffForHumans()}}</td>
                                    <td>{{$car->updated_at->diffForHumans()}}</td>
                                    <td><a href="{{route('second_carousel.edit',$car->id)}}"><button class="btn btn-xs btn-outline-warning">Edit</button></a> </td>

                                    <td>
                                        <form action="{{route('second_carousel.destroy',['id'=>$car->id])}}" method="post">
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