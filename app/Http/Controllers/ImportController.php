<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Maatwebsite\Excel\Excel;

class ImportController extends Controller
{
    public function index()
    {
        return view('import.index');
    }
    public function importContract(Request $request)
    {
        if($request->hasFile('imported-file')){
            $path = $request->file('imported-file')->getRealPath();
            $data = \Excel::load($path)->get();

            if($data->count()){
                foreach ($data as $key => $value) {
                    //$arr[] = ['title' => $value->title, 'body' => $value->body];
                    $arr[] = $data[$key];
                }
                if(!empty($arr)){
                    dd($arr);
                }
            }
        }
    }
}
