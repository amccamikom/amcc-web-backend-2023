<a href="{{ route('authors.create') }}">Tambah Author</a>
<table>
    <tr>
        <th>Nama</th>
        <th>Nama Pena</th>
        <th>Aksi</th>
    </tr>
    @foreach ($authors as $author)
        <tr>
            <td>{{ $author->nama }}</td>
            <td>{{ $author->nama_pena }}</td>
            <td>
                <a href="{{ route('authors.edit', ['author' => $author->id]) }}">Edit</a>
                <form action="{{ route('authors.destroy', ['author' => $author->id]) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
    @endforeach
</table>
