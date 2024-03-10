<x-app-layout :title="$post->title">
    <article class="col-span-4 md:col-span-3 mt-10 mx-auto py-5 w-full max-w-[500px] lg:max-w-[700px]">
        <img class="w-full my-2 rounded-lg" src=" {{ $post->getThumbnailUrl() }}" alt="thumbnail">
        <h1 class="text-4xl font-bold text-left text-gray-800">
            {{ $post->title }}
        </h1>
        <div class="sm:mt-2 mt-4 flex justify-between items-center">
            <div class="flex py-5 items-center">
                <x-posts.author :author="$post->author" size="md" />
                <span class="text-gray-500 text-xs sm:text-sm mt-4 sm:mt-0 ">| {{ $post->getReadingTime() }} min read</span>
            </div>
            <div class="flex items-center">
                <span class="text-gray-500 mr-2 mt-4 sm:mt-0 text-xs sm:text-lg"> {{ $post->published_at->diffForHumans() }} </span>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.3"
                    stroke="currentColor" class="w-5 h-5 text-gray-500 mt-4 sm:mt-0 sm:w-6 sm:h-6" >
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
            </div>
        </div>
        <div
            class="article-actions-bar my-6 flex text-sm items-center justify-between border-t border-b border-gray-100 py-4 px-2">
            <div class="flex items-center">
                <livewire:like-button :key="'like-'. $post->id" :$post />
            </div>
            <div>
                <div class="flex items-center">
                </div>
            </div>
        </div>

        <div class="article-content prose py-3 text-gray-800 text-lg sm:text-justify text-balance ">
            {!! $post->body !!}
        </div>

        <div class="flex items-center space-x-4 mt-10">
            @foreach ($post->categories as $category)
               <x-posts.category-badge :category="$category" />
            @endforeach
        </div>

       <livewire:post-comments :key="'comments'. $post->id" :$post />
    </article>
</x-app-layout>
