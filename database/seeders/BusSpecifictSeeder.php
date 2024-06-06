<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BusSpecifictSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    private $bus_specificts = [
        [1, "B 2156 TOR"],
        [2, "B 1001 ZZZ"],
        [3, "D 6526 LLC"],
        [4, "A 4901 YYL"],
        [5, "B 8989 SRH"],
        [6, "B 1979 SAH"],
        [7, "B 6703 WJF"],
        [8, "B 5478 RPM"],
        [9, "Z 7454 LCC"],
        [10, "D 8644 YLL"],
    ];

    public function run(): void
    {
        foreach ($this->bus_specificts as $bus_specifict) {
            \App\Models\Bus_Specifict::create([
                "id" => $bus_specifict[0],
                "specifict_name" => $bus_specifict[1],
            ]);
        }
    }
}
