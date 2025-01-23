<div>
    <div class="container-fluid">
        <div class="col-md-4">
            <div class="card border-0">
                <div class="card-header bg-white py-3">
                    <h6 class="mb-0">Form Create</h6>
                </div>
                <div class="card-body">
                    <livewire:list-create />
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row my-3">

                @if (session()->has('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                @forelse ($lists as $list)
                    <div class="col-12 col-lg-4 col-md-3 my-2">
                        <div class="card text-dark">
                            <div class="card-body">
                                <h4 class="card-title">{{ $list->title }}</h4>
                                <p class="card-text">{{ $list->description }}</p>
                                <div class="list-group">
                                    @foreach ($list->tasks as $item)
                                        <label class="list-group-item">
                                            <input class="form-check-input me-1" type="checkbox" value="" />
                                            {{ $item->task }}
                                            <!-- Pastikan field ini sesuai dengan kolom di database -->
                                        </label>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <h1 class="fs-1 text-center">don't forget to list ur task 🙌</h1>
                @endforelse
            </div>
        </div>
    </div>

</div>
