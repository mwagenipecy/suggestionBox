<?php

namespace App\Http\Controllers;

use App\Models\Suggestion;
use Illuminate\Http\Request;

class SuggestionController extends Controller
{
    public function store(Request $request){
        $request->validate([

        ]);

        Suggestion::create([

        ]);

        $request->session()->flash('msg_pass',"Your suggestion is successfully registered , and will be taken into account as much as it is important");
                    return redirect('view_my_suggestions');

    }
}
