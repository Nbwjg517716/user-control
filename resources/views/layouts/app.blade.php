<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8" />
    <title>Controle de Usuários</title>
    <!-- Link do Bootstrap CSS para melhorar o estilo -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body>
    <header class="bg-primary text-white p-3 mb-4">
        <h1 class="container">Controle de Usuários</h1>
    </header>

    <main class="container">
        {{-- Aqui o conteúdo da view filha será inserido --}}
        @yield('content')
    </main>

    <footer class="text-center mt-5 mb-3 text-muted">
        © 2025 Meu Sistema
    </footer>

    <!-- Link do Bootstrap JS (opcional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
