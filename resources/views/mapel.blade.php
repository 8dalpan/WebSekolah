@extends('layouts.mainlayout')
@section('title','Halaman Mapel')

@section('content')
<div class="container mt-3">
        <button class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#modalmapel">
                + Tambah Mapel
            </button>
            <div class="modal fade" id="modalmapel" tabindex="-1">
            <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">

            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title">Tambah Mapel</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>

            <form action="mapel" method="POST">
            @csrf

            <div class="modal-body">

            <div class="row">

            <div class="col-md-12">

            <div class="mb-3">
                <label class="form-label">Nama Mata Pelajaran</label>
                <input type="text" name="nama_mapel" class="form-control" required>
            </div>
            </div>

            </div>

            </div>

            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
            <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
            </form>
        </div>
            </div>
                </div>

            {{-- table --}}
            <div class="card shadow">

        <div class="card-header bg-primary text-white">
            <h5 class="mb-0">Data Mapel</h5>
        </div>

        <div class="card-body">

        <table class="table table-bordered table-striped table-hover">
        <thead class="table-primary text-center">
        <tr>
            <th>No</th>
            <th>Mata Pelajaran</th>
            <th>Aksi</th>
        </tr>
        </thead>

        <tbody>
            @foreach ($data as $mapel)
        <tr>
            <td class="text-center">{{$loop->iteration}}</td>
            <td>{{$mapel->nama_mapel}}</td>
            <td class="text-center ">
                <div class="d-flex justify-content-center gap-1">
                <a href="/editmapel/{{$mapel->id}}"
                    class="btn btn-sm btn-warning">
                        Edit
                </a>
                <form action="/deletemapel/{{$mapel->id}}" method="post">
                    @csrf
                    @method('DELETE')
                <button class="btn btn-sm btn-danger">Hapus</button>
                </form>
            </td>
        </div>
        </tr>
            @endforeach


        </tbody>

        </table>
        <div class="my-3 pagination">
        </div>
        </div>
        </div>
        </div>
@endsection
