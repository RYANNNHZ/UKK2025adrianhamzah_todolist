<div>
    <div>
        <form wire:submit.prevent="createTask" wire:key="create-form" method="post" class="d-md-flex d-block align-items-center">
            <input type="text" wire:model='task' placeholder="add task here"
            class="my-2 w-100 w-md-50 mx-2 h-50 form form-control">
            <button type="submit" class="btn btn-primary my-3"><i class="bi bi-plus-circle"></i></button>
        </form>

    </div>
   <h1>{{ $list->title }}</h1>
   <p>{{ $list->description }}</p>
   <div wire:poll>
    @foreach ($list->tasks as $task)
        <livewire:task-list :task="$task" wire:key="task-{{ $task->id }}" />
    @endforeach
</div>
</div>
