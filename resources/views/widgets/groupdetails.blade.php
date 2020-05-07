@extends('layouts.master')

@section('content')
    <div class="container-fluid col-xs-12 col-md-10 col-md-offset-1 ">
        <h1>Group Finder</h1>

        <mpp-user-login></mpp-user-login>

        <mpp-group-details returnurl="/groupfinder"></mpp-group-details>


    </div>
@endsection
