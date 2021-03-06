<div class="p-6">
    <img class="
                object-cover object-center
                w-full
                mb-8
                lg:h-48
                md:h-36
                rounded-xl
              " src="https://d33wubrfki0l68.cloudfront.net/89984e38d378089d8d7b47935660ae475a226df7/f6d8b/images/placeholders/sqaurecard.svg" alt="blog">
    <h1 class="
                mx-auto
                mb-8
                text-2xl
                font-semibold
                leading-none
                tracking-tighter
                text-neutral-600
                lg:text-3xl
              "> Product #{{ $id }} </h1>
    <p class="mx-auto text-base leading-relaxed text-gray-500"> Free and Premium themes, UI Kit's, templates and landing pages built with Tailwind CSS, HTML &amp; Next.js. </p>
    <div class="mt-4">
        <button
            class="
              inline-flex
              items-center
              mt-4
              font-semibold
              text-blue-600
              lg:mb-0
              hover:text-neutral-600
            "
            onclick="Livewire.emit('openModal', 'add-to-cart', {{ json_encode(["product" => $id]) }})"
            title="read more"> Add product {{ $id }} to cart » </button>
    </div>
</div>
