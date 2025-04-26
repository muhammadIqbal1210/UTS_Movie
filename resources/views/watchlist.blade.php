@extends('layout.template')

@section('title', 'Watchlist')

@section('content')

<h1>Watchlist Film</h1>

<table class="table table-striped">
    <thead>
        <tr>
            <th>No</th>
            <th>Judul Film</th>
            <th>Kategori</th>
            <th>Tahun Rilis</th>
            <th>Pemain</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($movies as $movie)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $movie->judul }}</td>
            <td>{{ $movie->category->nama_kategori }}</td>
            <td>{{ $movie->tahun }}</td>
            <td>{{ $movie->pemain }}</td>
        </tr>
        @empty
        <tr>
            <td colspan="5" class="text-center">Belum ada film di Watchlist.</td>
        </tr>
        @endforelse
    </tbody>
</table>

@endsection
