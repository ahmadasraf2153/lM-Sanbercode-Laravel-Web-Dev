<h1>Halaman Register</h1>

<form action="/welcome" method="POST">
    @csrf
    <input type="text" name="nama_depan" placeholder="Nama Depan"><br><br>
    <input type="text" name="nama_belakang" placeholder="Nama Belakang"><br><br>

    <button type="submit">Submit</button>
</form>
