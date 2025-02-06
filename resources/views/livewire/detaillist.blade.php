<div>
   <h1>{{ $list->title }}</h1>
   <p>{{ $list->description }}</p>

   @foreach ($list->tasks as $task)
    <x-task status="{{ $task->is_done }}" >{{ $task->task }}</x-task>
   @endforeach

</div>
