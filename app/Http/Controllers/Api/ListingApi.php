<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ListingResource;
use App\Models\Listing;
use Illuminate\Http\Request;

class ListingApi extends Controller
{
    public function index(){
        return ListingResource::collection(Listing::all());
    }
}
