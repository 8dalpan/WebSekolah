<?php

namespace App\Http\Controllers;

use App\Models\Mapel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoremapelRequest;

class MapelController extends Controller
{
    public function index(){
        $data=Mapel::all();
        return view('mapel',compact('data'));
    }

    public function store(StoremapelRequest $request){
    Mapel::create($request->validated());
    return  redirect('mapel');
    }

    public function show($id){
        $mapel=Mapel::findOrFail($id);
        return view('editmapel',compact('mapel'));
        }

        public function update(Request $request,$id){
            $request->validate([
                'nama_mapel' => 'required',
]);
            Mapel::findOrFail($id)->update($request->all());
            return redirect('/mapel');
        }

        public function destroy($id){
            $data=Mapel::findOrFail($id);
            $data->delete();
            return redirect('/mapel');
        }
}
