<h2>Cadastro de aeronaves</h2>
@if ($errors->any())
<ul>
    @foreach ($errors->all() as $error)
    <li>*{{ $error }} </li>
    @endforeach
</ul>

@endif
<form action="{{ route('posts.store') }}" method="post">
    @csrf
    <input type="text" name="inscricao" id="inscricao" placeholder="Inscrição" value="{{ old('inscricao') }}">
    <input type="text" name="fabricante" id="fabricante" placeholder="Fabricante" value="{{ old('fabricante') }}">
    <input type="text" name="modelo" id="modelo" placeholder="Modelo" value="{{ old('modelo') }}">
    <input type="text" name="tipo" id="tipo" placeholder="Tipo" value="{{ old('tipo') }}">
    <input type="text" name="companhia" id="companhia" placeholder="Companhia" value="{{ old('companhia') }}">
    <button type="submit">Postar dados da aeronave</button>

</form>