<?php

namespace App\Http\Controllers;

use App\Models\ImagenProducto;
use Illuminate\Http\Request;
use App\Models\Producto;
use Illuminate\Support\Facades\DB;

class ProductoController extends Controller
{
    
    public function index()
    {
        return view('producto');
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        DB::beginTransaction();
        try {
            $producto = new Producto();
            $producto->nombre = $request;
            $producto->descripcion = $request;
            $producto->precio = $request;
            $producto->save();
            
            $file = $request->file('file');
            $path = public_path() . '/imagenes/producto';
            $fileName = uniqid() . $file->getClientOriginalName();
        
            $file->move($path, $fileName);
        
            $imagen = new ImagenProducto();
            $imagen->imagen = $fileName;
            $imagen->idProducto = $producto->id;
            $imagen->save();
            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
            return $e;
        }

    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
