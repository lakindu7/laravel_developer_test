<?php

namespace Modules\BusOwner\Http\Controllers;

use App\Http\Resources\ReturnResource;
use App\Http\Resources\ReturnResourceCollection;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\BusOwner\Entities\BusOwner;
use Modules\BusOwner\Http\Requests\BusOwnerStoreRequest;
use Modules\BusOwner\Http\Requests\BusOwnerUpdateRequest;

class BusOwnerController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        return response()->json(new ReturnResourceCollection(BusOwner::paginate(5)),200);
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('busowner::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(BusOwnerStoreRequest $request)
    {
        return response()->json(new ReturnResource(BusOwner::create($request->validated())),201);
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        $busowner = BusOwner::find($id);

        if($busowner){
            return response()->json(new ReturnResource($busowner),200);
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
        return view('busowner::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(BusOwnerUpdateRequest $request, $id)
    {
        $busowner = BusOwner::find($id);

        if($busowner){
            return response()->json($busowner->update($request->validated()),200);
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
