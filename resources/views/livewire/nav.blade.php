<nav class="nav justify-content-center">
    <a class="nav-link {{ request()->is('tasks') ? 'active' : '' }}" href="javascript:void(0);" wire:click="goToTasks">Tasks</a>
    <a class="nav-link {{ request()->is('lists') ? 'active' : '' }}" href="javascript:void(0);" wire:click="goToLists">Lists</a>
</nav>


@push('scripts')
<script>
    document.addEventListener('livewire:load', function () {
        // Tangkap event 'navigate' yang dikirim melalui dispatch
        Livewire.on('navigate', (url) => {
            window.history.pushState({}, '', url); // Ubah URL tanpa reload
            Livewire.emit('loadPage', url); // Emit event untuk memuat data sesuai URL
        });
    });
</script>
@endpush


@push('scripts')
<script>
    document.addEventListener('livewire:load', function () {
        // Tangkap event 'navigate' yang dikirim melalui dispatch
        Livewire.on('navigate', (url) => {
            window.history.pushState({}, '', url); // Ubah URL tanpa reload
            Livewire.emit('loadPage', url); // Emit event untuk memuat data sesuai URL
        });
    });
</script>
@endpush
