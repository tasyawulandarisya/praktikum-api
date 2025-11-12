@extends('layouts.app')

@section('content')
<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Edit Prodi</h1>


<!-- DataTales Example -->
<div class="card shadow mb-4 mt-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Edit Prodi</h6>


    </div>

    <div class="card-body">
        <form action="{{ route('prodi.update', $prodi->id)}}" method="post">
            @csrf
            <div class="form-group">
                <label for="nama_prodi">Nama Prodi</label>
                <input type="text" class="form-control" id="nama_prodi" name="nama_prodi" placeholder="Masukkan Nama Prodi" value="{{ $prodi->nama_prodi }}">

                @error('nama_prodi')
                <small class="text-danger">{{$message}}</small>
                @enderror
            </div>

            <div class="form-group">
                <label for="kode_prodi">Kode Prodi</label>
                <input type="text" class="form-control" id="kode_prodi" name="kode_prodi" placeholder="Masukkan Kode Prodi" value="{{ $prodi->kode_prodi }}">

                @error('kode_prodi')
                <small class="text-danger">{{$message}}</small>
                @enderror
            </div>

            <div class="form-group">
                <label for="fakultas_id">Fakultas</label>
                <select class="form-control" name="fakultas_id" id="fakultas_id">

                    <option value="{{$prodi->fakultas->id}}">{{$prodi->fakultas->nama_fakultas}}</option>    
                    @foreach($fakultas as $item)
                    <option value="{{$item->id}}">{{$item->nama_fakultas}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </div>
</div>
@endsection