@extends('layouts.master')

@section('pageTitle', 'Edit A Student')

@section('content')


<div class="container">
  <h2>Student Edit</h2>
  <a class="btn btn-primary" href="{{route('students.index')}}">Back</a>
  <div class="card">
    <div class="card-body">

      <form method="POST" action="{{route('students.update',$student->id)}}">
        {{ csrf_field() }}
        {!! method_field('PUT') !!}

        <div class="form-group">
          <div class="form-group col-md-6">
            <label for="inputusername">Name</label>
            <input type="text" name="name" class="form-control" id="name" placeholder="Name" value="{{ $student->name }}">
            @if ($errors->has('name'))
            <span class="text-danger">{{ $errors->first('name') }}</span>
            @endif
          </div>
        </div>
        <div class="form-group">
          <div class="form-group col-md-6">
            <label for="inputAge">Age</label>
            <input type="number" name="age" placeholder="age" class="form-control" value="{{ $student->age }}">
            @if ($errors->has('age'))
            <span class="text-danger">{{ $errors->first('age') }}</span>
            @endif
          </div>
        </div>
        <div class="form-group">
          <div class="form-group col-md-6">
            <label for="gender">Gender</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="gender" value="female" {{ ($student->gender=="female")? "checked" : "" }}>Female<br>
              <input class="form-check-input" type="radio" name="gender" value="male" {{ ($student->gender=="male")? "checked" : "" }}>Male<br>
              <input class="form-check-input" type="radio" name="gender" value="other" {{ ($student->gender=="other")? "checked" : "" }}>Other
            </div>
            @if ($errors->has('gender'))
            <span class="text-danger">{{ $errors->first('gender') }}</span>
            @endif
          </div>
        </div>
        <div class="form-group">
          <div class="form-group col-md-6">
            <select class="form-control" name="reporting_teacher_id">

              <option value="">Select a Teacher</option>

              @foreach ($teachers as $key => $value)
              <option value="{{ $key }}" {{ ($student->reporting_teacher_id== $key)? "selected" : "" }}>
                {{ $value }}
              </option>
              @endforeach
            </select>
            @if ($errors->has('reporting_teacher_id'))
            <span class="text-danger">{{ $errors->first('reporting_teacher_id') }}</span>
            @endif
          </div>
        </div>
    </div>
    <div class="form-group">
      <div class="form-group col-md-2">
        <button class="btn btn-success" type="submit">Update</button>
      </div>
    </div>
  </div>

  </form>

</div>
</div>
</div>

@endsection