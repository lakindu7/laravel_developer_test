<?php

namespace Modules\Bus\Http\Controllers;

use App\Http\Resources\ReturnResourceCollection;
use App\Http\Resources\ReturnResource;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Bus\Entities\Bus;
use Modules\Bus\Http\Requests\BusStoreRequest;
use Modules\Bus\Http\Requests\BusUpdateRequest;

class BusController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        return response()->json(new ReturnResourceCollection(Bus::paginate(5)),200);
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('bus::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(BusStoreRequest $request)
    {
        return response()->json(new ReturnResource(Bus::create($request->validated())),201);

    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        $bus = Bus::find($id);

        if($bus){
            return response()->json(new ReturnResource($bus),200);
        }
            return response()->json(['error'=>'Record not found'],404);
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('bus::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(BusUpdateRequest $request, $id)
    {
        $bus = Bus::find($id);

        if($bus){
            return response()->json($bus->update($request->validated()),200);
        }
        return response()->json(['error'=>'Record not found'],404);
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        //
    }
}
