<?php

use App\Models\Cheeses;
use Illuminate\Database\Seeder;

class CheesesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Mocarela, 79
        //Čederis, 123
        //Šveicariškas, 98

        $cheese = [
            ['id' => 'mozzarella', 'name' => 'Mocarela', 'calories' => 79],
            ['id' => 'cheddar', 'name' => 'Čederis', 'calories' => 123],
            ['id' => 'swiss', 'name' => 'Šveicariškas', 'calories' => 98],
        ];


        DB::beginTransaction();
        try {
            foreach ($cheese as $single) {
                $record = Cheeses::find($single['id']);
                if (!$record)
                    Cheeses::create($single);
            }

        } catch (Exception $e) {
            DB::rollback();
            echo 'Klaidele' . $e->getCode() . ' ' . $e->getMessage();
        }

        DB::commit();

        //Cheeses::insert($cheese);
    }
}
