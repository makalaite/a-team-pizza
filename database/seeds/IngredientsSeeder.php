<?php

use App\models\Ingredients;
use Illuminate\Database\Seeder;

class IngredientsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Salami, 35
        //Kumpis, 24
        //Pievagrybiai, 15
        //Alyvuogės, 20
        //Konservuoti svogūnėliai, 18
        //Chalapos paprikos, 25
        //Konservuotos paprikos, 27
        //Aitriosios paprikos, 20
        //Marinuoti agurkėliai, 19
        //Šviežios paprikos, 33
        //Konservuoti ananasai, 26
        //Vištiena, 19
        //Tunas, 33
        //Šoninė, 29
        //Malta kiauliena, 39
        //Svogūnai, 15
        //Saulėje džiovinti pomidorai, 19
        //Artišokai, 19
        //Marinuoti kelmučiai, 12
        //Gražgarstės, 17

        $ingredients = [
            ['id' => 'salami', 'name' => 'Salamis', 'calories' => '35'],
            ['id' => 'ham', 'name' => 'Kumpis', 'calories' => ''],
            ['id' => 'champignons', 'name' => 'Pievagrybiai', 'calories' => '15'],
            ['id' => 'olives', 'name' => 'Alyvuogės', 'calories' => '20'],
            ['id' => 'canned_bulbs', 'name' => 'Konservuoti svogūnėliai', 'calories' => '18'],
            ['id' => 'jalapa_paprika', 'name' => 'Chalapos paprikos', 'calories' => '25'],
            ['id' => 'canned_paprika', 'name' => 'Konservuotos paprikos', 'calories' => '27'],
            ['id' => 'chili_paprika', 'name' => 'Aitriosios paprikos', 'calories' => '20'],
            ['id' => 'pickles', 'name' => 'Marinuoti agurkėliai', 'calories' => '19'],
            ['id' => 'fresh_paprika', 'name' => 'Šviežios paprikos', 'calories' => '33'],
            ['id' => 'canned_pineapple', 'name' => 'Konservuoti ananasai', 'calories' => '26'],
            ['id' => 'chicken', 'name' => 'Vištiena', 'calories' => '19'],
            ['id' => 'tuna', 'name' => 'Tunas', 'calories' => '33'],
            ['id' => 'bacon', 'name' => 'Šoninė', 'calories' => '29'],
            ['id' => 'minced_pork', 'name' => 'Malta kiauliena', 'calories' => '39'],
            ['id' => 'onions', 'name' => 'Svogūnai', 'calories' => '15'],
            ['id' => 'sun_dried_tomatoes', 'name' => 'Saulėje džiovinti pomidorai', 'calories' => '19'],
            ['id' => 'artichokes', 'name' => 'Artišokai', 'calories' => '19'],
            ['id' => 'pickled_honey_mushrooms', 'name' => 'Marinuoti kelmučiai', 'calories' => '12'],
            ['id' => 'rucola', 'name' => 'Gražgarstės', 'calories' => '17'],
        ];

        DB::beginTransaction();
        try {
            foreach ($ingredients as $single) {
                $record = Ingredients::find($single['id']);
                if (!$record)
                    Ingredients::create($single);
            }

        } catch (Exception $e) {
            DB::rollback();
            throw new Exeption($e);
            //echo 'Klaidele' . $e->getCode() . ' ' . $e->getMessage();
        }

        DB::commit();


        //Ingredients::insert($ingredients);
    }
}
