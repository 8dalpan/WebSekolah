            @extends('layouts.mainlayout')
            @section('title', 'Halaman Siswa')
            @section('content')
            <div class="container mt-3 ">
            <div class="card shadow">
            <div class="card-header bg-primary text-white">
            <h5 class="mb-0">Edit Siswa</h5>
        </div>
            <form action="/editsiswa/{{$siswa->id}}/updatesiswa" method="POST" class="form-control">
            @csrf
            @method('PUT')
            <div class="modal-body">
            <div class="row">
            <div class="col-md-6">
            <div class="mb-3">
                <label class="form-label">NIS</label>
                <input type="text" name="nis" class="form-control" required value="{{$siswa->nis}}">
            </div>

            <div class="mb-3">
                <label class="form-label">Nama</label>
                <input type="text" name="nama" class="form-control" required value="{{$siswa->nama}}">
            </div>

            <div class="mb-3">
                <label class="form-label">Jenis Kelamin</label>
                <select name="jenis_kelamin" class="form-select" required>
                    @if ($siswa->jenis_kelamin =='L')
                    <option value="L"  selected>Laki-laki</option>
                    <option value="P" >Perempuan</option>
                    @else
                    <option value="L"  >Laki-laki</option>
                    <option value="P" selected>Perempuan</option>
                    @endif

                </select>
            </div>
            </div>

            <div class="col-md-6">

            <div class="mb-3">
                <label class="form-label">Kelas</label>
                <select name="kelas" class="form-select" required>
                    @if ($siswa->kelas=='X')
                    <option value="X" selected>X</option>
                    <option value="XI">XI</option>
                    <option value="XII">XII</option>
                    @elseif ($siswa->kelas=='XI')
                    <option value="X" >X</option>
                    <option value="XI"selected>XI</option>
                    <option value="XII">XII</option>
                    @else
                    <option value="X" >X</option>
                    <option value="XI">XI</option>
                    <option value="XII"selected>XII</option>
                    @endif

                </select>
            </div>

            <div class="mb-3">
                <label class="form-label">Jurusan</label>
                <select name="jurusan" class="form-select" required>
                    @if ($siswa->jurusan=='DKV')
                    <option value="DKV" selected>DKV</option>
                    <option>RPL</option>
                    <option>TKJ</option>
                    @elseif ($siswa->jurusan=='RPL')
                    <option>DKV</option>
                    <option selected>RPL</option>
                    <option>TKJ</option>
                    @else
                    <option>DKV</option>
                    <option >RPL</option>
                    <option selected>TKJ</option>
                    @endif

                </select>
            </div>

            <div class="mb-3">
                <label class="form-label">No HP</label>
                <input type="text" name="no_hp" class="form-control" required value="{{$siswa->no_hp}}">
            </div>
            </div>
            </div>
            </div>

            <div class="modal-footer">
            <a href="/siswa" class="btn btn-danger m-2">Batal</a>
            <button type="submit" class="btn btn-primary">Simpan</button>
            </div>

            </form>
            </div>
            </div>
@endsection
