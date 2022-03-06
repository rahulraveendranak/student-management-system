@extends('layouts.master')

@section('pageTitle', 'Create A Student')

@section('content')



<div class="container">
  <h2>Student Mark Add</h2>
  <a class="btn btn-primary" href="{{route('studentMark.index')}}">Back</a>
  <div class="card">
    <div class="card-body">

      <form method="POST" action="{{route('studentMark.store')}}">
        {{ csrf_field() }}

        <div class="form-group">
          <div class="form-group col-md-6">
            <select class="form-control" name="student_id">

              <option value="">Select a Student</option>

              @foreach ($students as $key => $value)
              <option value="{{ $key }}">
                {{ $value }}
              </option>
              @endforeach
            </select>
            @if ($errors->has('student_id'))
            <span class="text-danger">{{ $errors->first('student_id') }}</span>
            @endif
          </div>
        </div>



        <div class="form-group">
          <div class="form-group col-md-6">
            <label for="inputMaths">Maths</label>
            <input type="number" name="maths" placeholder="Mark in Maths" class="form-control" value="{{old('maths')}}">
            @if ($errors->has('maths'))
            <span class="text-danger">{{ $errors->first('maths') }}</span>
            @endif
          </div>
        </div>

        <div class="form-group">
          <div class="form-group col-md-6">
            <label for="inputScience">Science</label>
            <input type="number" name="science" placeholder="Mark in Science" class="form-control" value="{{old('science')}}">
            @if ($errors->has('science'))
            <span class="text-danger">{{ $errors->first('science') }}</span>
            @endif
          </div>
        </div>

        <div class="form-group">
          <div class="form-group col-md-6">
            <label for="inputScience">History</label>
            <input type="number" name="history" placeholder="Mark in History" class="form-control" value="{{old('history')}}">
            @if ($errors->has('history'))
            <span class="text-danger">{{ $errors->first('history') }}</span>
            @endif
          </div>
        </div>

        <div class="form-group">
          <div class="form-group col-md-6">
            <label for="inputAge">Term</label>
            <select class="form-control" name="term">
              <option value="">Select a Term</option>
              <option value="One">One</option>
              <option value="Two">Two</option>

            </select>
            @if ($errors->has('term'))
            <span class="text-danger">{{ $errors->first('term') }}</span>
            @endif
          </div>
        </div>
    </div>
    <div class="form-group">
      <div class="form-group col-md-2">
        <button class="btn btn-success" type="submit">Add</button>
      </div>
    </div>
  </div>

  </form>

</div>
</div>
</div>

@endsection