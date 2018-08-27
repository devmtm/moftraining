<!-- Stored in resources/views/child.blade.php -->

@extends('layout')


@section('content')
    Emp NAme Is : <p>{{$employee->getAttribute('emp_name')}}</p>
@endsection