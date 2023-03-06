<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ListingResource;
use App\Models\Listing;
use Illuminate\Http\Request;
use ReflectionFunctionAbstract;

class ListingApi extends Controller
{
    public function index(){
        return ListingResource::collection(Listing::all());
    }
    public function store(Request $request){
        //
    }
    public function show(Listing $listing){
        return new ListingResource($listing);
    }
    public function update(Request $request, Listing $listing){
        //
    }
    public function destroy(Listing $listing){
        //
    }
}
