{{-- resources/views/dashboard.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Bem-vindo!</h1>

    <p>Você está logado!</p>

    <a href="{{ route('users.index') }}" class="btn btn-primary">
        Gerenciar Usuários
    </a>

    <form method="POST" action="{{ route('logout') }}" style="display:inline;">
        @csrf
        <button type="submit" class="btn btn-danger">Sair</button>
    </form>
</div>
@endsection
