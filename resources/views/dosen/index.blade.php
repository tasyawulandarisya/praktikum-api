@extends('layouts.app')   

@section('content')
<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Daftar Dosen</h1>
<a href="{{ route('dosen.create')}}" class="btn btn-primary">Tambah Dosen</a>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4 mt-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data Dosen</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Dosen</th>
                                            <th>Nidn</th>
                                            <th>Prodi</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>

                            @foreach ($dosen as $item)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$item->nama_dosen}}</td>
                                            <td>{{$item->nidn}}</td>
                                            <td>{{$item->prodi}}</td>
                                            <td>
                                                <a href="{{ route('dosen.edit',$item->id) }}" class="btn btn-primary">Edit</a>
                                                <a href="{{ route('dosen.hapus',$item->id) }}" class="btn btn-danger">Hapus</a>
                                            </td>
                                        </tr>
                            @endforeach
                                        
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

@endsection