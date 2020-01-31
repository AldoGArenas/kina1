<?php

namespace App\Http\Controllers;

use App\Models\ImagenProducto;
use Illuminate\Http\Request;
use App\Models\Producto;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ProductoController extends Controller
{
    
    public function index()
    {
        $productos = Producto::all();
        return view('producto')->with('productos',$productos);
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
            $producto->nombre = $request->nombre;
            $producto->descripcion = $request->descripcion;
            $producto->precio = $request->precio;
            $producto->save();
            
            foreach ($request->imagenes as $file) {
                $path = public_path() . '/imagenes/producto';
                $fileName = uniqid() . $file->getClientOriginalName();
                $file->move($path, $fileName);
                
                $imagen = new ImagenProducto();
                $imagen->imagen = $fileName;
                $imagen->idProducto = $producto->id;
                $imagen->save();
            }

            DB::commit();
            return redirect()->route('productos');
        } catch (\Exception $e) {
            DB::rollback();
            return $e;
        }

    }

    public function show($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        DB::beginTransaction();
        try {
            
            $producto = Producto::find($id);
            $producto->nombre = $request->nombre;
            $producto->descripcion = $request->descripcion;
            $producto->precio = $request->precio;
            $producto->save();
            
            
            $imagenes = ImagenProducto::where('idProducto',$producto->id)->get();
            foreach ($imagenes as $key) {
                $path = public_path() . '/imagenes/producto/';
                Storage::delete($path.$key);
                ImagenProducto::find($key->id)->delete();
            }

            foreach ($request->imagenes as $file) {
                $path = public_path() . '/imagenes/producto';
                $fileName = uniqid() . $file->getClientOriginalName();
                $file->move($path, $fileName);
                
                $imagen = new ImagenProducto();
                $imagen->imagen = $fileName;
                $imagen->idProducto = $producto->id;
                $imagen->save();
            }

            DB::commit();
            return redirect()->route('productos');
        } catch (\Exception $e) {
            DB::rollback();
            return $e;
        }
    }

    public function destroy(Request $request,$id)
    {
        DB::beginTransaction();
        try {
            $producto = Producto::find($id);
            
            $imagenes = ImagenProducto::where('idProducto',$producto->id)->get();
            foreach ($imagenes as $key) {
                $path = public_path() . '/imagenes/producto/';
                Storage::delete($path.$key);
                ImagenProducto::find($key->id)->delete();
            }    
            
            $producto->delete();
            DB::commit();
            return redirect()->route('productos');
        } catch (\Exception $e) {
            DB::rollback();
            return $e;
        }

    }
}
