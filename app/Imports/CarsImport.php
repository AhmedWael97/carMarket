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
            $car = new car([
                    'name' => $row[1],
                    'model_id' => 1,
                    'qty' => 1,
                ]);
                $car->save();
            $props = [
                ['المخزن',3],
                ['اللون', 7],
                ['الموديل', 8],
                ['المجموعة',5],
                ['الصنف الرئيسي',14],
                ['الشاسيه',0],
                ['رقم المخزن',2],
                ['رقم المجموعة',4],
                ['كود اللون',6],
                ['اللوحة',9],
                ['ك المورد', 10],
                ['المورد',11],
                ['تاريخ الوصول',12],
                ['الملاحظات',13],
            ];

            foreach($props as $prop) {
                $property = \App\Models\Property::where('name',$prop[0])->first();
                if($property) {
                    $newPropertyForCar = new \App\Models\CarProperty();
                    $newPropertyForCar->car_id = $car->id;
                    $newPropertyForCar->property_id = $property->id;
                    $newPropertyForCar->value = $row[$prop[1]];
                    $newPropertyForCar->save();
                }
            }
                return $car;
            }
    }
}
