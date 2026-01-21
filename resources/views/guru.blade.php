            @extends('layouts.mainlayout')
            @section('title','Halaman Guru')
            @section('content')

        <div class="container mt-3">
            <button class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#modalTambah">
        + Tambah Guru
    </button>


    <div class="modal fade" id="modalTambah" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

        <div class="modal-header">
            <h5 class="modal-title">Tambah Data Guru</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>

        <form action="/guru" method="POST">
        @csrf

        <div class="modal-body">

            <div class="row">

            <!-- KIRI -->
            <div class="col-md-6">

                <div class="mb-3">
                <label>NIP</label>
                <input type="text" name="nip" class="form-control" required>
                </div>

                <div class="mb-3">
                <label>Nama</label>
                <input type="text" name="nama" class="form-control" required>
                </div>

                <div class="mb-3">
                <label>Jenis Kelamin</label>
                <select name="jenis_kelamin" class="form-control" required>
                    <option value="">-- Pilih --</option>
                    <option value="L">Laki-laki</option>
                    <option value="P">Perempuan</option>
                </select>
                </div><div class="mb-3">
                <label>Status</label>
                <select name="status_kepegawaian" class="form-control" required>
                    <option value="">-- Pilih --</option>
                    <option value="ASN">ASN</option>
                    <option value="PPPK">PPPK</option>
                    <option value="Honorer">Honorer</option>
                </select>
                </div>
            </div>


            <div class="col-md-6">

                <div class="mb-3">
                <label>Mata Pelajaran</label>
                <input type="text" name="mata_pelajaran" class="form-control" required>
                </div>

                <div class="mb-3">
                <label>No HP</label>
                <input type="text" name="no_hp" class="form-control">
                </div>

                <div class="mb-3">
                    <label>Alamat</label>
                <textarea name="alamat" class="form-control" rows="3"></textarea>
                </div>

            </div>

            </div>
        </div>

        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                Batal
            </button>
            <button type="submit" class="btn btn-primary">
                Simpan
            </button>
            </div>

            </form>

        </div>
        </div>
    </div>
    <div class="my-3 col-12 col-sm-6 col-md-6">
        <form class="d-flex" role="search">
            <input class="form-control me-1" type="search" placeholder="Search" aria-label="Search" name="keyword"/>
            <button class="btn btn-primary" type="submit">Search</button>
        </form>
        </div>
                    {{-- table --}}
                <div class="card shadow">
                <div class="card-header bg-primary text-white">
                    <h5 class="mb-0">Data Guru</h5>
                    </div>
                    <div class="card-body">
                    <table class="table table-bordered table-striped table-hover">
                    <thead class="table-primary text-center">
                    <tr>
                        <th>No</th>
                        <th>NIP</th>
                        <th>Nama</th>
                        <th>Jenis Kelamin</th>
                        <th>Mata Pelajaran</th>
                        <th>No HP</th>
                        <th>Alamat</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                    </thead>

                    <tbody>
                        @foreach ($data as $guru)
                    <tr>
                        <td class="text-center">{{$loop->iteration}}</td>
                        <td>{{$guru->nip}}</td>
                        <td>{{$guru->nama}}</td>
                        <td>{{$guru->jenis_kelamin}}</td>
                        <td>{{$guru->mata_pelajaran}}</td>
                        <td>{{$guru->no_hp}}</td>
                        <td>{{$guru->alamat}}</td>
                        <td>{{$guru->status_kepegawaian}}</td>
                        <td class="text-center">
                        <div class="d-flex gap-1 justify-content-center">
                        <a href="/guru/{{$guru->id}}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="/guru/{{$guru->id}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger">Hapus</button>
                        </td>
                        </div>
                        </form>
                    </tr>
                        @endforeach


                    </tbody>

                    </table>
                    <div class="my-3 pagination">
                        {{$data->withquerystring()-> links()}}
                    </div>
                    </div>
        </div>
            @endsection
