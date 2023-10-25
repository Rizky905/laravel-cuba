<div>
    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}

    <div style="background: #7a7497">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-sm-10">
                <div class="content text-center">
                    <div class="mb-5 mt-3">
                        <h1 class="fadeIn" style="color: white">List Web</h1>
                        <form class="mt-3">
                            <input class="form-control" wire:model="search" type="search" placeholder="Search"
                                aria-label="Search">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="section-space feature-section pt-0 mt-4">
        <div class="container">
            <div class="row">

                @foreach ($data as $item)
                    <a class="col-xxl-3 col-sm-4 mt-3" href="{{ $item->url }}" target="_blank">
                        <div class="feature-box common-card bg-feature-1">
                            <div>
                                <h5>{{ $item->name }}</h5>
                                <p class="mb-0 mt-3 f-light">
                                    {{ $item->description }}
                                </p>
                            </div>
                            <div class="text-end mt-5">
                                <span>{{ $item->pic }}</span>
                                <span class="font-primary">{{ $item->pic_contact }}</span>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
</div>
</section>
</div>
