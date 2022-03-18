<h2>Editar dados da Aeronave {{$post->inscricao}}</h2>
@if ($errors->any())
<ul>
    @foreach ($errors->all() as $error)
    <li>*{{ $error }} </li>
    @endforeach
</ul>

@endif
<form action="{{ route('posts.update', $post->id) }}" method="post">
    @csrf
    @method('put')
    <input type="text" name="inscricao" id="inscricao" placeholder="Inscrição" value="{{ $post->inscricao }}">
    <input type="text" name="fabricante" id="fabricante" placeholder="Fabricante" value="{{ $post->fabricante }}">
    <input type="text" name="modelo" id="modelo" placeholder="Modelo" value="{{  $post->modelo }}">
    <input type="text" name="tipo" id="tipo" placeholder="Tipo" value="{{  $post->tipo }}">
    <input type="text" name="companhia" id="companhia" placeholder="Companhia" value="{{ $post->companhia }}">
    <button type="submit">Postar novos dados da aeronave</button>

</form>