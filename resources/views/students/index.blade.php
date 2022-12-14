@extends('students.layout')
@section('content')

<div class="pull-left my-3">

<h2>Student Details</h2>
</div>

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-right">
            <a class="btn btn-success my-1" href="{{route('students.create') }}">Create New Student</a>
</div>
</div>
</div>

@if($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
    </div>

    @endif
    
    <table class="table table-bordered">
<tr>
    <th >No</th>
    <th>Name</th>
    <th>College</th>
    <th>Course</th>
    <th>Fee</th>
    <th>Phone</th>
    <th>Address</th>

    <th width="240px">Operation</th>
</tr>

@foreach ($students as $student)

<tr>
    <td>{{ ++$i }}</td>
    <td>{{ $student->studname }}</td>
    <td>{{ $student->college }}</td>
    <td>{{ $student->course }}</td>
    <td>{{ $student->fee }}</td>
    <td>{{ $student->phone }}</td>
    <td>{{ $student->address }}</td>
    
    <td>
        <form action="{{route('students.destroy',$student->id) }}" method="POST">

        <!-- <a class="btn btn-info" href="{{route('students.show',$student->id) }}">Show</a> -->

        <a class="btn btn-primary" href="{{route('students.edit',$student->id) }}"> Edit </a>
        
        @csrf
        @method('DELETE')

        <button type="submit" class="btn btn-danger">Delete</button>
</form>
</td>
</tr>

@endforeach

</table>

        
