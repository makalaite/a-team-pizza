<?php

use App\models\Pads;
use Illuminate\Database\Seeder;

class PadsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //pilno grūdo miltų picos padas, 197 kalorijų
        //mielinis picos padas, 378 kalorijų

        $pads = [
            ['id' => 'full_corn_pad', 'name' => 'pilno grūdo miltų picos padas', 'calories' => '197'],
            ['id' => 'yeast_pad', 'name' => 'mielinis picos padas', 'calories' => '378'],

        ];

        //DB::beginTransaction();

        DB::beginTransaction();
        try {

            foreach ($pads as $single) {
                $record = Pads::find($single['id']);
                if (!$record)
                    Pads::create($single);
            }
        } catch (Exception $e) {
            DB::rollback();
            echo 'Klaidele' . $e->getCode() . ' ' . $e->getMessage();
        }

        DB::commit();

        //Pads::insert($pads);
    }
}
