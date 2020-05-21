<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DictionaryController extends Controller
{
    public function getSearchForm()
    {
        return view('dictionary');
    }

    public function translate(Request $request)
    {
        $arr = [
            "mango" => 'quả xoài',
            "apple" => 'quả táo',
            "banana" => 'quả chuối'
        ];

        $keyword = $request->keyword;
        foreach ($arr as $key => $value) {
            if ($key == $keyword) {
                $result = $value;
                break;
            } else {
                $result = 'Không tìm thấy';
            }
        }
        return view('dictionary', compact(['keyword', 'result']));
    }
}
