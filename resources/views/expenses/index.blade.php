@extends('layouts.frontend')

@section('content')
<div class="container mt-4">
    <h3 class="text-center mb-3">All Expenses</h3>
    
    @if ($expenses->isEmpty())
        <div class="alert alert-warning text-center">You have no expenses yet. Please add some!</div>
    @else
        <table class="table table-bordered table-striped text-center">
            <thead class="table-light">
                <tr>
                    <th>Expense Name</th>
                    <th>Amount</th>
                    <th>Category</th>
                    <th>Date</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($expenses as $expense)
                <tr>
                    <td>{{ $expense->name }}</td>
                    <td>${{ number_format($expense->amount, 2) }}</td>
                    <td>{{ $expense->category }}</td>
                    <td>{{ $expense->date->format('Y-m-d') }}</td> <!-- Format the date properly -->
                    <td>
                        <a href="{{ route('expenses.edit', $expense->id) }}" class="btn btn-sm btn-primary">Edit</a>

                        <!-- Delete Form -->
                        <form action="{{ route('expenses.destroy', $expense->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this expense?')">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
@endsection
