<h1>
  The List of Tasks
</h1>

<div>
    @forelse ($tasks as $task)
      <div>
        <a href="{{ route('tasks.show', ['id' => $task->id]) }}">{{ $task->title }}</a>  
      </div>
    @empty
      <p>There are no tasks!</p>
    @endforelse
</div>