@extends('layouts.app')

@section('body')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">List Laporan</h1>
        <a href="{{ route('book.create') }}" class="btn btn-primary">Add</a>
    </div>
    <hr>
    @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
    <table class="table table-hover">
        <thead class="table-primary">
            <tr>
                <th>No</th>
                <th>Shift</th>
                <th>Author</th>
                <th>Date</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @if($books->count() > 0)
            @foreach ($books as $book)
            <tr>
                <td class="align-middle">{{ $loop->iteration }}</th>
                <td class="align-middle">{{ $book->name }}</th>
                <td class="align-middle">{{ $book->author }}</th>
                <td class="align-middle">{{ \Carbon\Carbon::parse($book->date)->format('d-m-Y') }}</td>
                <td class="align-middle">
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <button type="button" class="btn btn-secondary">
                            <a href="{{ route('book.show', $book->id) }}" style="color: inherit; text-decoration: none;">Detail</a>
                        </button>
                        <button type="button" class="btn btn-warning">
                            <a href="{{ route('book.edit', $book->id) }}" style="color: inherit; text-decoration: none;">Edit</a>
                        </button>
                        <form action="{{ route('book.destroy', $book->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Are you sure?')">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger m-0">Delete</button>
                        </form>
                    </div>                                      
                </th>
            </tr>
            @endforeach
            @else
                <tr>
                    <td class="text-center" colspan="5">Laporan not found</td>
                </tr>
            @endif
        </tbody>
    </table>
@endsection

