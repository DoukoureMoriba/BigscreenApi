<?php

namespace Database\Seeders;

use App\Models\Types;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $type = new Types();
        $type->name_type = 'A';
        $type->save();

        $type = new Types();
        $type->name_type = 'B';
        $type->save();

        $type = new Types();
        $type->name_type = 'C';
        $type->save();
    }
}
