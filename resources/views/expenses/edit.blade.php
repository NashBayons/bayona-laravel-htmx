@extends('layouts.frontend')

@section('content')
<h2>Edit Expense</h2>

<!-- Edit Expense Form -->
<div class="container mt-4">
    <form action="{{ route('expenses.update', $expense->id) }}" method="POST" class="mx-auto w-50 p-4 border rounded shadow">
        @csrf
        @method('PUT') <!-- Use PUT for update -->

        <!-- Expense Name Field -->
        <div class="mb-3">
            <label for="name">Expense Name:</label>
            <input type="text" name="name" id="name" value="{{ old('name', $expense->name) }}" required>
        </div>

        <!-- Amount Field -->
        <div class="mb-3">
            <label for="amount">Amount:</label>
            <input type="number" name="amount" id="amount" value="{{ old('amount', $expense->amount) }}" required>
        </div>

        <!-- Category Field -->
        <div class="mb-3">
            <label for="category">Category:</label>
            <input type="text" name="category" id="category" value="{{ old('category', $expense->category) }}" required>
        </div>

        <!-- Date Field -->
        <div class="mb-3">
            <label for="date">Date:</label>
            <input type="date" name="date" id="date" value="{{ old('date', $expense->date) }}" required>
        </div>

        <!-- Submit Button -->
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Update Expense</button>
        </div>
    </form>
</div>

@endsection
