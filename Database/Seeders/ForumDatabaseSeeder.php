<?php

namespace Modules\Forum\Database\Seeders;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class ForumDatabaseSeeder extends Seeder {
    /**
     * Run the database seeds.
     */
    public function run() {
        Model::unguard();

        // $this->call("OthersTableSeeder");
    }
}
