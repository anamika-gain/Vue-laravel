<?php



namespace Database\Factories;

use App\Models\Bookable;
use Faker\Generator as Faker;
use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Factories\Factory;


class BookableFactory extends Factory
{
    protected $model = Bookable::class;



    public function definition()
    {

        $suffix = [
            'Villa',
            'House',
            'Cottage',
            'Luxury Villas',
            'Cheap House',
            'Rooms',
            'Cheap Rooms',
            'Luxury Rooms',
            'Fancy Rooms'
        ];


        return [
            'title' => $this->faker->city . ' ' . Arr::random($suffix),
            'description' => $this->faker->text(),
            // 'price' => random_int(15, 600)
        ];
    }
}
