<form action="{{ route('books.update', ['book' => $book->id]) }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="judul" placeholder="Judul" required value="{{ $book->judul }}">
    <input type="number" name="jumlah_halaman" placeholder="Jumlah Halaman" required value="{{ $book->jumlah_halaman }}">
    <input type="date" name="tanggal_terbit" placeholder="Tanggal Terbit" required
        value="{{ $book->tanggal_terbit }}">
    <label for="author_id">Author :</label>
    <select name="author_id">
        @foreach ($authors as $author)
            <option {{ $book->author_id == $author->id ? 'selected' : '' }} value="{{ $author->id }}">
                {{ $author->nama_pena }}</option>
        @endforeach
    </select>
    <button type="submit">Edit Buku</button>
</form>
