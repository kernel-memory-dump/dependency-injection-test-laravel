<?php

namespace App\Http\Controllers;

use App\Contracts\IDemoService;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function __construct(private IDemoService $demoService) {}
    

    public function demoService(Request $request) {
        $testVal = $this->demoService->demoMethod();
        return  response()->json(['data' => $testVal], 200);
    }
}
