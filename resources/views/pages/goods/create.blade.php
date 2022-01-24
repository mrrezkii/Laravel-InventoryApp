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
                Tambah Barang
            </h3>
            <form action="{{ url("/goods") }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group mb-3">
                    <label for="kode_barang" class="text-title1 text-blue">Kode Barang</label>
                    <input type="text"
                           class="form-control mt-1 text-title1 text-blue @error('kode_barang') is-invalid @enderror"
                           id="kode_barang" name="kode_barang"
                           placeholder="Kode Barang" required value="{{ old('kode_barang')  }}">
                    @error('kode_barang')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="kode_kategori" class="text-title1 text-blue">Kategori</label>
                    <select
                        class="custom-select text-title1 text-blue mt-1 @error('kode_kategori') is-invalid @enderror"
                        id="kode_kategori" name="kode_kategori" required>
                        <option value="" disabled selected>Kategori</option>
                        @foreach($dataKategori as $kategori)
                            <option value="{{ $kategori->kode_kategori }}">{{ $kategori->kode_kategori }}
                                - {{ $kategori->nama_kategori }}</option>
                        @endforeach
                    </select>
                    @error('kode_kategori')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="nama_barang" class="text-title1 text-blue">Nama Barang</label>
                    <input type="text"
                           class="form-control mt-1 text-title1 text-blue @error('nama_barang') is-invalid @enderror"
                           id="nama_barang" name="nama_barang"
                           placeholder="Nama Barang" required value="{{ old('nama_barang')  }}">
                    @error('nama_barang')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="harga_barang" class="text-title1 text-blue">Harga Barang</label>
                    <input type="number"
                           class="form-control mt-1 text-title1 text-blue @error('harga_barang') is-invalid @enderror"
                           id="harga_barang" name="harga_barang"
                           placeholder="Harga Barang" required value="{{ old('harga_barang')  }}">
                    @error('harga_barang')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="gambar_barang" class="text-title1 text-blue">Gambar Barang</label>
                    <div class="custom-file mt-1">
                        <input type="file"
                               accept="image/jpeg,image/gif,image/png"
                               class="custom-file-input @error('ktp_donor_submissions') is-invalid @enderror"
                               id="customFile" name="gambar_barang" required>
                        <label class="custom-file-label text-title1 text-blue" for="customFile">Choose file</label>
                    </div>
                    @error('ktp_donor_submissions')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="deskripsi_barang" class="text-title1 text-blue">Deskripsi</label>
                    <textarea class="form-control text-title1 text-blue @error('deskripsi_barang') is-invalid @enderror"
                              id="deskripsi_barang" name="deskripsi_barang"
                              rows="3">{{ old('deskripsi_barang') }}</textarea>
                    @error('deskripsi_barang')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="kadaluarsa_barang" class="text-title1 text-blue">Kadaluarsa</label>
                    <input type="date"
                           class="form-control mt-1 text-title1 text-blue @error('kadaluarsa_barang') is-invalid @enderror"
                           id="kadaluarsa_barang" name="kadaluarsa_barang"
                           required value="{{ old('kadaluarsa_barang')  }}">
                    @error('kadaluarsa_barang')
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
@endsection