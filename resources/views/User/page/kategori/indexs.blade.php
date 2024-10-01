@extends('User.main')

@section('content')
<div class="row">
    <div class="col-md-12 grid-margin">
        <div class="row">
            <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                <h1>Daftar Kategori</h1>

                @if($kategoris->isEmpty())
                    <p>Tidak ada kategori yang tersedia.</p>
                @else
                    <ul class="list-group">
                        @foreach($kategoris as $kategori)
                            <li class="list-group-item">{{ $kategori->nama }}</li>
                        @endforeach
                    </ul>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
