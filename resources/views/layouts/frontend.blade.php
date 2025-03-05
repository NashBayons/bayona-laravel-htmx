<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Expense Tracker</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://unpkg.com/htmx.org@2.0.4" integrity="sha384-HGfztofotfshcF7+8n44JQL2oJmowVChPTg48S+jvZoztPfvwD79OC/LTtG6dMp+" crossorigin="anonymous"></script>
</head>
<body class="d-flex flex-column min-vh-100">

    <header class="text-center py-3 bg-light">
        <h1>Expense Tracker</h1>
        <nav class="d-flex justify-content-center gap-3">
            <x-nav-link :href="route('expenses.index')" :active="request()->routeIs('expenses.index')" hx-boost="true" hx-push-url="true">{{ __('Home') }}</x-nav-link>
            <span>|</span>
            <x-nav-link :href="route('expenses.create')" :active="request()->routeIs('expenses.create')" hx-boost="true" hx-push-url="true">{{ __('Add Expense') }}</x-nav-link>
            <span>|</span>
            <a href="{{ route('dashboard') }}" class="text-decoration-none">Back to Dashboard</a>
        </nav>
    </header>

    <!-- Main Content Area -->
    <div id="main-content" class="container text-center flex-grow-1">
        @yield('content') <!-- This will render the content for the current page -->
    </div>

    <footer class="text-center py-3 bg-light mt-auto">
        <p>&copy; 2025 Expense Tracker App</p>
    </footer>

</body>
</html>
