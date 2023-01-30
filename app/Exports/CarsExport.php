<?php

namespace App\Exports;

use App\Models\car;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class CarsExport implements FromCollection, WithHeadings, WithMapping
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function headings(): array
    {
        return [

            'الماركة',
            'الموديل',
            'العدد',
            'اسم السيارة',
            'السعر',
            'مستخدمة ؟',
            'تخفيض سعر',
            'التخفيض من تاريخ',
            'التخفيض الي تاريخ',
            'وصف قصير',
            'الوصف',
            'الضمان',
            'المحرك',
            'حصان ميكانيكي',
            'اقصي سرعة',
            'التسارع',
            'نوع الناقل',
            'سنة الصنع',
            'نوع الوقود',
            'استهلاك الوقود',
            'بلد الصنع',
            'وارد بلد',
            'الطول',
            'العرض',
            'ارتفاع عن الارض',
            'قاعدة العجلات',
            'حجم السيارة الخلفي',
            'عدد المقاعد',
            'نوع الجر',
            'عدد السلندرات',
            'حجم خزان الوقود',
            'الراحة',
            'النوافذ',
            'نظام الصوت',
            'الامان',
            'الاخري'
        ];
    }

    public function map($car): array
    {
        return [
            $car->make->name,
            $car->model_type->name,
            $car->qty,
            $car->name,
            $car->price,
            $car->used == 0 ? 'جديد' : 'مستعمل' ,
            $car->discount_price,
            $car->start_date,
            $car->end_date,
            $car->short_desc,
            $car->desc,
            $car->warranty,
            $car->engine_capacity,
            $car->horse_power,
            $car->maxmum_speed,
            $car->accleration,
            $car->transmittion,
            $car->year,
            $car->fuel,
            $car->fuel_usage,
            $car->country,
            $car->supplied_country,
            $car->length,
            $car->width,
            $car->ground_clearance,
            $car->wheel_base,
            $car->trunk_size,
            $car->seats,
            $car->traction_type,
            $car->clynder,
            $car->fuel_tank_capacity,
            $car->comfort,
            $car->windows,
            $car->sound_system,
            $car->safety,
            $car->other,
        ];
    }
    public function collection()
    {
        return car::where('id',0)->get();
    }
}
