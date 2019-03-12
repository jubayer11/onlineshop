@extends('layouts.dashboard')
@section('content')

    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="{{asset('app/css/buttons.css')}}" type="text/css" media="screen">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <div class="container">

        <a href="{{route('super.admin.create')}}">  <button class="punch">Create Admin</button></a>
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">All the Admin</h3>

                    </div>

                    <table class="table table-hover" id="dev-table">
                        <thead>
                        <tr>
                            <th>id</th>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Username</th>
                            <th>Email Adress</th>
                            <th>Role</th>
                            <th>Status</th>
                            <th>Created at</th>
                            <th>Updated at</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if($admins)
                            @foreach($admins as $admin)
                        <tr>

                            <td>{{$admin->id}}</td>
                            <td><img height="50px" src="{{ URL::to('/') }}/uploads/profile/{{$admin->image ? $admin->image: 'no user photo'}}" alt="no photo"></td>
                            <td>{{$admin->name}}</td>
                            <td>{{$admin->user_name}}</td>
                            <td>{{$admin->email}}</td>
                            <td>{{$admin->role ? $admin->role['name']:'user has no role'}}</td>
                            <td>{{$admin->status==1 ? 'Active':'not Active'}}</td>
                            <td>{{$admin->created_at->diffForHumans()}}</td>
                            <td>{{$admin->updated_at->diffForHumans()}}</td>
                            <td><a href="{{route('super.admin.edit',$admin->id)}}"><button class="btn btn-xs btn-outline-warning">Edit</button></a> </td>

                            <td>
                                <form action="{{route('admin.destroy',['id'=>$admin->id])}}" method="post">
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
    @if($role=='SuperAdmin')

        <li>
            <a href="{{route('super.admin.index')}}">
                <i class="pe-7s-users"></i>
                <p>ALL ADMIN</p>
            </a>
        </li>
    @endif
@endsection