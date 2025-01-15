<?php

namespace App\Http\Controllers;
use Faker\Factory as Faker;
use Illuminate\Http\Request;
use App\Models\Delivery;

class DeliveryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // You can retrieve the delivery status or other information here
        return view('delivery');
    }

    public function generateFakeData()
    {
        $faker = Faker::create();

        // Loop to create 5 records with order_id from #001 to #005
        for ($i = 1; $i <= 5; $i++) {
            Delivery::create([
                'delivery_id' => '#00' . $i,
                'order_id' => '#00' . $i, // Generate order_id like #001, #002, etc.
                'delivery_status' => $faker->word,
                'delivery_address' => $faker->address,
                'delivery_date' => $faker->date,
                'delivery_time' => $faker->time,
            ]);
        }
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        {
            // Validate incoming data
            $validated = $request->validate([
                'delivery_id' => 'required|string',
                'order_id' => 'required|string',
                'delivery_status' => 'required|string|max:50',
                'delivery_address' => 'required|string|max:255',
                'delivery_date' => 'required|string|max:50',
                'delivery_time' => 'required|string|max:50',
            ]);

            // Create and store the delivery data
            $delivery = Delivery::create([
                'delivery_id' => $validated['delivery_id'],
                'order_id' => $validated['order_id'],
                'delivery_status' => $validated['delivery_status'],
                'delivery_address' => $validated['delivery_address'],
                'delivery_date' => $validated['delivery_date'],
                'delivery_time' => $validated['delivery_time'],
            ]);

            // Return a success response
            return response()->json(['message' => 'Delivery data added successfully!', 'data' => $delivery], 201);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
