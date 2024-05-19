<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\User;
use Carbon\Carbon;
use File;
use Auth;
use Illuminate\Support\Facades\Crypt;

class SliderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $menu = 'master';
        $submenu='slider';
        $data = Slider::all();
        $data_param = [
            'menu','submenu','data'
        ];

        return view('master/slider')->with(compact($data_param));
    }
    public function store(Request $request)
    {
        $data['judul'] = $request->judul_add;
        if ($files = $request->file("photo_add")) {
            $destinationPath = 'image/upload/slider/';
            $file = 'Slider_'.Carbon::now()->timestamp. "." .$files->getClientOriginalExtension();
            $files->move($destinationPath, $file);
            $namafile = $destinationPath.$file;
            $data['foto'] = $destinationPath.$file;
        }
        if ($files = $request->file("photo_m_add")) {
            $destinationPath = 'image/upload/slider/';
            $file = 'Slider_Mobile_'.Carbon::now()->timestamp. "." .$files->getClientOriginalExtension();
            $files->move($destinationPath, $file);
            $namafile = $destinationPath.$file;
            $data['foto_m'] = $destinationPath.$file;
        }

        $data['created_by'] = Auth::id();
        $data['created_at'] = Carbon::now()->toDateTimeString();
        $data['updated_by'] = Auth::id();
        $data['updated_at'] = Carbon::now()->toDateTimeString();
        $createdata = Slider::create($data);
        if($createdata){
            return response()->json([
                'status' => true,
                'message' => 'Berhasil menambahkan data'
            ]);
        }else{
            return response()->json([
                'status' => false,
                'message' => 'Gagal. Mohon coba kembali!'
            ]);
        }
    }

    public function update(Request $request, $id)
    {
        $data['judul'] = $request->judul[0];
        if($request->file("photo")){
            if ($files = $request->file("photo")[0]) {
                $dataOld = Slider::find($id);
                File::delete($dataOld->foto);
                $destinationPath = 'image/upload/slider/';
                $file = 'Slider_'.Carbon::now()->timestamp. "." .$files->getClientOriginalExtension();
                $files->move($destinationPath, $file);
                $namafile = $destinationPath.$file;
                $data['foto'] = $destinationPath.$file;
            }
        }
        if($request->file("photo-m")){
            if ($files = $request->file("photo-m")[0]) {
                $dataOld = Slider::find($id);
                File::delete($dataOld->foto_m);
                $destinationPath = 'image/upload/slider/';
                $file = 'Slider_Mobile_'.Carbon::now()->timestamp. "." .$files->getClientOriginalExtension();
                $files->move($destinationPath, $file);
                $namafile = $destinationPath.$file;
                $data['foto_m'] = $destinationPath.$file;
            }
        }
        $data['updated_by'] = Auth::id();
        $data['updated_at'] = Carbon::now()->toDateTimeString();

        $updatedata = Slider::find($id)->update($data);

        if($updatedata){
            return response()->json([
                'status' => true,
                'message' => 'Data berhasil diubah'
            ]);
        }else{
            return response()->json([
                'status' => false,
                'message' => 'Gagal. Mohon coba kembali!'
            ]);
        }
    }

    public function destroy($id)
    {
        $data['deleted_by'] = Auth::id();
        $data['deleted_at'] = Carbon::now()->toDateTimeString();
        $updateData = Slider::find($id)->update($data);
        return response()->json([   
            'status' => true,
            'message' => 'Data berhasil dihapus'
        ]);
    }
}
