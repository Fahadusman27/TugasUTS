@extends('layouts.main')

@section('content')
    <div class="row">
        <div class="col-md-12 grid-margin">
            <div class="row">
                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                    <h1>Edit Buku</h1>

                    @if($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('bukus.update', $buku->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="kode">Kode Buku</label>
                            <input type="text" name="kode" id="kode" class="form-control" value="{{ $buku->kode }}" required>
                        </div>

                        <div class="form-group">
                            <label for="judul">Judul Buku</label>
                            <input type="text" name="judul" id="judul" class="form-control" value="{{ $buku->judul }}" required>
                        </div>

                        <div class="form-group">
                            <label for="pengarang">Pengarang</label>
                            <input type="text" name="pengarang" id="pengarang" class="form-control" value="{{ $buku->pengarang }}" required>
                        </div>

                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
