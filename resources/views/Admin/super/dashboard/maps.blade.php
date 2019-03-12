@extends('layouts.dashboard')

@section('content')
    <div id="map"></div>

@endsection
@section('notification')

    <script>
        $().ready(function(){
            demo.initGoogleMaps();
        });
    </script>
@endsection