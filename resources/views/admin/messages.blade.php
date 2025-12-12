@extends('layouts.app')

@section('content')
<h1>All Messages</h1>

<table class="table table-striped">
    <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Message</th>
            <th>Sent At</th>
        </tr>
    </thead>
    <tbody>
        @foreach($messages as $msg)
        <tr>
            <td>{{ $msg->name }}</td>
            <td>{{ $msg->email }}</td>
            <td>{{ $msg->message }}</td>
            <td>{{ $msg->created_at }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
