<a href="{{ route('books.create') }}">Tambah Buku</a>
<table>
    <tr>
        <th>Judul</th>
        <th>Jumlah Halaman</th>
        <th>Author</th>
        <th>Tanggal Terbit</th>
        <th>Aksi</th>
    </tr>
    @foreach ($books as $book)
        <tr>
            <td>{{ $book->judul }}</td>
            <td>{{ $book->jumlah_halaman }}</td>
            <td>{{ $book->author->nama_pena }}</td>
            <td>{{ $book->tanggal_terbit }}</td>
            <td>
                <a href="{{ route('books.edit', ['book' => $book->id]) }}">Edit</a>
                <form action="{{ route('books.destroy', ['book' => $book->id]) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
    @endforeach
</table>
