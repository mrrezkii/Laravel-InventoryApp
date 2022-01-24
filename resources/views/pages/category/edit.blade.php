@extends('layouts.main')
@section('container')
    <div class="row">
        <div class="col-md-8 offset-md-2 mt-2">
            @if($errors->any())
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
            <h3 class="text-blue font-weight-bold mt-5 mb-5">
                <a class="text-decoration-none" href="{{ url()->previous() }}"><i
                        class="fas fa-arrow-left text-red"></i>&emsp;&emsp;</a>
                Edit {{ $data->nama_kategori }}
            </h3>
            <form action="{{ url("/category/$data->id_kategori") }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group mb-3">
                    <label for="kode_kategori" class="text-title1 text-blue">Kode Kategori</label>
                    <input type="text"
                           class="form-control mt-1 text-title1 text-blue @error('kode_kategori') is-invalid @enderror"
                           id="kode_kategori" name="kode_kategori"
                           placeholder="Kode Kategori" required value="{{ $data->kode_kategori  }}">
                    @error('kode_kategori')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="nama_kategori" class="text-title1 text-blue">Nama Kategori</label>
                    <input type="text"
                           class="form-control mt-1 text-title1 text-blue @error('nama_kategori') is-invalid @enderror"
                           id="nama_kategori" name="nama_kategori"
                           placeholder="Nama Kategori" required value="{{ $data->nama_kategori  }}">
                    @error('nama_kategori')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <button class="btn bg-red text-white mt-4 w-25 text-title2" type="submit">Simpan</button>
            </form>
        </div>
    </div>
@endsection
@section('custom-script')
    <script type="text/javascript">
        $(".custom-file-input").on("change", function () {
            var fileName = $(this).val().split("\\").pop();
            $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
        });
    </script>
    <script type="text/javascript">
        function validateSize(input) {
            const fileSize = input.files[0].size / 1024 / 1024;
            if (fileSize > 1) {
                alert('Ukuran maksimum 1 Mb');
                document.getElementById('customFile').value = "";
            }

            console.log(document.getElementById('output').src = window.URL.createObjectURL(input.files[0]))
        }
    </script>
@endsection

