            @extends('layouts.mainlayout')
            @section('title', 'Halaman Edit Mapel')
            @section('content')
            <div class="container mt-3 ">
            <div class="card shadow">
            <div class="card-header bg-primary text-white">
            <h5 class="mb-0">Edit Mapel</h5>
        </div>
            <form action="/mapel/{{$mapel->id}}/" method="POST" class="form-control">
            @csrf
            @method('PUT')
            <div class="modal-body">
            <div class="row">
            <div class="col-md-12">
            <div class="mb-3">
                <label class="form-label">Nama Mata Pelajaran </label>
                <input type="text" name="nama_mapel" class="form-control"  value="{{$mapel->nama_mapel}}">
                @error('nama_mapel')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            </div>
            </div>
            </div>

            <div class="modal-footer">
            <a href="/mapel" class="btn btn-danger m-2">Batal</a>
            <button type="submit" class="btn btn-primary">Simpan</button>
            </div>

            </form>
            </div>
            </div>
@endsection
