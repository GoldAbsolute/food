<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    //
    public function handle(Request $request)
    {
        # code...
        $data = $request->validate([
            "name" => ["required", "string", ],
            "email" => ["required", "email", "string", ],
            "phone" => ["required"],
            "date" => ["required"],
            "time" => ["required"],
            "person" => ["required"],
        ]);

        var_dump($data);

        // return redirect(route('home'));

        // return redirect(route('success'));

        return view('success', ['name'=>$data["name"],'email'=>$data["email"], 'phone'=>$data["phone"], 
        'date'=>$data["date"], 'time'=>$data["time"], 'person'=>$data["person"],  ]);
    }

    // public function success($request)
    // {
    //     $data = $request->validate([
    //         "name" => ["required", "string", ],
    //         "email" => ["required", "email", "string", ],
    //         "phone" => ["required"],
    //         "date" => ["required"],
    //         "time" => ["required"],
    //         "person" => ["required"],
    //     ]);
    //     return view('success', ['name'=>$data->name,'email'=>$data->email, 'phone'=>$data->phone, 
    //     'date'=>$data->date, 'time'=>$data->time, 'person'=>$data->person,  ]);
    // }
}
