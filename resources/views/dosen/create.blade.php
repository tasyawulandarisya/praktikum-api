@extends('layouts.app')

@section('content')
<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Daftar Dosen</h1>


<!-- DataTales Example -->
<div class="card shadow mb-4 mt-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Dosen</h6>


    </div>

    <div class="card-body">
        <form action="{{ route('dosen.store')}}" method="post">
            @csrf
            <div class="form-group">
                <label for="nama_dosen">Nama Dosen</label>
                <input type="text" class="form-control" id="nama_dosen" name="nama_dosen" placeholder="Masukkan Nama Dosen">

                @error('nama_dosen')
                <small class="text-danger">{{$message}}</small>
                @enderror
            </div>

            <div class="form-group">
                <label for="nidn">Nidn</label>
                <input type="text" class="form-control" id="nidn" name="nidn" placeholder="Masukkan Nidn">

                @error('nidn')
                <small class="text-danger">{{$message}}</small>
                @enderror
            </div>

            <div class="form-group">
                <label for="prodi_id">Program Studi</label>
                <select class="form-control" name="prodi_id" id="prodi_id" required>
                    @foreach($prodi as $item)
                        <option value="{{ $item->id }}">{{ $item->nama_prodi }}</option>
                    @endforeach
                </select>
                @error('prodi_id')
                    <small class="text-danger">{{$message}}</small>
                @enderror
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Tambah</button>
            </div>
        </form>
    </div>
</div>
@endsection