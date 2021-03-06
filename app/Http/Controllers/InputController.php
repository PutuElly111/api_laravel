<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Input;

class InputController extends Controller
{
    public function index()
    {
        //memanggil seluruh data didatabase
        $inputs = Input::all(); //Input::all() memanggil modelnya
        return view('inputs.index', compact(['inputs']));
    }

    // function create fungsinya untuk melakukan create data dengan method POST
    public function create()
    {
        return view('inputs.create');
    }

    // function untuk menyimpan data yang dimasukkan ke dalam database
    public function simpan(Request $request)
    {
        Input::create($request->all());
        return  redirect('/inputs');
    }

    // function edit untuk parameter yang dipakek id karena edit tadi menggunakan acuan ID di web.php sama index.blade.php maka disini parameternya harus sama untuk edit
    public function edit($id)
    {
        $input = Input::find($id); //cara disamping digunakan untuk mencari primary key/ID dari data yang ingin diedit
        return view('inputs.edit', compact(['input']));
    }


    //karena diatas untuk editnya sudah selesai maka update di databasenya kalau data dengann $id yang diedit terupdate didatabase
    public function update(Request $request, $id)
    {
        $input = Input::find($id);
        $input->update($request->all());
        return redirect('/inputs');
    }

    public function destroy($id)
    {
        $upload = Input::find($id);
        $upload->delete();
        return redirect('/inputs');
    }
}
