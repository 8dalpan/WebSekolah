<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreguruRequest;
use App\Http\Requests\StoremapelRequest;
use App\Models\Guru;
use App\Models\Mapel;
use App\Models\Siswa;
use Illuminate\Http\Request;
use App\Http\Requests\StoresiswaRequest;
use Symfony\Component\HttpKernel\Event\RequestEvent;

class AdminController extends Controller
{
    //
    public function index(){
        $total_siswa=Siswa::count();
        $total_guru=Guru::count();
        $total_mapel=Guru::count();
        return view('dashboard',compact('total_siswa','total_guru','total_mapel'));
    }
}

