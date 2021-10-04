<?php

namespace App\Http\Controllers;

use App\Models\Cuisine;
use Illuminate\Http\Request;
use App\Http\Requests\CuisineRequest;
use Illuminate\Support\Facades\Auth;
use Session;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $cuisines = Cuisine::where('verification', '0')->get();

        return view('admins.index', compact('cuisines'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admins.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $file = $request['photo'];

        $nama_file = time() . '_' . $file->getClientOriginalName();

        // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'cuisines_photo';
        $file->move($tujuan_upload, $nama_file);

        $user = Auth::user();
        Cuisine::create([
            'cuisine_name' => $request['cuisine_name'],
            'description' => $request['description'],
            'ingredients' => $request['ingredients'],
            'recipe' => $request['recipe'],
            'photo' => $nama_file,
            'user_id' => $user->id,
        ]);

        return redirect()->route('admins.index')
            ->with('success', 'Data cuisine berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Cuisine $admin)
    {
        return view('admins.show', compact('admin'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Cuisine $admin)
    {

        return view('admins.edit', compact('admin'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cuisine $admin)
    {
        $admin->cuisine_name = $request['cuisine_name'];
        $admin->description = $request['description'];
        $admin->ingredients = $request['ingredients'];
        $admin->recipe = $request['recipe'];
        $admin->save();

        return redirect()->route('admins.index')
            ->with('success', 'Data cuisine berhasil diubah');
    }

    public function verification(Request $request, Cuisine $admin)
    {
        $admin->verification = '1';
        $admin->save();

        return redirect()->route('admins.index')
            ->with('success', 'Data cuisine berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cuisine $admin)
    {
        $admin->delete();

        return redirect()->route('admins.index')
            ->with('success', 'Data cuisine berhasil dihapus');
    }
}
