<x-layouts.app
  :title="$post->title"
  :meta-description="$post->body"
>  
  <h1>Edit form</h1>
  <form action="{{ route('posts.update', $post) }}" method="POST">
    @csrf @method('PATCH')
    @include('posts.form-fields')
    <button type="submit">Update</button>
    <br>
  </form>
  <br>
  <a href="{{ route('posts.index') }}">Back</a>
</x-layouts.app>