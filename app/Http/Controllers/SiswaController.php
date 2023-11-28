<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\support\facades\DB;
use Spatie\Export\Exporter;

class SiswaController extends Controller
{
    public function index(){
        // $Siswa = Siswa::latest()->paginate(5);
        // return view('tampilkandata',compact('Siswa'))->with('i',(request()->input('page',1)-1)*5);
        $i = 1;
        $siswa = DB::table('siswa')->get();
        return view('tampilkandata',['siswa' => $siswa ,'i' => $i]);
    }
   
   
    public function tambah(){
        return view('form');
    }
    public function store(Request $request){
        DB::table('siswa')->insert([
            'nama' => $request->nama,
            'kelas' => $request->kelas,
            'jurusan' => $request->jurusan,
            'profile_image' => $request->profile_image

            
        ]);
        if($request->hasfile('profile_image')){
            $destination = 'public/images/'.$siswa->profile_image;
            if(File::exists($destination)){
                File::delete($destination);
            }
            $file = $request->file('profile_image');
            $extention = $file->getClientoriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('public/images/',$filename);
            $siswa->profile_image = $filename;
        }

        return redirect('/tampilkandata')->with('toast_success', 'data berhasil disimpan!');
        
    }
    public function edit($id){
        $siswa = DB::table('siswa')->where('id',$id)->first();
        return view('edit',compact('siswa'));

    }public function update(Request $request,$id){
        $data=[
            'nama' => $request->nama,
            'kelas' => $request->kelas,
            'jurusan' => $request->jurusan,
            'profile_image' => $request->profile_image
        ];
        if($request->hasfile('profile_image')){
            $destination = 'public/images/'.$siswa->profile_image;
            if(File::exists($destination)){
                File::delete($destination);
            }
            $file = $request->file('profile_image');
            $filename = time().'.'.$extention;
            $file->move('public/images/',$filename);
            $siswa->profile_image = $filename;
        }


        DB::table('siswa')->where('id',$id)->update($data);
        return redirect('/tampilkandata')->with('toast_success', 'data edit berhasil!');
    }
    public function hapus($id)
    {
        DB::table('siswa')->where('id',$id)->delete();
        return redirect('/tampilkandata')->with('toast_success', 'data berhasil hapus');
    }

    public function generatePPT()
    {
        $data = ['title' => 'Contoh PPT'];

        Exporter::make('powerpoint')
            ->fromView('ppt.example', $data)
            ->download('example.pptx');
    }

}
