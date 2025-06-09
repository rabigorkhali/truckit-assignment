<?php

namespace App\Http\Controllers;

use App\Services\AutoSuggestService;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class AutoSuggestController extends Controller
{
    private AutoSuggestService $autoSuggestService;

    public function __construct(AutoSuggestService $autoSuggestService)
    {
        $this->autoSuggestService = $autoSuggestService;
    }

    public function index()
    {
        return view('autosuggest.index');
    }

    public function suggest(Request $request): JsonResponse
    {
        $query = $request->get('query');
        $result = $this->autoSuggestService->getCategory($query);
        
        return response()->json($result);
    }
} 