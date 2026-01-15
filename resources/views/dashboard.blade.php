@extends('layouts.mainlayout')
@section('title','Dashboard')
@section('content')
 <!-- CONTENT -->
        <div class="container-fluid mt-4">
            <!-- CARDS -->
            <div class="row g-3">

                <div class="col-md-3">
                    <div class="card border-primary">
                        <div class="card-body">
                            <h4 class="text-primary">{{$total_siswa}}</h4>
                            <p>Total Siswa</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card border-primary">
                        <div class="card-body">
                            <h4 class="text-primary">{{$total_guru}}</h4>
                            <p>Total Guru</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card border-primary">
                        <div class="card-body">
                            <h4 class="text-primary">12</h4>
                            <p>Kelas</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card border-primary">
                        <div class="card-body">
                            <h4 class="text-primary">8</h4>
                            <p>Jurusan</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection

