<!-- resources/views/layouts/frontend.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Expense Tracker</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="d-flex flex-column min-vh-100">

    <header class="text-center py-3 bg-light">
        <h1>Expense Tracker</h1>
        <nav class="d-flex justify-content-center gap-3">
            <a href="{{ route('expenses.index') }}" class="text-decoration-none">Home</a>
            <span>|</span>
            <a href="{{ route('expenses.create') }}" class="text-decoration-none">Add Expense</a>
            <span>|</span>
            <a href="{{ route('dashboard') }}" class="text-decoration-none">Back to Dashboard</a>
        </nav>
    </header>

    <div class="container text-center flex-grow-1">
        @yield('content')  <!-- Content of the page will be injected here -->
    </div>

    <footer class="text-center py-3 bg-light mt-auto">
        <p>&copy; 2025 Expense Tracker App</p>
    </footer>

</body>
</html>
