<div class="form-check border rounded-2 p-3 d-flex justify-between">
    <div class="d-flex ">
        <input class="form-check-input ms-1" type="checkbox" value="" id="flexCheckDefault" {{ $task->is_done == 'done' ? 'checked' : '' }} >
        <label class="form-check-label ms-2" for="flexCheckDefault">
            {{ $task->task }}
        </label>
    </div>

    <button wire:click="delete" onclick="return confirm('Yakin ingin menghapus?')" class="btn btn-success mx-2">
        <i class="bi bi-x-lg mx-5"></i>
    </button>

  </div>
