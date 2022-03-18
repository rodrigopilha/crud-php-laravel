<h2>Detalhes da Aeronave de Inscrição - {{ $post->inscricao }}</h2>

<ul>
    <li>Inscrição - {{$post->inscricao}}</li>
    <li>Fabricante - {{$post->fabricante}}</li>
    <li>Modelo - {{$post->modelo}}</li>
    <li>Tipo - {{$post->tipo}}</li>
    <li>Companhia - {{$post->companhia}}</li>
</ul>

<form action="{{ route('posts.destroy', $post->id) }}" method="post">
    @csrf
    <input type="hidden" name="_method" value="DELETE">
    <button type="submit">Excluir Aeronave: {{ $post->inscricao }}</button>
</form>