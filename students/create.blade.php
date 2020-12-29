@extends('base')
@section('main')
<div class="row">
 <div class="col-sm-8 offset-sm-2">
  <br />
    <h3 class="display-5 text-center">Add New Student Details</h3>
  <div>
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div>
      <br />
    @endif
      <form method="post" action="{{ route('students.store') }}">
          @csrf
          <div class="form-group">    
              <label for="name">Name</label>
              <input type="text" class="form-control" name="name"/>
          </div>
          <div class="form-group">
              <label for="matric_no">Matric Number</label>
              <input type="text" class="form-control" name="matric_no"/>
          </div>
          <div class="form-group">
              <label for="gender">Gender</label>
              <input type="text" class="form-control" name="gender"/>
          </div>
          <div class="form-group">
              <label for="date_of_birth">Date of Birth</label>
              <input type="text" class="form-control" name="date_of_birth"/>
          </div>
          <div class="form-group">
              <label for="citizenship">Citizenship</label>
              <input type="text" class="form-control" name="citizenship"/>
          </div>
          <div class="form-group">
              <label for="marital_status">Marital Status</label>
              <input type="text" class="form-control" name="marital_status"/>
          </div>
          <div class="form-group">
              <label for="religion">Religion</label>
              <input type="text" class="form-control" name="religion"/>
          </div>
          <div class="form-group">
              <label for="active_status">Active Status</label>
              <input type="text" class="form-control" name="active_status"/>
          </div>
          <div class="form-group">
              <label for="year_of_study">Year of Study</label>
              <input type="text" class="form-control" name="year_of_study"/>
          </div>
          <div class="form-group">
              <label for="id_no">Identification Card Number or Passport Number</label>
              <input type="text" class="form-control" name="id_no"/>
          </div>
          <div class="form-group">
              <label for="email">Email</label>
              <input type="text" class="form-control" name="email"/>
          </div>
          <div class="row justify-content-center">
          <a href="{{ route('students.index')}}" class="btn btn-primary">Return</a>&nbsp;&nbsp;                        
          <button type="submit" class="btn btn-primary text-center">Save Details</button>
          </div>
      </form>
  </div>
</div>
</div>
@endsection