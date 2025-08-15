<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kategori Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container py-4">
        <a href="/" class="btn btn-warning">
            Home
        </a>
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="mb-0">📚 Kategori Produk</h2>
            <a href="{{ route('kategori-produk.create') }}" class="btn btn-success">
                + Tambah Kategori
            </a>
        </div>

        <div class="table-responsive">
            <table class="table table-striped table-bordered align-middle text-center">
                <thead class="table-dark">
                    <tr>
                        <th>No</th>
                        <th>Nama Kategori</th>
                        <th>Jenis</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($kategori as $index => $item)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $item->nama_kategori }}</td>
                            <td>{{ $item->jenis }}</td>
                            <td class="d-flex justify-content-center gap-2">
                                <a href="{{ route('kategori-produk.edit', $item->id) }}" 
                                   class="btn btn-warning btn-sm">
                                    Edit
                                </a>
                                <form action="{{ route('kategori-produk.destroy', $item->id) }}" 
                                      method="POST" 
                                      onsubmit="return confirm('Yakin ingin menghapus kategori ini?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">
                                        Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="text-muted">Tidak ada kategori ditemukan.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

    </div>
</body>
</html>