<?php

namespace App\Http\Controllers;

use App\Http\Requests\CampingRequest;
use App\Models\Campaign;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class CampaignController extends Controller
{
    public function index(): JsonResponse
    {
        return response()->json($this->getSuccessResponse(Campaign::all()));
    }

    public function create(CampingRequest $request): JsonResponse
    {
        return response()->json($this->getSuccessResponse(Campaign::create($request->all())));
    }

    public function update(CampingRequest $request , int $id): JsonResponse
    {
        return response()->json($this->getSuccessResponse(Campaign::where('id', $id)->update($request->all())));
    }
}
