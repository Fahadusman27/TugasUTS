@extends('layouts.main')

@section('content')

    <div class="row">
        <div class="col-md-12 grid-margin">
            <div class="row">
                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                    <h1>Daftar Kategori</h1>
                    <a href="{{ route('kategori.create') }}">Tambah Kategori</a>

                    <ul>
                        @foreach($kategori as $kategori)
                            <li>{{ $kategori->nama }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
