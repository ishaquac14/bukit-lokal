@extends('layouts.app')

@section('body')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">List Laporan</h1>
        <a href="{{ route('book.create') }}" class="btn btn-primary">Add Laporan</a>
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
                <th>#</th>
                <th>Name</th>
                <th>Author</th>
                <th>Year</th>
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
                <td class="align-middle">{{ $book->year }}</th>
                <td class="align-middle">
                    <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                        <button type="button" class="btn btn-secondary">Detail</button>
                        <button type="button" class="btn btn-warning">Edit</button>
                        <button type="button" class="btn btn-danger">Delete</button>
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

