@extends('layouts.app')

@section('title', 'Create Task')

@section('content')
<form action="{{route('task.store')}}" method="post">
        @csrf
        <input type="text" name="nume" id="Name" placeolder="Nume">
        <input type="text" name="descriere" id="Descriere" placeholder="Descriere">
        <input type="option" name="stare">
        <button type="submit">Save</button>
    </form>
@endsection
