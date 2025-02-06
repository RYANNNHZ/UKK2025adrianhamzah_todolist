<div>

            <div class="row my-3" >

                @if (session()->has('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                @forelse ($lists as $list)
                <a href="/detaillist/{{ $list->id  }}" wire:navigate.hover style="text-decoration: none" class="">
                    <div class="col-12 col-lg-4 col-md-3 my-2" >
                        <div class="card text-dark">
                            <div class="card-body">
                                <h4 class="card-title">{{ $list->title }}</h4>
                                <p class="card-text">{{ $list->description }}</p>
                            </div>
                        </div>
                    </div>
                @empty
                    <h1 class="fs-1 text-center">don't forget to list ur task 🙌</h1>
                @endforelse
            </a>
            </div>
</div>
