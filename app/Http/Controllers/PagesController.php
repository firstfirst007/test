<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function services() {
        $data = array(
            'title' => 'Services',
            'services' => ['Web Develop', 'Front End', 'Back End']
        );

        return view('pages.services')->with($data);
    }
}
