@extends('students.layout')
@section('content')
<div class="row">
  <div class="col-lg-12 margin-tb">
  <div class="pull-left my-3">
    <h2>Edit Product</h2>
</div>
<div class="pull-right">
    <a class="btn btn-primary my-2" href="{{ route('students.index') }}">Back</a>
</div>
</div>
</div>


@if($errors->any())

<div class="alert alert-danger">
    <strong>Whoops!</strong>There were some problems with your input.<br><br>
    <ul>
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{ route('students.update',$student->id) }}" method="POST">
<meta name="csrf-token" content="{{ csrf_token() }}">

@csrf

@method('PUT')

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>StudName:</strong>
            <input type="text" name="studname" value="{{ $student->studname }}" class="form-control" placeholder="Name">
</div>
</div>

<div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
        <strong>College</strong>
        <input type="text" name="college" value="{{ $student->college }}" class="form-control" placeholder="College">
</div>
</div>

<div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
        <strong>Course</strong>
        <input type="text" name="course" value="{{ $student->course }}" class="form-control" placeholder="Course">
</div>
</div>

<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
        <strong>Fee</strong>
        <input type="text" name="fee" value="{{ $student->fee }}" class="form-control" placeholder="Fee">
</div>
</div>

<div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
        <strong>Phone</strong>
        <input type="text" name="phone" value="{{ $student->phone }}" class="form-control" placeholder="Phone">
</div>
</div>

<div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
        <strong>Address</strong>
        <input type="text" name="address" value="{{ $student->address }}" class="form-control" placeholder="Address">
</div>
</div>


<div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <button type="submit" class="btn btn-primary my-5">Submit</button>
</div>
</div>


</form>
@endsection