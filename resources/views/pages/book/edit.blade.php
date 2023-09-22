@extends('layouts.app')

@section('body')
    <div class="d-flex align-items-center justify-content-between">
    <h1 class="mb-0">Edit Laporan</h1>
    <a href="{{ route('book.index') }}" class="btn btn-secondary">Back</a>
    </div>
    <hr>
    <form action="{{ route('book.update', $book->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row mb-3">
            <div class="col">
                <label class="form-label">Shift</label>
                <select name="name" class="form-control" id="shiftSelect">
                  <option value="" disabled selected>Pilih jenis Shift</option>
                  <option value="Non Shift">Non Shift</option>
                  <option value="Shift 2">Shift 2</option>
                  <option value="Shift 3">Shift 3</option>
                </select>
            </div>       
            <div class="col">
                <label class="form-label">Author</label>
                <input type="text" name="author" class="form-control" placeholder="Author" value="{{ $book->author }}">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <label class="form-label">Date</label>
                <input type="text" name="date" class="form-control" placeholder="Date" value="{{ date('Y-m-d', strtotime($book->date)) }}">
            </div>                                    
            <div class="col">
                <label class="form-label">Description</label>
                <textarea class="form-control" name="description" placeholder="description" rows="{{ substr_count($book->description, "\n") + 1 }}">{{ $book->description }}</textarea>
            </div>  
                <div class="row mt-3">
                    <div class="d-grid">
                        <button class="btn btn-warning">Updated</button>
                    </div>
                </div>                            
            </div>    
        </div>
    </form>
@endsection