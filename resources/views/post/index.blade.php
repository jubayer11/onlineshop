@extends('layouts.dashboard')
@section('content')

    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="{{asset('app/css/buttons.css')}}" type="text/css" media="screen">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <div class="container">

        <a href="{{route('post.create')}}">  <button class="punch">Create Post</button></a>
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">All the Post</h3>

                    </div>

                    <table class="table table-hover" id="dev-table">
                        <thead>
                        <tr>
                            <th>id</th>
                            <th>Admin_id</th>
                            <th>Image</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Tag</th>
                            <th>is_active</th>
                            <th>Created at</th>
                            <th>Updated at</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if($posts)
                            @foreach($posts as $post)
                                <tr>
                                    <td>{{$post->id}}</td>
                                    <td>{{$post->admin_id}}</td>
                                    <td><img height="50px" src="{{ URL::to('/') }}/uploads/post/{{$post->image ? $post->image->name: 'no post photo'}}" alt="no photo"></td>
                                    <td>{{$post->title}}</td>
                                    <td>{{$post->body}}</td>
                                    <td><a href="{{route('post.tag',$post->id)}}"><button class="btn btn-xs btn-info">View Tag</button></a> </td>
                                    <td>{{$post->is_active}}</td>
                                    <td>{{$post->created_at->diffForHumans()}}</td>
                                    <td>{{$post->updated_at->diffForHumans()}}</td>
                                    <td><a href="{{route('post.edit',$post->id)}}"><button class="btn btn-xs btn-primary">Edit</button></a> </td>

                                    <td>
                                        <form action="{{route('post.destroy',['id'=>$post->id])}}" method="post" enctype="multipart/form-data" >
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