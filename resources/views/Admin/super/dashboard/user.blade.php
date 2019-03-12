@extends('layouts.dashboard')

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
                <div class="card card-user">
                    <div class="image">
                        <img src="https://ununsplash.imgix.net/photo-1431578500526-4d9613015464?fit=crop&fm=jpg&h=400&q=75&w=400" alt="..."/>
                    </div>
                    <div class="content">
                        <div class="author">
                            <a href="#">
                                @if($admin->image)

                                <img class="avatar border-gray" src="{{ URL::to('/') }}/uploads/profile/{{$admin->image}}" alt="..."/>
                                    @else
                                    <img class="avatar border-gray" src="{{asset('/app/img/abc.jpg')}}" alt="..."/>

                                @endif




                                <h4 class="title">{{$admin->name}}<br />
                                    <small>{{$admin->role->name}}</small>
                                </h4>
                            </a>
                        </div>
                        <p class="description text-center"> {{$status}}
                        </p>
                    </div>
                    <hr>
                    <div class="text-center">
                        <button href="#" class="btn btn-simple"><i class="fa fa-facebook-square"></i></button>
                        <button href="#" class="btn btn-simple"><i class="fa fa-twitter"></i></button>
                        <button href="#" class="btn btn-simple"><i class="fa fa-google-plus-square"></i></button>

                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Profile</h4>
                    </div>
                    <div class="content">

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Company (disabled)</label>
                                        <input type="text" class="form-control" disabled placeholder="Company" value="Online shop.">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Username </label>
                                        <input type="text" class="form-control" disabled placeholder="Username" value="{{$admin->user_name}}">
                                    </div>
                                </div>

                            </div>

                            <div class="row">

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" class="form-control" disabled placeholder="Company" value="{{$admin->name}}">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Status</label>
                                        <input type="text" class="form-control" disabled placeholder="Last Name" value="{{$status}}">

                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Role</label>
                                        <input type="text" class="form-control" disabled placeholder="Home Address" value="{{$admin->role->name}}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email address</label>
                                        <input type="email" class="form-control" disabled placeholder="Email" value="{{$admin->email}}">
                                    </div>
                                </div>

                            </div>

                        <a href="{{route('admin.profile.update',$admin->id)}}"> <button type="submit" class="btn btn-info btn-fill pull-right">Update Profile</button></a>


                            <div class="clearfix"></div>



                    </div>
                </div>
            </div>


        </div>
    </div>
@endsection
