@extends('layouts.app')

@section('title', 'Tasks')

@section('content')
    <div class="row">
        <h4>Tasks</h4>
    </div>
    <div class="row">
        <a href="{{route('task.create')}}" class="btn btn-sm btn-dark">Add</a>
    </div>
    <div class="row">
        <div class="col-md-10">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nume</th>
                        <th>Descriere</th>
                        <th>Stare</th>
                        <th>Options</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($tasks as $task)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $task->nume }}</td>
                            <td>{{ $task->descriere }}</td>
                            <td>{{ $task->stare }}</td>
                            <td>
                                <a href=""  class="btn btn-sm btn-warning">Edit</a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5">No tasks</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection