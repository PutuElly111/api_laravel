<h1>Edit</h1>
<form action="/inputs/{{$input->id}}" method="POST">
    <!-- karena mau edit maka kita perlu nambahin method PUT -->
    @method('PUT')
    @csrf
    <!-- valu dalam kurung kurawal disini fungsinya ngambil data dari data yang ingin diedit supaya bisa ditampilkan memlalui $input yang udah dibuat tadi di controller -->
    Nama Sepatu : <input type="text" name="nama_sepatu" value="{{$input->nama_sepatu}}"><br>
    warna : <input type="text" name="warna" value="{{$input->warna}}"><br>
    ukuran : <input type="text" name="ukuran" value="{{$input->ukuran}}"><br>
    jumlah : <input type="text" name="jumlah" value="{{$input->jumlah}}"><br>
    harga : <input type="text" name="harga" value="{{$input->harga}}"><br>
    <input type="submit" value="Upload">
</form>