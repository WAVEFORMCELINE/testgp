<?php

namespace App\Http\Controllers\Order;

use App\Http\Controllers\Controller;
use App\Http\Requests\order\StoreRequest;
use App\Models\Order;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        Order::firstOrCreate($data);

        return redirect()->route('order.index');
    }
}
