<?php

namespace Modules\Bus\Http\Controllers;

use App\Http\Resources\ReturnResource;
use App\Http\Resources\ReturnResourceCollection;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Bus\Entities\BusScheduleBooking;
use Modules\Bus\Http\Requests\BusScheduleBookingStoreRequest;
use Modules\Bus\Http\Requests\BusScheduleBookingUpdateRequest;

class BusScheduleBookingController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        return response()->json(new ReturnResourceCollection(BusScheduleBooking::paginate(5)),200);
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
    public function store(BusScheduleBookingStoreRequest $request)
    {
        return response()->json(new ReturnResource(BusScheduleBooking::create($request->validated())),201);
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        $busschedulebooking = BusScheduleBooking::find($id);

        if($busschedulebooking){
            return response()->json(new ReturnResource($busschedulebooking),200);
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
    public function update(BusScheduleBookingUpdateRequest $request, $id)
    {
        $busschedulebooking = BusScheduleBooking::find($id);

        if($busschedulebooking){
            return response()->json($busschedulebooking->update($request->validated()),200);
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
