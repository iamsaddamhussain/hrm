<?php

namespace Database\Seeders;

use App\Models\Lookup;
use Illuminate\Database\Seeder;

class LookupSeeder extends Seeder
{
    private int $displayOrder = 0;

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->seedRoles();
    }

    private function seedRoles(): void
    {
        Lookup::updateOrCreate(['id' => Lookup::ROLE_EMPLOYEE], [
            'value' => 'employee',
            'category' => 'role_type',
            'display_order' => ++$this->displayOrder
        ]);

        Lookup::updateOrCreate(['id' => Lookup::ROLE_ADMIN], [
            'value' => 'admin',
            'category' => 'role_type',
            'display_order' => ++$this->displayOrder
        ]);

        Lookup::updateOrCreate(['id' => Lookup::ROLE_HR], [
            'value' => 'hr',
            'category' => 'role_type',
            'display_order' => ++$this->displayOrder
        ]);
    }
}
