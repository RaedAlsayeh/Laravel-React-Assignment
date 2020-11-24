@extends('layouts.app')
@section('content')
<div class="container"></div>
<div class="row">
    <div class="col-md-12">
        <table class="table">
            <thead>

                <tr>
                    <th>#</th>
                    <th>Description</th>
                    <th>Date</th>
                    <th>Category</th>
                    <th>Amount</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($expenses as $expense)
                <tr>
                    <td>{{$expense->id}}</td>
                    <td>{{$expense->description}}</td>
                    <td>{{$expense->date}}</td>
                    <td>{{$expense->category}}</td>
                    <td>{{$expense->amount}}</td>
                    <td>
                        <a href="{{ route('expense.view', $expense->id) }}" class="mr-3">View</a>
                        <a href="{{ route('expense.delete', $expense->id) }}" class="mr-3">Delete</a>
                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>
        {{$expenses->render()}}
    </div>
</div>
</div>

@endsection