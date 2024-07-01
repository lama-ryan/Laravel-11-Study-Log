<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <article class="border-b border-gray-300 py-8">
        <div class="text-base text-gray-500 text-center mb-10">
            <a href="#">{{ $post['author'] }}</a> | {{ $post['created_at'] }}
        </div>

        <p class="my-4 font-light">{{ $post['content'] }}</p>
        <a class="text-blue-500 font-medium hover:underline" href="/blog">&laquo; Back To Posts</a>
    </article>

</x-layout>