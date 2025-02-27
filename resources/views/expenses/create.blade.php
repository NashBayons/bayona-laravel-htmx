<!-- resources/views/expenses/create.blade.php -->

@extends('layouts.frontend')

@section('content')

<!-- Add Expense Form -->
<div class="container mt-4">
    <h3 class="text-center mb-3">Add Expense</h3>
    
    <form action="{{ route('expenses.store') }}" method="POST" class="mx-auto w-50 p-4 border rounded shadow">
        @csrf

        <!-- Expense Name Field -->
        <div class="mb-3">
            <label for="name" class="form-label">Expense Name:</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>

        <!-- Amount Field -->
        <div class="mb-3">
            <label for="amount" class="form-label">Amount:</label>
            <input type="number" name="amount" id="amount" class="form-control" required>
        </div>

        <!-- Category Field -->
        <div class="mb-3">
            <label for="category" class="form-label">Category:</label>
            <input type="text" name="category" id="category" class="form-control" required>
        </div>

        <!-- Date Field -->
        <div class="mb-3">
            <label for="date" class="form-label">Date:</label>
            <input type="date" name="date" id="date" class="form-control" required>
        </div>

        <!-- Submit Button -->
        <div class="text-center">
            <button type="submit" class="btn btn-primary">Add Expense</button>
        </div>
    </form>
</div>

@endsection
