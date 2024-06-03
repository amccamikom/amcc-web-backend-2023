<form action="{{ route('books.update', ['book' => $book->id]) }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="judul" placeholder="Judul" required value="{{ $book->judul }}">
    <input type="number" name="jumlah_halaman" placeholder="Jumlah Halaman" required value="{{ $book->jumlah_halaman }}">
    <input type="date" name="tanggal_terbit" placeholder="Tanggal Terbit" required
        value="{{ $book->tanggal_terbit }}">
    <button type="submit">Edit Buku</button>
</form>
