<x-layouts.app 
      title="Blog" 
      meta-description="Blog meta description"
>
      <h1>Blog</h1>
      <a href="{{ route('posts.create') }}">Create new post</a>
      
      @foreach ($posts as $post)
        <div style="display: flex; align-items: baseline" >
            <h2>
                <a href="{{ route('posts.show', $post) }}">
                    {{ $post->title }}
                </a>
            </h2> &nbsp;
            <a href="{{ route('posts.edit', $post)}}">Edit</a>
            <form action="{{ route('posts.destroy', $post)}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </div>
      @endforeach

</x-layouts.app>
    