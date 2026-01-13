@extends('layouts.mainlayout')
            @section('title','Halaman Guru')
            @section('content')
            <div class="container mt-3 ">
            <form action="guru" method="POST" class="form-control">
        @csrf
        <div class="modal-body">

            <div class="row">

            <!-- KIRI -->
            <div class="col-md-6">

                <div class="mb-3">
                <label>NIP</label>
                <input type="text" name="nip" class="form-control" value="{{$guru->nama}}" required>
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
            <button type="button" class="btn btn-secondary m-2" data-bs-dismiss="modal">
                Batal
            </button>
            <button type="submit" class="btn btn-primary">
                Simpan
            </button>
            </div>
            </form>
        </div>
            @endsection
