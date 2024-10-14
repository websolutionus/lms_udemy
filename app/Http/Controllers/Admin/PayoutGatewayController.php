<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PayoutGateway;
use Exception;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Stripe\Payout;

class PayoutGatewayController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() : View
    {
        $gateways = PayoutGateway::all();
        return view('admin.payout-gateway.index', compact('gateways'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() : View
    {
        return view('admin.payout-gateway.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:2000',
            'status' => 'required|boolean',
        ]);

        $gateway = new PayoutGateway();
        $gateway->name = $request->name;
        $gateway->description = $request->description;
        $gateway->status = $request->status;
        $gateway->save();
        notyf()->success("Created Successfully!");

        return redirect()->route('admin.payout-gateway.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PayoutGateway $payout_gateway)
    {
        return view('admin.payout-gateway.edit', compact('payout_gateway'));
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PayoutGateway $payout_gateway)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:2000',
            'status' => 'required|boolean',
        ]);

        $payout_gateway->name = $request->name;
        $payout_gateway->description = $request->description;
        $payout_gateway->status = $request->status;
        $payout_gateway->save();

        notyf()->success("Updated Successfully!");

        return redirect()->route('admin.payout-gateway.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PayoutGateway $payout_gateway)
    {
        try {
            $payout_gateway->delete();
            notyf()->success('Deleted Successfully!');
            return response(['message' => 'Deleted Successfully!'], 200);
        }catch(Exception $e) {
            logger("Course Level Error >> ".$e);
            return response(['message' => 'Something went wrong!'], 500);
        }
    }
}
