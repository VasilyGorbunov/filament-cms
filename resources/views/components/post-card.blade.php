<div class="bg-white rounded-xl shadow-md p-4 flex flex-col md:flex-row items-center md:space-x-4 space-y-4 md:space-y-0">
    <img class="w-[150px] h-[150px] p-2 md:p-0" src="{{ $post->getFirstMediaUrl() }}" alt="">
    <div>
        <div class="text-xl font-medium text-black">
            {{ $post->title }}
        </div>
        <p class="text-gray-500">
            {{ $post->excerpt() }}
        </p>
    </div>
</div>
