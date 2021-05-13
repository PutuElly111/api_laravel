<h1>Input pembelian</h1>

<form action="/inputs" method="POST">
    @csrf
    Nama Sepatu : <input type="text" name="nama_sepatu"><br>
    warna : <input type="text" name="warna"><br>
    ukuran : <input type="text" name="ukuran"><br>
    jumlah : <input type="text" name="jumlah"><br>
    harga : <input type="text" name="harga"><br>

    <input type="submit" value="Beli">
</form>