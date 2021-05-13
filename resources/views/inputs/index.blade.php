<h1 align="center">List pembelian </h1>
<table border="2" cellspacing="" align="center">
    <thead>
        <tr>
            <th>Nama Sepatu</th>
            <th>warna</th>
            <th>ukuran</th>
            <th>jumlah</th>
            <th>harga</th>
        </tr>
    </thead>
    <tbody>
        <!-- perulangan untuk seluruh item yang ada di database syntax ala blade-->
        @foreach ($inputs as $input )
        <tr>
            <td>{{$input->nama_sepatu}}</td>
            <td>{{$input->warna}}</td>
            <td>{{$input->ukuran}}</td>
            <td>{{$input->jumlah}}</td>
            <td>{{$input->harga}}</td>
            <td>
                <a href="/inputs/{{$input->id}}/edit">Edit</a>
                <form action="/inputs/{{$input->id}}" method="post">
                    @method('DELETE');
                    @csrf
                    <input type="submit" value="Delete">
                </form>

            </td>


        </tr>
        @endforeach

    </tbody>
    <a href="/inputs/create"><b>Create</a>

</table>