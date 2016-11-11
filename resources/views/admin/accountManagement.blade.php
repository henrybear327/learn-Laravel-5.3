@extends('layouts.app')

@section('content')

<div class="container">
    <h1 class="text-center">Super Account Number Management</h1>
    <table class="table table-condensed">
        <thead>
        <tr>
            <th>Name</th>
            <th>User Type</th>
            <th>ID Number</th>
            <th>Password</th>
            <th>E-mail</th>
            <th></th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        <td>黃資閔</td>
        <td>Student</td>
        <td>403410082</td>
        <td>appleteu1028</td>
        <td>teu103u@gmail.com</td>
        <td><button type="button" class="btn btn-primary btn-sm">edit</button></td>
        <td><button type="button" class="btn btn-primary btn-sm">delete</button></td>
        </tbody>
    </table>
</div>
@endsection
