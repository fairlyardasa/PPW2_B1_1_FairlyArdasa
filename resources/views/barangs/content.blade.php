<table class="table table-striped">
    <thead>
        <tr>
            <th>id</th>
            <th>Nama Barang</th>
            <th>Harga</th>
            <th>Stok</th>
            <th>Suplier</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($barangs as $barang)
        <tr>
            <td>{{$barang -> id}}</td>
            <td>{{$barang -> nama_barang}}</td>
            <td>{{"Rp ".number_format($barang->harga, 2, ',','.')}}</td>
            <td>{{$barang -> stok}}</td>
            <td>{{$barang -> suplier}}</td>
            <td class="d-flex flex-row gap-1">
                <form class="" action="" method="post">
                    @csrf
                    <button class="btn btn-danger icon-trash"
                        onclick="return confirm('yakin mau dihapus?')"></button>
                </form>
                <form action="" method="post">
                    @csrf
                    <button class="btn btn-primary icon-pencil"></button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>