<?php
use App\Travel;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TravelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 100 ; $i++) { 
            $new_travel =new Travel();
            $new_travel->CodiceViaggio = $faker->bothify('??-#####');
            $new_travel->Stato = $faker->state();
            $new_travel->Citta = $faker->city();
            $new_travel->Prezzo = $faker->randomFloat(2,200,10000);
            $new_travel->save();
        }
    }
}
