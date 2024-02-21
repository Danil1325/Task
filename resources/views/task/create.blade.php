@extends('layouts.app')

@section('title', 'Create Task')

@section('content')
<form action="{{route('task.store')}}" method="post">
        @csrf
        <input type="text" name="nume" id="Name" placeholder="Nume">
        <input type="text" name="descriere" id="Descriere" placeholder="Descriere">
        <select class="form-control" name="stare" id="stare">
         <option value="În curs">În curs</option>
         <option value="Finalizată">Finalizată</option>
         <option value="Anulată">Anulată</option>
        </select>
        <button type="submit">Save</button>
    </form>
@endsection
