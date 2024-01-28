@extends('layout.master')
@section('title','Subject')
@section('title','active')

@section('content')    
  <div class="col-md-8 order-md-1">
    <h4 class="mb-3">Edit {{$subject->code}}</h4>
    @if ($errors->any())
    <ul class="alert alert-danger">
        @foreach($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
    </ul>
    @endif
    <form class="needs-validation" method="POST" action="{{route("subject.update",$subject->id)}}" >
      {{method_field('PUT')}}
      {{csrf_field()}}
      <div class="mb-3">
        <label for="code">Code</label>
        <div class="input-group">
          <input type="text" name="code" value="{{$subject->code}}" class="form-control" id="code">
        </div>
      </div>

      <div class="mb-3">
        <label for="name">Name</label>
        <input type="text" name="name" value="{{$subject->name}}" class="form-control" id="name" >
      </div>

      <div class="mb-3">
        <label for="note">Note</label>
        <textarea name="note" class="form-control" id="note" rows="3">{{$subject->note}}</textarea>
        </div>
        <button class="btn btn-primary btn-sm btn-lg btn-block" type="submit">Submit</button>
    </form>
  </div>
@endsection