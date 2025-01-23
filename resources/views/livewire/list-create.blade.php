<div>
    <div class="card text-dark w-50 mx-auto">
        <div class="card-body">
            <form wire:submit.prevent="store" action="">
                <div class="mb-3">
                    <input type="text" id="title" class="fs-4 form-control border-0 shadow-none" placeholder="title..." wire:model="title">

                </div>
                <div class="mb-3">
                    <input type="text" id="description" class="form-control border-0 shadow-none" wire:model="description" placeholder="description..." >
                </div>
                <div class="mb-3">

                </div>

                <div class="d-grid">
                    <button class="btn btn-dark shadow-sm">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
