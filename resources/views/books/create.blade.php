<form action="{{ route('books.store') }}" method="POST">
    @csrf
    <input type="text" name="judul" placeholder="Judul" required>
    <input type="number" name="jumlah_halaman" placeholder="Jumlah Halaman" required>
    <input type="date" name="tanggal_terbit" placeholder="Tanggal Terbit" required>
    <label for="author_id">Author :</label>
    <select name="author_id">
        @foreach ($authors as $author)
            <option value="{{ $author->id }}">{{ $author->nama_pena }}</option>
        @endforeach
    </select>
    <button type="submit">Tambah Buku</button>
</form>
