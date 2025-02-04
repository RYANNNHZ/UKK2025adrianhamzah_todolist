<div>
<button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">{{ $content }}</button>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form wire:submit.prevent="store" wire:key="create-form" action="">
            <div class="mb-3">
                <input type="text" id="title" class="fs-4 form-control border-0 shadow-none" placeholder="title..." wire:model.defer="title" wire:ignore>

            </div>
            <div class="mb-3">
                <input type="text" id="description" class="form-control border-0 shadow-none" wire:model.defer="description" placeholder="description..." wire:ignore>
            </div>
            <div class="mb-3">

            </div>
            {{-- <livewire:tasks /> --}}
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn" data-bs-dismiss="modal" aria-label="Close"><i class="bi bi-check" style="width: 1.5em"></i></button>
        </div>
    </form>

    </div>
  </div>
</div>
</div>
