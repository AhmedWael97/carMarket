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
            'كود',
            'الماركة',
            'الموديل',
            'اسم السيارة',
            'السعر',
            'مستخدمة ؟',
            'تخفيض سعر',
            'التخفيض من تاريخ',
            'التخفيض الي تاريخ',
            'وصف قصير',
            'الضمان',
            'الماتور',
            'حصان ميكانيكي',
            'اقصي سرعة',
            'التسارع',
            'نوع الناقل',
            'سنة الصنع',
            'نوع الوقود',
            'استهلاك الوقود',
            'بلد الصنع',
            'الطول',
            'العرض',
            'ارتفاع عن الارض',
            'قاعدة العجلات',
            'عدد المقاعد',
            'نوع الجر',
            'عدد السلندرات',
            'حجم خزان الوقود',
            'الراحة',
            'النوافذ',
            'نظام الصوت',
            'الامان',
            'عدد المشاهدات',
            'عدد المقارنات',
            'عدد المفضل',
            'حذف في',
            'انشات في',
            'تم التعديل في'
        ];
    }

    public function map($car): array
    {
        return [
            $car->id,
            $car->make->name,
            $car->model_type->name,
            $car->name,
            $car->price,
            $car->used == 0 ? 'جديد' : 'مستعمل' ,
            $car->discount_price,
            $car->start_date,
            $car->end_date,
            $car->short_desc,
            $car->warranty,
            $car->engine_capacity,
            $car->horse_power,
            $car->maxmum_speed,
            $car->accleration,
            $car->transmittion,
            $car->year,
            $car->fuel,
            $car->fuel_usage,
            $car->count,
            $car->length,
            $car->width,
            $car->ground_clearance,
            $car->wheel_base,
            $car->seats,
            $car->traction_type,
            $car->clynder,
            $car->fuel_tank_capacity,
            $car->comfort,
            $car->windows,
            $car->sound_system,
            $car->safety,
            $car->views,
            $car->compare,
            $car->favorite,
            $car->deleted_at,
            $car->created_at,
            $car->updated_at
        ];
    }
    public function collection()
    {
        return car::get();
    }
}
