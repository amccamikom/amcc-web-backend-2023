<form action="{{ route('authors.update', ['author' => $author->id]) }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="nama" placeholder="Nama" required value="{{ $author->nama }}">
    <input type="text" name="nama_pena" placeholder="Nama Pena" required value="{{ $author->nama_pena }}">
    <button type="submit">Edit Author</button>
</form>
