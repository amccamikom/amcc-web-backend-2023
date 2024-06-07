<form action="{{ route('authors.store') }}" method="POST">
    @csrf
    <input type="text" name="nama" placeholder="Nama" required>
    <input type="text" name="nama_pena" placeholder="Nama Pena" required>
    <button type="submit">Tambah Author</button>
</form>
