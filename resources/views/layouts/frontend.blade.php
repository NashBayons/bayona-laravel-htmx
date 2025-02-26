<!-- resources/views/layouts/frontend.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Expense Tracker</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <header>
        <h1>Expense Tracker</h1>
        <nav>
            <a href="{{ route('expenses.index') }}">Home</a> |
            <a href="{{ route('expenses.create') }}">Add Expense</a>
        </nav>
    </header>

    <div class="container">
        @yield('content')  <!-- Content of the page will be injected here -->
    </div>

    <footer>
        <p>&copy; 2025 Expense Tracker App</p>
    </footer>
</body>
</html>
