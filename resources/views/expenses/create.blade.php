<!-- resources/views/expenses/create.blade.php -->

@extends('layouts.frontend')

@section('content')

<h2>Add New Expense</h2>

<!-- Add Expense Form -->
<div>
    <form action="{{ route('expenses.store') }}" method="POST">
        @csrf

        <!-- Expense Name Field (in its own row) -->
        <div class="form-row">
            <label for="name">Expense Name:</label>
            <input type="text" name="name" id="name" required>
        </div>

        <!-- Amount Field (in its own row) -->
        <div class="form-row">
            <label for="amount">Amount:</label>
            <input type="number" name="amount" id="amount" required>
        </div>

        <!-- Category Field (in its own row) -->
        <div class="form-row">
            <label for="category">Category:</label>
            <input type="text" name="category" id="category" required>
        </div>

        <!-- Date Field (in its own row) -->
        <div class="form-row">
            <label for="date">Date:</label>
            <input type="date" name="date" id="date" required>
        </div>

        <!-- Submit Button -->
        <div class="form-row">
            <button type="submit">Add Expense</button>
        </div>
    </form>
</div>

@endsection
