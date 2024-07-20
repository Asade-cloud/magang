<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Produk</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h1 class="mb-4">Tambah Produk</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('produk.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="nama_produk">Nama Produk:</label>
                <input type="text" class="form-control" id="nama_produk" name="nama_produk" value="{{ old('nama_produk') }}" required>
            </div>
            <div class="form-group">
                <label for="merek">Merek:</label>
                <select class="form-control" id="merek_id" name="merek_id" required>
                    <option value="" disabled selected>Pilih Merek</option>
                    @foreach ($mereks as $merek)
                        <option value="{{ $merek->id }}">{{ $merek->nama_merek }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="linkmodul" class="form-label">Link Modul:</label>
                <input type="url" name="linkmodul" class="form-control" id="linkmodul">
            </div>
            <div class="form-group">
                <label for="kategori_id">Kategori:</label>
                <select class="form-control" id="kategori_id" name="kategori_id" required>
                    <option value="" disabled selected>Pilih Kategori</option>
                    @foreach ($kategoris as $kategori)
                        <option value="{{ $kategori->id }}" data-subkategoris="{{ json_encode($kategori->subkategoris) }}">{{ $kategori->nama_kategori }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group" id="subkategori_div" style="display: none;">
                <label for="subkategori_id">Subkategori:</label>
                <select class="form-control" id="subkategori_id" name="subkategori_id" required>
                    <option value="" disabled selected>Pilih Subkategori</option>
                </select>
            </div>
            <div class="form-group">
                <label for="gambar" class="form-label">Gambar:</label>
                <input type="file" name="gambar[]" class="form-control" id="gambar" multiple>
             
            </div>
          
            <div class="form-group">
                <label for="deskripsi">Deskripsi:</label>
                <textarea class="form-control" id="deskripsi" name="deskripsi" rows="4" required>{{ old('deskripsi') }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary" >Tambah Produk</button>
        </form>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        document.getElementById('kategori_id').addEventListener('change', function() {
            const selectedOption = this.options[this.selectedIndex];
            const subkategoriSelect = document.getElementById('subkategori_id');
            const subkategoriDiv = document.getElementById('subkategori_div');

            // Menghilangkan semua opsi di subkategori
            subkategoriSelect.innerHTML = '<option value="" disabled selected>Pilih Subkategori</option>';

            if (selectedOption) {
                const subkategoris = JSON.parse(selectedOption.getAttribute('data-subkategoris'));

                if (subkategoris.length > 0) {
                    subkategoriDiv.style.display = 'block';
                    subkategoris.forEach(function(subkategori) {
                        const option = document.createElement('option');
                        option.value = subkategori.id;
                        option.textContent = subkategori.nama_subkategori;
                        subkategoriSelect.appendChild(option);
                    });
                } else {
                    subkategoriDiv.style.display = 'none';
                }
            }
        });
    </script>
</body>

</html>
