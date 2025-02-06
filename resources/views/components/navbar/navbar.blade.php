<nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
    <div class="container-fluid">
        <button class="btn btn-primary" id="sidebarToggle"><i class="bi bi-command"></i></button>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mt-2 mt-lg-0">

                @if ($title !== 'lists')

                @else
                <li class="nav-item active">    <livewire:create content="create" /> </li>
                @endif

                <x-dropdown>
                    <x-dropdownitem url="profile" >profile</x-dropdownitem>
                    <x-dropdownitem url="halamanlogin" >login</x-dropdownitem>
                    <x-dropdownitem url="halamanregister" >register</x-dropdownitem>
                </x-dropdown>

            </ul>
        </div>
    </div>
</nav>
