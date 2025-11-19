@extends('layouts.app')

@section('content')
<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Edit Dosen</h1>


<!-- DataTales Example -->
<div class="card shadow mb-4 mt-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Edit Dosen</h6>


    </div>

    <div class="card-body">
        <form action="{{ route('dosen.update', $dosen->id)}}" method="post">
            @csrf
            <div class="form-group">
                <label for="nama_dosen">Nama Dosen</label>
                <input type="text" class="form-control" id="nama_dosen" name="nama_dosen" placeholder="Masukkan Nama Prodi" value="{{ $dosen->nama_dosen }}">

                @error('nama_dosen')
                <small class="text-danger">{{$message}}</small>
                @enderror
            </div>

            <div class="form-group">
                <label for="nidn">Nidn</label>
                <input type="text" class="form-control" id="nidn" name="nidn" placeholder="Masukkan Nidn" value="{{ $dosen->nidn }}">

                @error('nidn')
                <small class="text-danger">{{$message}}</small>
                @enderror
            </div>

            <div class="form-group">
                <label for="prodi">Prodi</label>
                <input type="text" class="form-control" id="prodi" name="prodi" placeholder="Masukkan Prodi" value="{{ $dosen->prodi }}">

                @error('prodi')
                <small class="text-danger">{{$message}}</small>
                @enderror
            </div>


            <div class="form-group">
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </div>
</div>
@endsection