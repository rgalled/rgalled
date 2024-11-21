<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SubirControladores extends Controller
{
    function img(Request $request, $file)
    {
        if (file_exists(storage_path('app/private/carpeta/') . $file)) {
            return response()->file(storage_path('app') . '/private/carpeta/' . $file);
        }
    }
    function index()
    {
        return view('subir.index');
    }
    function subir(Request $request)
    {
        //dd($request->file('file'));
        if ($request->hasFile('file') && $request->file('file')->isValid()) {
            $nombreOriginal = $request->file('file')->getClientOriginalName();
            $path = $request->file('file')->storeAs('storage/carpeta', $nombreOriginal);
            echo $path;
        }
    }

    function view()
    {

    }
}
