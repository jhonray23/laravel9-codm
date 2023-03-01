<?php

namespace App\Http\Controllers;

use App\Models\Weapons;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class WeaponController extends Controller
{
    public function index() {
        $data = array("weapons" => DB::table('weapons')->orderBy('created_at', 'desc')->simplePaginate(10)); 

        return view('loadout', $data);
    }
    public function store(Request $request){
        $validated = $request->validate([
            "name" => ['required', 'min:3'],
            "type" => ['required', 'min:3'],
            "damage" => ['required'],
            "accuracy" => ['required'],
            "range" => ['required'],
            "fire_rate" => ['required'],
            "mobility" => ['required'],
            "control" => ['required'],
        ]);

        Weapons::create($validated);

        return redirect('/loadout')->with('message', 'Data was addedd successfully');;
    }

    public function show($id){
        $data = Weapons::findOrFail($id);
        return view('edit', ['weapon' => $data]);
    }

    public function update(Request $request, Weapons $weapon){
        $validated = $request->validate([
            "name" => ['required', 'min:3'],
            "type" => ['required', 'min:3'],
            "damage" => ['required'],
            "accuracy" => ['required'],
            "range" => ['required'],
            "fire_rate" => ['required'],
            "mobility" => ['required'],
            "control" => ['required'],
        ]);

        $weapon->update($validated);
        return redirect('/loadout')->with('message', 'Data was successfully updated');
    }

    public function destroy(Weapons $weapon){
        $weapon->delete();
        return redirect('/loadout');

    }
}
