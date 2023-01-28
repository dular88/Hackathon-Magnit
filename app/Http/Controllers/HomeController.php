<?php

namespace App\Http\Controllers;

use App\Models\Hackathon;
use Illuminate\Http\Request;
use App\Models\HappinessSurvey;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'empno' => 'required',
            'email' => 'required',
            'a1' => 'required',
            'a2' => 'required',
            'a3' => 'required',
            'a4' => 'required',
            'a5' => 'required',
            'a6' => 'required',
        ]);

        if ($validator->fails()) {
            $errors = $validator->errors();
            return redirect()->back()->withErrors($errors);
        }else{
            $total_marks = 1275;

            $happiness_marks = $request->a1 + $request->a2 +$request->a3 + $request->a4 + $request->a5;
            $data = [
               'empno' => $request->empno,
               'email' => $request->email,
               'total_marks' => $total_marks,
               'happiness_marks' => $happiness_marks
            ];

            $HappinessSurvey = new HappinessSurvey();
            $query = $HappinessSurvey->create($data);
            if($query){
                return redirect('/')->with(['msg' => 'Happiness Survey Saved Successfully']);
            }else{
                return redirect('/')->with(['msg' => 'Something went wrong']);
            }

        }


    }
}
