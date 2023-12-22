<?php

namespace App\Http\Controllers;

use App\Models\Interaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class InteractionController extends Controller
{


    public function index()
    {

        $interactions = Interaction::all();

        return response()->json(['interactions' => $interactions], 200);
    }
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'label' => 'required|string|max:255',
            'type' => 'required|string|in:button,link',
        ]);
    
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }
    
        $interaction = new Interaction();
        $interaction->label = $request->label;
        $interaction->type = $request->type;
        $interaction->save();
    
        return response()->json(['message' => 'Interaction created successfully'], 201);
    }
    public function update(Request $request, $id)
    {
        $interaction = Interaction::find($id);

        if (!$interaction) {
            return response()->json(['message' => 'Interaction not found'], 404);
        }
        $validator = Validator::make($request->all(), [
            'label' => 'required|string|max:255',
            'type' => 'required|string|in:button,link',
        ]);
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }
        
        $interaction->label = $request->label;
        $interaction->type = $request->type;
        $interaction->updated_by = auth()->id();

        $interaction->save();

        return response()->json(['message' => 'Interaction updated successfully', 'interaction' => $interaction], 200);
    }
    public function destroy($id)
    {
        $interaction = Interaction::find($id);

        if (!$interaction) {
            return response()->json(['message' => 'Interaction not found'], 404);
        }
        $interaction->delete();

        return response()->json(['message' => 'Interaction deleted successfully'], 200);
    }
}
