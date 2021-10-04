<?php

namespace App\Http\Controllers;

use App\Models\Cuisine;
use Illuminate\Http\Request;
use App\Http\Requests\CuisineRequest;
use Illuminate\Support\Facades\Auth;
use Session;

class CuisineController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(["index", "show"]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $cuisines = Cuisine::all();

        return view('cuisines.index', compact('cuisines'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cuisines.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CuisineRequest $request)
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
            'video' => $request['video']
        ]);

        return redirect()->route('cuisines.index')
            ->with('success', 'Data cuisine berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Cuisine $cuisine)
    {
        return view('cuisines.show', compact('cuisine'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Cuisine $cuisine)
    {

        return view('cuisines.edit', compact('cuisine'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CuisineRequest $request, Cuisine $cuisine)
    {
        $cuisine->cuisine_name = $request['cuisine_name'];
        $cuisine->description = $request['description'];
        $cuisine->ingredients = $request['ingredients'];
        $cuisine->recipe = $request['recipe'];
        $cuisine->save();

        return redirect()->route('cuisines.index')
            ->with('success', 'Data cuisine berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cuisine $cuisine)
    {
        $cuisine->delete();

        return redirect()->route('cuisines.index')
            ->with('success', 'Data cuisine berhasil dihapus');
    }
}
