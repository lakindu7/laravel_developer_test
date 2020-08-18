<?php

namespace Modules\User\Http\Controllers;

use App\Http\Resources\ReturnResource;
use App\Http\Resources\ReturnResourceCollection;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\User\Entities\User;
use Modules\User\Http\Requests\UserStoreRequest;
use Modules\User\Http\Requests\UserUpdateRequest;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        return response()->json(new ReturnResourceCollection(User::paginate(5)),200);
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('user::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(UserStoreRequest $request)
    {
        return response()->json(new ReturnResource(User::create($request->validated())),201);
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        $user = User::find($id);

        if($user){
            return response()->json(new ReturnResource($user),200);
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
        return view('user::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(UserUpdateRequest $request, $id)
    {
        $user = User::find($id);

        if($user){
            return response()->json($user->update($request->validated()),200);
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
