<a href="{{ url("/recap/$model->id_rekap/edit") }}" class="btn btn-warning">Edit</a>
<br>
<form action="{{ url("/recap/$model->id_rekap") }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger mt-2">Hapus</button>
</form>

