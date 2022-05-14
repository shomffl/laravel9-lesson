<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Blog Name') }}
        </h2>
    </x-slot>

    <div class='max-w-7xl mx-auto'>

        [<a class="border-b-2 border-sky-300" href='/posts/create'>create</a>]
    
        <div>
            @foreach ($posts as $post)
                <div class='post'>
                    <h2 class='title'>
                        <a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
                    </h2>                   
                    <p class='body'>{{ $post->body }}</p>
                </div>
                </div>
                    <a href="/categories/{{ $post->category->id }}">{{ $post->category->name }}</a>
                </div>
                <div>
                    <form action="/posts/{{ $post->id }}" id="form_{{ $post->id }}" method="post" style="display:inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit">delete</button> 
                    </form>
                </div>
               
            @endforeach
        </div>

        <div class='paginate'>
            {{ $posts->links() }}
        </div>
    </div>
</x-app-layout>
