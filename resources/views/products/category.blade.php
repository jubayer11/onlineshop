@extends('layouts.dashboard')
@section('content')

    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="{{asset('app/css/buttons.css')}}" type="text/css" media="screen">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <div class="container">


        <div class="row">
            <div class="col-sm-4">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">Product Category</h3>

                    </div>

                    <table class="table table-hover" id="dev-table">
                        <thead>
                        <tr>

                            <th>Name</th>
                            <th>Created At</th>
                            <th>Updated At</th>
                            <th>delete</th>


                        </tr>
                        </thead>
                        <tbody>

                            @foreach($product->categories as $category)
                                <tr>
                                    <td>{{$category->name}}</td>
                                    <td>{{$category->created_at->diffForHumans()}}</td>
                                    <td>{{$category->updated_at->diffForHumans()}}</td>
                                    <td>
                                        <form action="{{route('product.category.delete',['category_id'=>$category->id,'product_id'=>$product->id])}}" method="post" enctype="multipart/form-data" >

                                            {{csrf_field()}}



                                            <button class="btn btn-xs btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach



                        </tbody>
                    </table>


                </div>
            </div>

        </div>

    </div>

@endsection
