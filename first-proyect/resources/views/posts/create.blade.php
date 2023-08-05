<x-layouts.app
  title="Create new post"
  meta-description="Formulario para crear un nuevo blog post"
>  
  <h1>Create new post</h1>
  <form action="{{ route('posts.store') }}" method="POST">
    @csrf
    @include('posts.form-fields')
    <button type="submit">Send</button>
    <br>
  </form>
  <br>
  <a href="{{ route('posts.index') }}">Back</a>
</x-layouts.app>