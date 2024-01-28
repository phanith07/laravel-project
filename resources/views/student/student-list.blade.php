@extends('layout.master')
@section('student','active')
@section('title','Student')

@section('content')
<div class="content-title">
    <h3>Student</h3>
    <div>
        <button class="btn btn-primary btn-sm" type="submit" style="">
            <span data-feather="plus"></span>
            Add
        </button>
    </div>
</div>

<div class="table-responsive">
  <table class="table table-striped table-sm">
    <thead>
        <tr>
          <th>#</th>
          <th>fullname</th>
          <th>Gender</th>
          <th>Date of Birth</th>
          <th>Phone</th>
          <th>Subject</th>
          <th width="140px"></th>
        </tr>
      </thead>
      <tbody>
        <td>1</td>
        <td>Lola</td>
        <td>Female</td>
        <td>2000-05-22</td>
        <td>095505559</td>
        <td>IT</td>
        <td class="btn-action">
            <a href="#">
                <span class="text-primary" data-feather='edit'></span>Edit
            </a>
            <a href="#">
            <span class="text-danger" data-feather='trash'></span>Delete
            </a>
        </td>
      </tbody>
  </table>
</div>
@endsection