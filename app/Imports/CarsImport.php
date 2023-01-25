<?php

namespace App\Imports;

use App\Models\car;
use Maatwebsite\Excel\Concerns\ToModel;

class CarsImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new car([
            'make_id' => $row[0],
            'model_id' => $row[1],
            'name' => $row[2],
            'price' => $row[3],
            'used' => $row[4],
            'discount_price' => $row[5],
            'start_date' => $row[6],
            'end_date' => $row[7],
            'short_desc' => $row[8],
            'desc' => $row[9],
            'warranty' => $row[10],
            'engine_capacity' => $row[11],
            'horse_power' => $row[12],
            'maxmum_speed' => $row[13],
            'accleration' => $row[14],
            'transmittion' => $row[15],
            'year' => $row[16],
            'fuel' => $row[17],
            'fuel_usage' => $row[18],
            'country' => $row[19],
            'length' => $row[20],
            'width' => $row[21],
            'ground_clearance' => $row[22],
            'wheel_base' => $row[23],
            'trunk_size' => $row[24],
            'seats' => $row[25],
            'traction_type' => $row[26],
            'clynder' => $row[27],
            'fuel_tank_capacity' => $row[28],
            'comfort' => $row[29],
            'windows' => $row[30],
            'sound_system'  => $row[31],
            'safety' => $row[32],
            'other' => $row[33],
        ]);
    }
}
