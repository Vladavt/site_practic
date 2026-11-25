<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Автосалон</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="d-flex flex-column min-vh-100 bg-light">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="/">Автосалон</a>
            <div class="navbar-nav">
                <a class="nav-link" href="/cars">Машины</a>
                <a class="nav-link" href="/models">Модели</a>
                <a class="nav-link" href="/brands">Бренды</a>
                <a class="nav-link" href="/countries">Страны</a>
                <a class="nav-link" href="/colors">Цвета</a>
                <a class="nav-link" href="/transmissions">Коробки</a>
            </div>
        </div>
    </nav>

    <main class="container mt-4 flex-grow-1">
        @yield('content') 
    </main>
//a
    <footer class="bg-dark text-white text-center py-3 mt-auto">
        <p class="mb-0">© 2026 Проект "База данных Автосалона"</p>
    </footer>

</body>
</html>