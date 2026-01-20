            @extends('layouts.mainlayout')
            @section('title', 'Halaman Siswa')
            @section('content')
        <div class="container mt-3">
        <button class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#modalSiswa">
                + Tambah Siswa
            </button>
            @if (Session::has('status'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ Session::get('message') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
            @endif
            <div class="modal fade" id="modalSiswa" tabindex="-1">
            <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">

            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title">Tambah Siswa</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>

            <form action="/siswa" method="POST">
            @csrf

            <div class="modal-body">

            <div class="row">

            <div class="col-md-6">

            <div class="mb-3">
                <label class="form-label">NIS</label>
                <input type="text" name="nis" class="form-control" required >
            </div>

            <div class="mb-3">
                <label class="form-label">Nama</label>
                <input type="text" name="nama" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Jenis Kelamin</label>
                <select name="jenis_kelamin" class="form-select" required>
                    <option value="">Pilih</option>
                    <option value="L">Laki-laki</option>
                    <option value="P">Perempuan</option>
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
                    <option value="DKV">DKV</option>
                    <option value="RPL">RPL</option>
                    <option value="TKJ">TKJ</option>

                </select>
            </div>

            <div class="mb-3">
                <label class="form-label">Mata Pelajaran</label>
                <select name="mapel_id" class="form-select" required>
                    <option value="">Pilih Mapel</option>
                    @foreach($mapels as $mapel)
                    <option value="{{ $mapel->id }}">
                    {{ $mapel->nama_mapel }}
                    </option>
                    @endforeach
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
            <th>Nama Mapel</th>
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
            <td>{{ $siswa->mapel->nama_mapel }}</td>
            <td class="text-center ">
                <div class="d-flex justify-content-center gap-1">
                <a href="/siswa/{{ $siswa->id }}"
                    class="btn btn-sm btn-warning">
                        Edit
                </a>
                <form action="/siswa/{{$siswa->id}}" method="post"
                    onsubmit="return confirm('Yakin mau hapus data ini?')">
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
                {{$data->links()}}
        </div>

        </div>
        </div>
        </div>
            @endsection
