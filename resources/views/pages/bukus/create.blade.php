@extends('layouts.main')

@section('content')
    <div class="row">
        <div class="col-md-12 grid-margin">
            <div class="row">
                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                    <h1>Tambah Buku</h1>
                    <form method="POST" action="{{ route('bukus.store') }}">
                        @csrf
                        <div class="form-group">
                            <label for="kategori_id">Kategori:</label>
                            <select name="kategori_id" id="kategori_id" class="form-control" required>
                                @foreach($kategoris as $kategori)
                                    <option value="{{ $kategori->id }}">{{ $kategori->nama }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="kode">Kode:</label>
                            <input type="text" name="kode" id="kode" class="form-control" value="{{ old('kode') }}" required>
                        </div>
                        <div class="form-group">
                            <label for="judul">Judul:</label>
                            <input type="text" name="judul" id="judul" class="form-control" value="{{ old('judul') }}" required>
                        </div>
                        <div class="form-group">
                            <label for="pengarang">Pengarang:</label>
                            <input type="text" name="pengarang" id="pengarang" class="form-control" value="{{ old('pengarang') }}" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                    @if ($errors->any())
                        <div class="alert alert-danger mt-3">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
