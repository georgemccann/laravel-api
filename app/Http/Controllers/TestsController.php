<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tests;

class TestsController extends Controller
{
    public function index() {
        $tests = Tests::all();
        return response()->json($tests);
    }

    public function show($id) { 
        $test = Tests::where('testId', $id)->get(); 
 
        if ($test->count() != 0) {
            return response()->json($test);
        } else {
            return response()->json(['message' => 'Test not found'], 404);
        }
    }

    public function update(Request $request, $id) {
        if (Tests::where('testId', $id)->exists()) {
            $test = Tests::find($id);
            $test->testName = is_null($request->testName) ? $test->testName : $request->testName;
            $test->save();
            return response()->json(['message' => 'Test updated successfully']);
        } else {
            return response()->json(['message' => 'Unable to update test']);
        }
    }
}
