<form action="{{ route('books.store') }}" method="POST">
    @csrf
    <input type="text" name="judul" placeholder="Judul" required>
    <input type="number" name="jumlah_halaman" placeholder="Jumlah Halaman" required>
    <input type="date" name="tanggal_terbit" placeholder="Tanggal Terbit" required>
    <button type="submit">Tambah Buku</button>
</form>
