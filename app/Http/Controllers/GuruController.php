<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreguruRequest;

class GuruController extends Controller
{
    public function index(Request $request){
        $keyword=$request->keyword;
        $data=Guru::where('nip','LIKE','%'.$keyword.'%')
        ->orwhere('nama','LIKE','%'.$keyword.'%')
        ->orwhere('status_kepegawaian','LIKE','%'.$keyword.'%')
        ->Paginate(5);
        return view('guru',compact('data'));
    }

    public function store(StoreguruRequest $request){
        Guru::create($request->validated());
        return redirect('/guru');
        }
        public function show($id){
            $guru=Guru::findOrFail($id);
            return view('editguru',compact('guru'));
        }
        public function update(Request $request,$id){
        $guru=Guru::findOrFail($id);
        $guru->update($request->only([
            'nip','nama','jenis_kelamin','mata_pelajaran','no_hp','alamat','status_kepegawaian'
        ]));
        return redirect('/guru');
    }
    public function destroy($id){
        $guru=Guru::findOrFail($id);
        $guru->delete();
        return redirect('/guru');
    }
}
