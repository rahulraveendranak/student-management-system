@extends('layouts.master')

@section('pageTitle', 'Home')

@section('content')
<div class="container">
  @if(Session()->has('message'))
  <p class="alert alert-success">{{ Session()->get('message') }}</p>
  @endif
  <h2>Student Mark Lists</h2>
  <a class="btn btn-primary" href="{{route('studentMark.create')}}">Add New Student Marks</a>
  <table class="table table-striped table-light">
    <thead>
      <tr>
        <th scope="col">Name</th>
        <th scope="col">Maths</th>
        <th scope="col">Science</th>
        <th scope="col">History</th>
        <th scope="col">Term</th>
        <th scope="col">Total Marks</th>
        <th scope="col">Created On</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>

      @foreach($studentMarks as $studentMark)
      <tr>
        <td>{{ $studentMark->student->name }}</td>
        <td>{{ $studentMark->maths }}</td>
        <td>{{ $studentMark->science }}</td>
        <td>{{ $studentMark->history}}</td>
        <td>{{ $studentMark->term}}</td>
        <td>{{ $studentMark->maths + $studentMark->science + $studentMark->history }}</td>
        <td>{{ $studentMark->created_at->format('M d, Y h:i A')}}</td>
        <td> <a href="{{route('studentMark.edit',$studentMark->id)}}" class="btn btn-primary m-1">Edit</a>
          <form action="{{ route('studentMark.destroy', $studentMark->id) }}" method="POST">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <button class="btn btn-danger m-1">Delete</button>
          </form>
        </td>
      </tr>
      @endforeach



    </tbody>
  </table>
  @if($studentMarks->isEmpty())
  <p style="text-align: center;">No Data</p>
  @endif
</div>
@endsection