            @extends('layouts.mainlayout')
            @section('title', 'Halaman Siswa')
            @section('content')
        <div class="container mt-3">
        <button class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#modalSiswa">
                + Tambah Siswa
            </button>



            <div class="modal fade" id="modalSiswa" tabindex="-1">
            <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">

            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title">Tambah Siswa</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>

            <form action="siswa" method="POST">
            @csrf

            <div class="modal-body">

            <div class="row">

            <div class="col-md-6">

            <div class="mb-3">
                <label class="form-label">NIS</label>
                <input type="text" name="nis" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Nama</label>
                <input type="text" name="nama" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Jenis Kelamin</label>
                <select name="jenis_kelamin" class="form-select" required>
                    <option value="">Pilih</option>
                    <option>Laki-laki</option>
                    <option>Perempuan</option>
                </select>
            </div>



            </div>

            <div class="col-md-6">

            <div class="mb-3">
                <label class="form-label">Kelas</label>
                <select name="kelas" class="form-select" required>
                    <option value="">Pilih</option>
                    <option>X</option>
                    <option>XI</option>
                    <option>XII</option>
                </select>
            </div>

            <div class="mb-3">
                <label class="form-label">Jurusan</label>
                <select name="jurusan" class="form-select" required>
                    <option value="">Pilih</option>
                    <option>IPA</option>
                    <option>IPS</option>
                    <option>RPL</option>
                    <option>TKJ</option>
                </select>
            </div>

            <div class="mb-3">
                <label class="form-label">No HP</label>
                <input type="text" name="no_hp" class="form-control">
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
            <h5 class="mb-0">Data Siswa</h5>
        </div>

        <div class="card-body">

        <table class="table table-bordered table-striped table-hover">
        <thead class="table-primary text-center">
        <tr>
            <th>No</th>
            <th>NIS</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Kelas</th>
            <th>Jurusan</th>
            <th>No HP</th>
            <th>Aksi</th>
        </tr>
        </thead>

        <tbody>
            @foreach ($data as $siswa)
        <tr>
            <td class="text-center">{{$loop->iteration}}</td>
            <td>{{$siswa->nis}}</td>
            <td>{{$siswa->nama}}</td>
            <td>{{$siswa->jenis_kelamin}}</td>
            <td>{{$siswa->kelas}}</td>
            <td>{{$siswa->jurusan}}</td>
            <td>{{$siswa->no_hp}}</td>
            <td class="text-center">
                <form action="/siswa/{{$siswa->id}}" method="post">
                    @csrf
                    @method('DELETE')
                <button class="btn btn-sm btn-warning">Edit</button>
                <button class="btn btn-sm btn-danger">Hapus</button>
            </td>
            </form>
        </tr>
            @endforeach


        </tbody>

        </table>

        </div>
        </div>
        </div>
            @endsection
