@extends('layouts.app')

@section('title', 'Add Task')

@section('content')
  <form action="{{ route('tasks.store') }}" method="POST">
    @csrf
    <div>
      <label for="title">
        Title
      </label>
      <input type="text" name="title" id="title">
    </div> 

    <div>
      <label for="description">
        Description
      </label>
      <input type="text" name="description" id="description">
    </div>

    <div>
      <label for="long_description">
        Long Description
      </label>
      <textarea name="long_description" id="long_description" rows="10"></textarea>
    </div>

    <div>
      <button type="submit">Add Task</button>
    </div>
  </form>
@endsection