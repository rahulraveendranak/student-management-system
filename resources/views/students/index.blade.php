@extends('layouts.master')

@section('pageTitle', 'Home')

@section('content')
<div class="container">
    @if(Session()->has('message'))
    <p class="alert alert-success">{{ Session()->get('message') }}</p>
    @endif
    <h2>Student Lists</h2>
    <a class="btn btn-primary" href="{{route('students.create')}}">Add New Student</a>
    <table class="table table-striped table-light">
        <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Age</th>
                <th scope="col">Gender</th>
                <th scope="col">Reporting Teacher</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>

            @foreach($students as $student)
            <tr>
                <td>{{ $student->name }}</td>
                <td>{{ $student->age }}</td>
                <td>{{ $student->gender }}</td>
                <td>{{ $student->reported_teacher->name }}</td>
                <td> <a href="{{route('students.edit',$student->id)}}" class="btn btn-primary m-1">Edit</a>
                    <form action="{{ route('students.destroy', $student->id) }}" method="POST">
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <button class="btn btn-danger m-1">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach



        </tbody>
    </table>
    @if($students->isEmpty())
    <p style="text-align: center;">No Data</p>
    @endif
</div>
@endsection