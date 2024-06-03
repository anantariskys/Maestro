@extends('layouts.admin')

@section('content')
    <h1>Edit Kategori</h1>
    <form action="{{ route('categories.update', $category) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Nama</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ $category->name }}" required>
        </div>
        <div class="form-group">
            <label for="image">Gambar</label>
            <input type="file" name="image" id="image" class="form-control-file">
            <img src="{{ asset('storage/' . $category->image) }}" alt="{{ $category->name }}" width="100" class="mt-2">
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
@endsection