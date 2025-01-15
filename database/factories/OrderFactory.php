<?php

namespace Database\Factories;

use App\Models\Order;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderFactory extends Factory
{
    protected $model = Order::class;

    public function definition()
    {
        $this->faker->addProvider(new \FakerRestaurant\Provider\en_US\Restaurant($this->faker));

        $foodTypes = [
            //List of Additional foods
            'Sup Ayam', 'Nasi Gepuk', 'Nasi Ayam Merah', 'Nasi Lemak', 'Nasi Ayam Penyet', 'Nasi Ikan Keli', 'Nasi Tomato',
            'Ikan Asam Pedas','Kari Ayam', 'Sayur Belacan', 'Nasi Goreng', 'Mee Goreng', 'Nasi Goreng Kampung',
            'Fried Dumpling', 'Dry Dumpling', 'Soup Dumpling','Shawarma', 'Baked Pao', 'Braised Chicken', 'Oden Hotpot',
            'Laksa','Sizlling add on Telur', 'Mee Kari', 'Bakso', 'Chicken Chop', 'Lamb Chop', 'Fries',

            // Beverages
            'Milo Ais', 'Teh Ais', 'Tembikai Ais', 'Vanilla', 'Nescafe', 'Sirap Ais', 'Teh O Ais', 'Chocolate', 'Extra Joss Anggur', 'Extra Jos Manga',

            $this->faker->fruitName(),
            $this->faker->sauceName(),
        ];

        $quantity = $this->faker->numberBetween(1, 5);
        $price = $this->faker->randomFloat(2, 1, 20);

        return [
            'user_id' => $this->faker->numberBetween(1, 10),
            'item_name' => $this->faker->randomElement($foodTypes),
            'quantity' => $quantity,
            'price' => $price,
            'total_amount' => $quantity * $price,
            'status' => $this->faker->randomElement(['completed', 'pending', 'cancelled']),
            'order_date' => $this->faker->dateTimeBetween('-1 month', 'now')
        ];
    }
}
