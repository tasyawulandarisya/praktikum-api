@extends('layouts.app')

@section('content')
<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Edit Mahasiswa</h1>


<!-- DataTales Example -->
<div class="card shadow mb-4 mt-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Edit Mahasiswa</h6>


    </div>

    <div class="card-body">
        <form action="{{ route('mahasiswa.update', $mahasiswa->id)}}" method="post">
            @csrf
            <div class="form-group">
                <label for="nama_mahasiswa">Nama Mahasiswa</label>
                <input type="text" class="form-control" id="nama_mahasiswa" name="nama_mahasiswa" placeholder="Masukkan Nama Prodi" value="{{ $mahasiswa->nama_mahasiswa }}">

                @error('nama_mahasiswa')
                <small class="text-danger">{{$message}}</small>
                @enderror
            </div>

            <div class="form-group">
                <label for="nim">Nim</label>
                <input type="text" class="form-control" id="nim" name="nim" placeholder="Masukkan Nim" value="{{ $mahasiswa->nim }}">

                @error('nim')
                <small class="text-danger">{{$message}}</small>
                @enderror
            </div>

            <div class="form-group">
                <label for="prodi_id">Prodi</label>
                <select class="form-control" name="prodi_id" id="prodi_id">
                    @foreach($prodi as $item)
                        <option value="{{ $item->id }}" 
                            {{ $item->id == $mahasiswa->prodi_id }}>
                            {{ $item->nama_prodi }}
                        </option>
                    @endforeach
                </select>

                @error('prodi_id')
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