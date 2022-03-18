<a href="{{ route('posts.create') }}">Cadastrar Aeronave</a>
<hr>
<h2>Aeronaves cadastradas</h2>

@foreach($posts as $post)
<p>
    {{ $post->inscricao }} -
    <a href=" {{ route('posts.show', $post->id) }} ">Ver Detalhes</a> -
    <a href="{{ route('posts.edit', $post->id) }} ">Editar</a>
</p>

@endforeach