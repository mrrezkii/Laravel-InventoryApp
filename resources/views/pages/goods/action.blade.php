<a href="{{ url("/goods/$model->kode_barang/edit") }}" class="btn btn-warning">Edit</a>
<br>
<form action="{{ url("/goods/$model->kode_barang") }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger mt-2">Hapus</button>
</form>

