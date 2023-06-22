<?php

namespace App\Http\Controllers;

use App\Models\Saved_link;
use Illuminate\Http\Request;

class LinkController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'link' => ['required', 'url']
        ]);
        $new_link = new Saved_link();
        $new_link->timestamps = false;
        $new_link->real_url = $request->link;
        $new_link->save();

        return view('results', ['link'=> $new_link]);


    }


    public function redirect($link)
    {
        $found_link = Saved_link::findOrFail(intval($link));
        return redirect()->to($found_link->real_url);
    }

}
