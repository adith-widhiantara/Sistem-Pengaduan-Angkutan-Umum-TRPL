<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Pengaduan;

class PengaduanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pengaduan = Pengaduan::latest()->paginate(10);
        return view('dinas.pengaduan1', compact('pengaduan'))
            ->with('i', (request()->input('page', 1) - 1) * 10);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index1()
    {
        // $pengaduan = Pengaduan::all();
        $pengaduan = \App\Pengaduan::select("*", "pengaduan.id as pit")
            ->join('users', 'users.id', '=', 'pengaduan.user_id')
            ->get();

        return view('pengaduan', compact('pengaduan'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index2()
    {
        $pengaduan = Pengaduan::latest()->paginate(10);
        return view('dinas.tabelpengaduan1', compact('pengaduan'))
            ->with('i', (request()->input('page', 1) - 1) * 10);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index3()
    {
        $pengaduan = Pengaduan::latest()->paginate(10);
        return view('owner.pengaduan2', compact('pengaduan'))
            ->with('i', (request()->input('page', 1) - 1) * 10);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index4()
    {
        $pengaduan = Pengaduan::latest()->paginate(10);
        return view('owner.tabelpengaduan2', compact('pengaduan'))
            ->with('i', (request()->input('page', 1) - 1) * 10);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pengaduan');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'uraian' => 'required',
            'nama' => 'required',
            'nomor' => 'required',
            'tempat' => 'required',
            'waktu' => 'required',
            'foto' => 'required|image|max:2048',
            'rating' => 'required'
        ]);

        $foto = $request->file('foto');

        $new_name = $request->file('foto')->getClientOriginalName();
        $foto->move(public_path('foto'), $new_name);
        $form_data = array(
            'judul' => $request->judul,
            'uraian' => $request->uraian,
            'nama' => $request->nama,
            'nomor' => $request->nomor,
            'tempat' => $request->tempat,
            'waktu' => $request->waktu,
            'foto' => $new_name,
            'rating' => $request->rating,
            'user_id' => auth()->id()
        );

        Pengaduan::create($form_data);

        return redirect('pengaduan')->with('success', 'Pengaduan telah di kirim');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $pengaaduan = \App\Pengaduan::select("*")
        //     ->join('users', 'users.id', '=', 'pengaduan.user_id')
        //     ->where('id', '=', $id)->first();
        $pengaduan = \App\Pengaduan::where('id', '=', $id)->first();
        $creator = \App\User::where('id', '=', $pengaduan->user_id)->first();
        $comment = \App\Comment::select("*")
            ->join('users', 'users.id', '=', 'comments.user_id')
            ->where('post_id', '=', $pengaduan->id)
            ->get()
            ->sortby('created_at');

        return view('comment', compact('pengaduan', 'creator', 'comment'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show1($id)
    {
        // $pengaaduan = \App\Pengaduan::select("*")
        //     ->join('users', 'users.id', '=', 'pengaduan.user_id')
        //     ->where('id', '=', $id)->first();
        $pengaduan = \App\Pengaduan::where('id', '=', $id)->first();
        $creator = \App\User::where('id', '=', $pengaduan->user_id)->first();
        $comment = \App\Comment::select("*")
            ->join('users', 'users.id', '=', 'comments.user_id')
            ->where('post_id', '=', $pengaduan->id)
            ->get()
            ->sortby('created_at');

        return view('dinas.comment1', compact('pengaduan', 'creator', 'comment'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pengaduan = Pengaduan::findOrFail($id);
        return view('dinas.verifikasi1', compact('pengaduan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit1($id)
    {
        $pengaduan = Pengaduan::findOrFail($id);
        return view('dinas.timeline1', compact('pengaduan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit2($id)
    {
        $pengaduan = Pengaduan::findOrFail($id);
        return view('owner.verifikasi2', compact('pengaduan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'status' => 'required'
        ]);

        $form_data = array(
            'status' => $request->status
        );

        Pengaduan::whereId($id)->update($form_data);

        return redirect('pengaduan1')->with('success', 'Data berhasil di ubah');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update1(Request $request, $id)
    {
        $request->validate([
            'time' => 'required'
        ]);

        $form_data = array(
            'time' => $request->time
        );

        Pengaduan::whereId($id)->update($form_data);
        \App\Notifikasi::create([
            'id' => mt_rand(100,999),
            'pengaduan_id' => $id,
            'deadline' => $request->time,
        ]);


        return redirect('tabelpengaduan1')->with('success', 'Data berhasil di ubah');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update2(Request $request, $id)
    {
        $foto_name = $request->hidden_foto;
        $foto1 = $request->file('foto1');
        if ($foto1 != '') {
            $request->validate([
                'status1' => 'required',
                'foto1' => 'required|image|max:2048'
            ]);
            $foto_name = $request->file('foto1')->getClientOriginalName();
            $foto1->move(public_path('foto1'), $foto_name);
        } else {
            $request->validate([
                'status1' => 'required'
            ]);
        }

        $form_data = array(
            'status1' => $request->status1,
            'foto1' => $foto_name
        );

        Pengaduan::whereId($id)->update($form_data);

        return redirect('tabelpengaduan2')->with('success', 'Data berhasil di ubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pengaduan = Pengaduan::findOrFail($id);
        $pengaduan->delete();
        return redirect('pengaduan1')->with('success', 'Data berhasil di hapus');
    }
}
