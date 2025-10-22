@extends('layouts.app')   

@section('content')
<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Daftar Fakultas</h1>
<a href="{{ route('fakultas.create')}}" class="btn btn-primary">Tambah Fakultas</a>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4 mt-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data Fakultas</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Fakultas</th>
                                            <th>Kode Fakultas</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Fakultas</th>
                                            <th>Kode Fakultas</th>

                                        </tr>
                                    </tfoot>
                                    <tbody>

                            @foreach ($fakultas as $item)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$item->nama_fakultas}}</td>
                                            <td>{{$item->kode_fakultas}}</td>
                                        </tr>
                            @endforeach
                                        
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

@endsection