<a href="{{ url("/category/$model->kode_kategori/edit") }}" class="btn btn-warning">Edit</a>
<br>
<form action="{{ url("/category/$model->kode_kategori") }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger mt-2">Hapus</button>
</form>

