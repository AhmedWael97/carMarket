<?php

namespace App\Imports;

use App\Models\car;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;

class CarsImport implements ToModel, WithStartRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */

    public function startRow(): int
    {
        return 2;
    }
    public function model(array $row)
    {
        $car = car::where('name',$row[2])->first();
        if($car != null) {
            $car->qty = $car->qty +1;
            $car->save();
            return $car;
        } else {

        $make_id = 1;
        $model = 1;
        $make_id = \App\Models\make::find($row[0]);
        if($make_id != null) {
            $make_id = $make_id->id;
        }

        $model = \App\Models\models::find($row[1]);
        if($model != null) {
          $model_id = $model->id;
        }
        return new car([
            'make_id' => $make_id,
            'model_id' => $model_id,
            'name' => $row[2],
            'price' => $row[3],
            'used' => $row[4],
            'discount_price' => $row[5],
            'start_date' => $row[6],
            'end_date' => $row[7],
            'short_desc' => $row[8],
            'desc' => $row[9],
            'warranty' => $row[10],
            'engine_capacity' => $row[12],
            'horse_power' => $row[11],
            'maxmum_speed' => $row[13],
            'accleration' => $row[14],
            'transmittion' => $row[15],
            'year' => $row[16],
            'fuel' => $row[17],
            'fuel_usage' => $row[18],
            'country' => $row[19],
            'supplied_country' => $row[20],
            'length' => $row[21],
            'width' => $row[22],
            'ground_clearance' => $row[23],
            'wheel_base' => $row[24],
            'trunk_size' => $row[25],
            'seats' => $row[26],
            'traction_type' => $row[27],
            'clynder' => $row[28],
            'fuel_tank_capacity' => $row[29],
            'comfort' => $row[30],
            'windows' => $row[31],
            'sound_system'  => $row[32],
            'safety' => $row[33],
            'other' => $row[34],
        ]);
        }
    }
}
