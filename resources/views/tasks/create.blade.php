@extends('layouts.app')

@section('title', 'Create Task')

@section('content')
<form action="{{route('tasks.store')}}" method="post">
        @csrf
        <input type="text" name="name" id="Name" placeolder="Nume">
        <input type="text" name="description" id="Description" placeholder="Descriere">

        <button type="submit">Save</button>
    </form>
@endsection
