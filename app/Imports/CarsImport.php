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
            $car = car::where('name',$row[1])->first();
            if($car) {
                $car->qty += 1;
                $car->save();
                return $car;
            } else {
            return new car([
                    'name' => $row[1],
                    'make_id' => 1,
                    'model_id' => 1,
                    'qty' => 1,
                ]);
            }
    }
}
