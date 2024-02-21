@extends('layouts.app')

@section('title', 'Create Task')

@section('content')
<form action="{{route('tasks.store')}}" method="post">
        @csrf
        <input type="text" name="nume" id="Name" placeolder="Nume">
        <input type="text" name="descriere" id="Descriere" placeholder="Descriere">
        
        <button type="submit">Save</button>
    </form>
@endsection
