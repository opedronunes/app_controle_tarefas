Site da aplicação.

@auth
    <h1>Usuário autenticado</h1>
    <p>Id: {{ Auth::user()->id }}</p>
    <p>Nome: {{ Auth::user()->name }}</p>
    <p>Email: {{ Auth::user()->email }}</p>
@endauth

@guest
    Olá visitante, tudo bem?
@endguest