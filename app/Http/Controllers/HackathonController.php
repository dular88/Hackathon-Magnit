<?php

namespace App\Http\Controllers;

use App\Models\Hackathon;
use Illuminate\Http\Request;
use App\Models\HappinessSurvey;

class HackathonController extends Controller
{
    public function home()
    {
        $questionData = Hackathon::all();
        return view('home', compact('questionData'));
    }

    public function happinessReport()
    {
        $happinessData = HappinessSurvey::all();
        return view('admin.happiness_report', compact('happinessData'));
    }

    public function index(){
        $questionData = Hackathon::all();
        return view('admin.addQuestion', compact('questionData'));
    }

    public function saveQuestion(Request $request){
        $request->validate([
            'question' => 'required',
            'a' => 'required',
            'b' => 'required',
            'c' => 'required',
            'd' => 'required',
            'e' => 'required'
        ]);
        $query = Hackathon::create(['question'=>request('question'),'a'=>request('a'), 'b'=>request('b'), 'c'=>request('c'), 'd'=>request('d'), 'e'=>request('e')]);
        if($query){
            return redirect('addQuestion')->with(['msg' => 'Successfully Saved']);
        }else{
            return redirect('addQuestion')->with(['msg' => 'Something went wrong']);
        }
    }

    public function editQuestion(Request $request){
        $questionData = Hackathon::find($request->id);
        return view('admin.updateQuestion', compact('questionData'));
    }

    public function updateQuestion(Request $request){
        $request->validate([
            'question' => 'required',
            'a' => 'required',
            'b' => 'required',
            'c' => 'required',
            'd' => 'required',
            'e' => 'required'
        ]);
        $hackathon = Hackathon::find($request->id);
        $hackathon->question = $request->question;
        $hackathon->a = $request->a;
        $hackathon->b = $request->b;
        $hackathon->c = $request->c;
        $hackathon->d = $request->d;
        $hackathon->e = $request->e;
        $query = $hackathon->save();
        if($query){
            return redirect('home')->with(['msg' => 'Successfully Updated']);
        }else{
            return redirect('home')->with(['msg' => 'Something went wrong']);
        }
    }

    public function deleteQuestion(Request $request){
        $hackathon = Hackathon::find($request->id);
        $query = $hackathon->delete();
        if($query){
            return redirect('home')->with(['msg' => 'Successfully Deleted']);
        }else{
            return redirect('home')->with(['msg' => 'Something went wrong']);
        }
    }
}
