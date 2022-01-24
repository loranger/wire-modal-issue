<div class="max-w-4xl p-4 mx-auto">
    <div class="relative">
        <div class="absolute inset-0 flex items-center" aria-hidden="true">
            <div class="w-full border-t border-black"></div>
        </div>
        <div class="relative flex justify-start">
            <span class="pr-3 text-lg font-medium text-neutral-600 bg-white"> Products in cart </span>
        </div>
    </div>
    <div class="space-y-8 lg:divide-y lg:divide-gray-100">
        @foreach ($products as $id => $quantity)
        <div class="pt-8 sm:flex lg:items-center group">
            <div class="flex-shrink-0 mb-4 sm:mb-0 sm:mr-4">
                <img class="w-full rounded-md lg:h-32 lg:w-32" src="https://d33wubrfki0l68.cloudfront.net/89984e38d378089d8d7b47935660ae475a226df7/f6d8b/images/placeholders/sqaurecard.svg" alt="text">
            </div>
            <div>
                <p class="mt-3 text-lg font-medium leading-6">
                    <a class="
                      text-xl text-neutral-600
                      group-hover:text-gray-500
                    ">Product #{{ $id }}</a>
                </p>
                <p class="mx-auto text-base leading-relaxed text-gray-500">
                    Quantity: {{ $quantity }}
                    <br />
                    <button wire:click="remove({{ $id }})" class="text-blue-600 hover:text-neutral-600">Remove</button>
                </p>
            </div>
        </div>
        @endforeach
    </div>
</div>
