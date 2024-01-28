@extends('layout.master')
@section('title','Subject')
@section('title','active')

@section('content')    
  <div class="col-md-8 order-md-1">
    <h4 class="mb-3">Add</h4>
    @if ($errors->any())
    <ul class="alert alert-danger">
        @foreach($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
    </ul>
    @endif
    <form class="needs-validation" method="POST" action="{{route('subject.create')}}">
        {{csrf_field()}}
      <div class="mb-3">
        <label for="code">Code</label>
        <div class="input-group">
          <input type="text" name="code" class="form-control" id="code" >
          {{-- <div class="invalid-feedback" style="width: 100%;">
           Code is required.
          </div> --}}
        </div>
      </div>

      <div class="mb-3">
        <label for="name">Name</label>
        <input type="text" name="name" class="form-control" id="name" >
        {{-- <div class="invalid-feedback">
         Name is required.

        </div> --}}
      </div>

      <div class="mb-3">
        <label for="note">Note</label>
        <textarea class="form-control" name="note" id="note" rows="3"></textarea>
        </div>
      <button class="btn btn-primary btn-sm btn-lg btn-block" type="submit">Submit</button>
    </form>
  </div>
@endsection