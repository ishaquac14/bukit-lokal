@extends('layouts.app')

@section('body')
<div class="container">
    <div class="d-flex align-items-center justify-content-between">
        <h2 class="mb-0">Tambahkan Informasi</h2>
        <a href="{{ route('info.index') }}" class="btn btn-secondary">Back</a>
    </div>
    <hr>
    <form action="{{ route('info.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-6">
                <label class="form-label">Information Name</label>
                <input type="text" name="name" class="form-control" placeholder="Isi Informasi">
            </div>
            <div class="col-md-6">
                <label class="form-label">Author</label>
                <select name="author" class="form-select">
                    <option value="" disabled selected>Pilih Author</option>
                    <option value="Handika">Handika</option>
                    <option value="Rohmat Maulana Ishaq">Rohmat Maulana Ishaq</option>
                    <option value="M. Diki Nugraha">M. Diki Nugraha</option>
                </select>
            </div>
        </div>            
        <div class="row mt-3">
            <div class="col-md-6">
                <label class="form-label">Date</label>
                <input type="date" name="date" class="form-control">
            </div>
            <div class="col-md-6">
                <label class="form-label">Description</label>
                <textarea class="form-control" name="description" placeholder="description" rows="5"></textarea>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-6 offset-md-6">
                <label class="form-label">Input Photo</label>
                <input type="file" name="photo" class="form-control">
            </div>
        </div>        
        <div class="row mt-3">
            <div class="col">
                <div class="d-grid">
                    <button class="btn btn-primary">Submit</button>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection
