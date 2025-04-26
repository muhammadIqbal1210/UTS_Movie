@extends('layout.template')

@section('title', 'Data Movie')

@section('content')

<h1>Data Movie</h1>

<table class="table table-hover">
    <thead>
        <tr>
            <th>No</th>
            <th>Judul</th>
            <th>Kategori</th>
            <th>Tahun</th>
            <th>Pemain</th>
            <th>Aksi</th>
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
                <td class="text-nowrap">
                    <a href="{{ route('movies.edit', $movie->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('movies.delete', $movie->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="6" class="text-center">Tidak ada data movie.</td>
            </tr>
        @endforelse
    </tbody>
</table>

<div class="d-flex justify-content-center">
    {{ $movies->links() }}
</div>

@endsection
