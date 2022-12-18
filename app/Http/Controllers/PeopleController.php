<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\People;
use Illuminate\Http\JsonResponse;
use App\Requests\PeoplePostRequest;
use Illuminate\Support\Facades\DB;

class PeopleController extends Controller{

    public function index(): JsonResponse
    {
        return response()->json(People::all(), 200);
    }

    public function store(Request $request): JsonResponse
    {  
        $people = People::create($request->all());
        $people->save();
        return response()->json(null, 201);
    }

    public function show($id): JsonResponse
    {
       $people = DB::table('peoples')->where('id', $id)->first();
       return response()->json($people, 200);
    }

    public function update(Request $request, $id): JsonResponse
    {
        $people=People::find($id);
        $people->update($request->all());
        return response()->json($people, 200);
    }

    public function destroy($id): JsonResponse
    {
        DB::table('peoples')->where('id', $id)->delete();
        return response()->json(null, 200);
    }
}
