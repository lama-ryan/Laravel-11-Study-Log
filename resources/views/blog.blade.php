<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    @foreach ($posts as $post)
        <article class="border-b border-gray-300 max-w-screen-md py-8">
            <a href="/blog/{{ $post['slug'] }}" class="hover:underline">
                <h2 class="mb-1 text-gray-900 tracking-tight fotn-bold text-xl">{{ $post['title']   }}</h2>
            </a>

            <div class="text-base text-gray-500">
                <a href="#">{{ $post['author'] }}</a> | {{ $post->created_at->format('j F Y') }}
            </div>

            <p class="my-4 font-light">{{ Str::limit($post['content'], 80) }}</p>
            <a class="text-blue-500 font-medium hover:underline" href="/blog/{{ $post['slug'] }}">Read more &raquo;</a>
        </article>
    @endforeach

</x-layout>