@extends('layouts.master')

@section('content')
    <div class="container-fluid col-xs-12 col-md-10 col-md-offset-1 ">
        <h1>Contact List</h1>

        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Phone</th>
                <th scope="col">City</th>
                <th scope="col">Zip</th>
            </tr>
            </thead>
            <tbody>
            @foreach($contacts as $contact)
                <tr>
                    <td>{{ $contact->Last_Name }}, {{$contact->First_Name}}</td>
                    <td>{{ $contact->Mobile_Phone }}</td>
                    <td>{{ $contact->household->City }}</td>
                    <td>{{ $contact->household->Zip }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>

    </div>
@endsection
