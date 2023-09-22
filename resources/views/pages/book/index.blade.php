@extends('layouts.app')

@section('body')
<div class="container">
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
    <div class="table-responsive">
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
                <tr class="table-light"> <!-- Tambahkan kelas ini untuk tampilan yang lebih baik -->
                    <td class="align-middle">{{ $loop->iteration }}</td>
                    <td class="align-middle">{{ $book->name }}</td>
                    <td class="align-middle">{{ $book->author }}</td>
                    <td class="align-middle">{{ \Carbon\Carbon::parse($book->date)->format('d-m-Y') }}</td>
                    <td class="align-middle">
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <a href="{{ route('book.show', $book->id) }}" class="btn btn-secondary">Detail</a>
                            <a href="{{ route('book.edit', $book->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('book.destroy', $book->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
                @else
                <tr>
                    <td class="text-center" colspan="5">Laporan tidak ditemukan</td>
                </tr>
                @endif
            </tbody>
        </table>
    </div>
</div>
@endsection
