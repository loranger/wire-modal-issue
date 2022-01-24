@props([
    'max' => 3
])
<section>
    <div class="
          relative
          items-center
          w-full
          px-5
          py-12
          mx-auto
          md:px-12
          lg:px-24
          max-w-7xl
        ">
        <div class="grid w-full grid-cols-1 gap-6 mx-auto lg:grid-cols-3">
            @foreach (range(1, $max) as $current)
                <x-product-card :id="$current"></x-product-card>
            @endforeach
        </div>
    </div>
</section>
