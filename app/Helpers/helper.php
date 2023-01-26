<?php

use App\Models\car;

if(!function_exists('translate')) {
    function translate( $term ) {
        return $term;
    }
}
if(!function_exists('get_info')) {
    function get_info($term) {
        return translate($term);
    }
}

if(!function_exists('get_currency')) {
    function get_currency() {
        return 'ريال سعودي';
    }
}

if(!function_exists('car_details')){
    function car_details(car $car) {
        return [
            [ translate('الضمان') ,
            '<i class="fa-size-24 fa-solid fa-triangle-exclamation"></i>' ,
             $car->warranty
            ],
            [ translate('سعة الماتور') ,
            '<i class="fa-solid fa-car fa-size-24"></i>' ,
             $car->engine_capacity
            ],
            [ translate('حصان ميكانيكي') ,
            ' <i class="fa-solid fa-horse fa-size-24"></i>' ,
             $car->horse_power
            ],
            [ translate('أقصي سرعة') ,
            ' <i class="fa-solid fa-gauge-simple-high font-size-24"></i>' ,
             $car->maxmum_speed
            ],
            [ translate('نوع الناقل') ,
            ' <i class="fa-solid fa-gauge-simple-high font-size-24"></i>' ,
             $car->transmittion
            ],
            [ translate('سنة الصنع') ,
            ' <i class="fa-solid fa-calendar font-size-24"></i>' ,
             $car->year
            ],
            [ translate('الوقود') ,
            ' <i class="fa-solid fa-gas-pump font-size-24"></i>' ,
             $car->fuel
            ],
            [ translate('استهلاك الوقود') ,
            ' <i class="fa-solid fa-oil-can font-size-24"></i>' ,
             $car->fuel_usage
            ],
            [ translate('بلد الصنع') ,
            ' <i class="fa-solid fa-flag font-size-24"></i>' ,
             $car->country
            ],
            [ translate('الطول') ,
            ' <i class="fa-solid fa-up-long font-size-24"></i>' ,
             $car->length
            ],
            [ translate('العرض') ,
            ' <i class="fa-solid fa-arrows-left-right font-size-24"></i>' ,
             $car->width
            ],
            [ translate('الارتفاع الكلي') ,
            ' <i class="fa-solid fa-arrows-up-down font-size-24"></i>' ,
             $car->ground_clearance
            ],
            [ translate('قاعدة العجلات') ,
            ' <i class="fa-solid fa-truck-monster font-size-24"></i>' ,
             $car->wheel_base
            ],
            [ translate('حجم السيارة') ,
            ' <i class="fa-solid fa-table-columns font-size-24"></i>' ,
             $car->trunk_size
            ],
            [ translate('عدد المقاعد') ,
            ' <i class="fa-solid fa-trailer font-size-24"></i>' ,
             $car->seats
            ],
            [ translate('نوع الجر') ,
            ' <i class="fa-solid fa-circle-info font-size-24"></i>' ,
             $car->traction_type
            ],
            [ translate('عدد السلندرات') ,
            ' <i class="fa-solid fa-sun font-size-24"></i>' ,
             $car->clynder
            ],
            [ translate('حجم خزان الوقود') ,
            ' <i class="fa-solid fa-gas-pump font-size-24"></i>' ,
             $car->fuel_tank_capacity
            ],
        ];
    }
}

?>
