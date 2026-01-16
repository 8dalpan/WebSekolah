@extends('layouts.mainlayout')
            @section('title','Halaman Edit Guru')
            @section('content')
            <div class="container mt-3 ">
            <div class="container mt-3 ">
            <div class="card shadow">
            <div class="card-header bg-primary text-white">
            <h5 class="mb-0">Edit Guru</h5>
        </div>
            <form action="/editguru/{{$guru->id}}/updateguru" method="POST" class="form-control">
        @csrf
        @method('PUT')
        <div class="modal-body">

            <div class="row">

            <!-- KIRI -->
            <div class="col-md-6">

                <div class="mb-3">
                <label>NIP</label>
                <input type="text" name="nip" class="form-control" value="{{$guru->nip}}" required>
                </div>

                <div class="mb-3">
                <label>Nama</label>
                <input type="text" name="nama" class="form-control" required value="{{$guru->nama}}">
                </div>

                <div class="mb-3">
                <label>Jenis Kelamin</label>
                <select name="jenis_kelamin" class="form-control" required>
                    @if ($guru->jenis_kelamin=='L')
                    <option value="L" selected>Laki-laki</option>
                    <option value="P">Perempuan</option>
                    @else
                    <option value="L" >Laki-laki</option>
                    <option value="P"selected>Perempuan</option>
                    @endif

                </select>
                </div>
                <div class="mb-3">
                <label>Status</label>
                <select name="status_kepegawaian" class="form-control" required>
                @if ($guru->status_kepegawaian=='ASN')
                    <option value="ASN" selected>ASN</option>
                    <option value="PPPK">PPPK</option>
                    <option value="Honorer">Honorer</option>
                @elseif($guru->status_kepegawaian=='Honorer')
                    <option value="ASN" >ASN</option>
                    <option value="PPPK">PPPK</option>
                    <option value="Honorer"selected>Honorer</option>
                    @else
                    <option value="ASN" >ASN</option>
                    <option value="PPPK"selected>PPPK</option>
                    <option value="Honorer">Honorer</option>
                @endif

                </select>
                </div>



            </div>


            <div class="col-md-6">

                <div class="mb-3">
                <label>Mata Pelajaran</label>
                <input type="text" name="mata_pelajaran" class="form-control"  value="{{$guru->mata_pelajaran}}">
                </div>

                <div class="mb-3">
                <label>No HP</label>
                <input type="text" name="no_hp" class="form-control"value="{{$guru->no_hp}}">
                </div>

                <div class="mb-3">
                    <label>Alamat</label>
                <textarea name="alamat" class="form-control" style="white-space: pre-wrap;" rows="3">
                    {{$guru->alamat}}
                </textarea>
                </div>

            </div>

            </div>
        </div>

        <div class="modal-footer">
            <a href="/guru" class="btn m-2 btn-danger">Batal</a>
            <button type="submit" class="btn btn-primary">
                Simpan
            </button>
            </div>
            </form>
        </div>
            </div>
            @endsection
