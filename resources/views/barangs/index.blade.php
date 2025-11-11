<!DOCTYPE html>
<html>
<head>
    <title>Data Barang</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="p-4">

<div class="container">
    <h1 class="mb-4">Data Barang</h1>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <a href="{{ route('barangs.create') }}" class="btn btn-primary mb-3">Tambah Barang</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nama Barang</th>
                <th>Harga</th>
                <th>Stok</th>
                <th>Kategori</th>
                <th>Aksi</th>
            </tr>
        </thead>

        <tbody>
        @foreach ($barangs as $barang)
            <tr>
                <td>{{ $barang->nama_barang }}</td>
                <td>{{ $barang->harga }}</td>
                <td>{{ $barang->stok }}</td>
                <td>{{ $barang->kategori }}</td>
                <td>
                    <a href="{{ route('barangs.edit', $barang->id) }}" class="btn btn-warning btn-sm">Edit</a>

                    <form action="{{ route('barangs.destroy', $barang->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin hapus?')">Hapus</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

</div>

</body>
</html>
