<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function getCustomers(Request $request)
    {
        $data = [];
        $param = $request->input('query');
        $customers = Customer::query()->where('first_name', 'LIKE', '%'.$param.'%')
            ->take(10)
            ->get();

        foreach ($customers as $customer) {
            $data[] = [
                'id'   => $customer->id,
                'name' => $customer->first_name.' '.$customer->last_name,
                'text' => $customer->first_name.' '.$customer->last_name,
            ];
        }

        return response()->json($data);
    }
}
