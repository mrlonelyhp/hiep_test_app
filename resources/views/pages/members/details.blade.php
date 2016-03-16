@extends('layouts.master')
@section('title', $member->name)
@section('content')
    <table class="table table-bordered table-hover">
        <thead>
        <th>ID</th>
        <th>Name</th>
        <th>Age</th>
        <th>Address</th>
        <th>Joined Date</th>
        <th>Photo</th>
        </thead>
        <tbody>
            <tr class="member">
                <td>{{ $member->id }}</td>
                <td>{{ $member->name }}</td>
                <td>{{ $member->age }}</td>
                <td>{{ $member->address }}</td>
                <td>{{ $member->joined_at }}</td>
                <th>Photo</th>
            </tr>
        </tbody>
    </table>
@stop