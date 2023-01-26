@extends('frontend.partial.layout')
@section('content')
    <div class="container">
        @if(Session::has('compares'))
        <?php
            $ids = Session::get('compares');
            $cars = \App\Models\car::whereIn('id',explode(',',$ids))->get();
        ?>
        <table class="table table-bordered compare-table w-100 mt-2 mb-2">
            <thead>
                <td class="w-25">
                    #
                </td>
                @foreach($cars as $car)
                    <td> {{ $car->name }}</td>
                @endforeach
            </thead>
            <tbody>
                <tr>
                    <td>
                        {{ translate('الصورة') }}
                    </td>
                    @foreach($cars as $car)
                        <td class="text-center">
                            <img src="{{ url('assets/imgs/bg-8.jpg') }}"  class="w-100" />
                        </td>
                    @endforeach
                </tr>
                <tr>
                    <td>
                        {{ translate('السعر') }}
                    </td>
                    @foreach($cars as $car)
                        <td class="text-center">
                            {{ $car->price }} {{ get_currency() }}
                        </td>
                    @endforeach
                </tr>
                <tr>
                    <td>
                        {{ translate('سعة الماتور') }}
                    </td>
                    @foreach($cars as $car)
                        <td class="text-center">
                            {{ $car->engine_capacity }}
                        </td>
                    @endforeach

                </tr>
                <tr>
                    <td>
                        {{ translate('الضمان') }}
                    </td>
                    @foreach($cars as $car)
                        <td class="text-center">
                            {{ $car->warranty }}
                        </td>
                    @endforeach

                </tr>

                <tr>
                    <td>
                        {{ translate('حصان ميكانيكي') }}
                    </td>
                    @foreach($cars as $car)
                        <td class="text-center">
                            {{ $car->horse_power }}
                        </td>
                    @endforeach

                </tr>
                <tr>
                    <td>
                        {{ translate('اقصي سرعة') }}
                    </td>
                    @foreach($cars as $car)
                        <td class="text-center">
                            {{ $car->maxmum_speed }}
                        </td>
                    @endforeach

                </tr>
                <tr>
                    <td>
                        {{ translate('التسارع') }}
                    </td>
                    @foreach($cars as $car)
                        <td class="text-center">
                            {{ $car->accleration }}
                        </td>
                    @endforeach

                </tr>

                <tr>
                    <td>
                        {{ translate('ناقل الحركة') }}
                    </td>
                    @foreach($cars as $car)
                        <td class="text-center">
                            {{ $car->transmittion }}
                        </td>
                    @endforeach

                </tr>

                <tr>
                    <td>
                        {{ translate('سنة الصنع') }}
                    </td>
                    @foreach($cars as $car)
                        <td class="text-center">
                            {{ $car->year }}
                        </td>
                    @endforeach

                </tr>

                <tr>
                    <td>
                        {{ translate('الوقود') }}
                    </td>
                    @foreach($cars as $car)
                        <td class="text-center">
                            {{ $car->fuel }}
                        </td>
                    @endforeach

                </tr>

                <tr>
                    <td>
                        {{ translate('إستهلاك الوقود') }}
                    </td>
                    @foreach($cars as $car)
                        <td class="text-center">
                            {{ $car->fuel_usage }}
                        </td>
                    @endforeach

                </tr>

                <tr>
                    <td>
                        {{ translate('سعة خزان الوقود') }}
                    </td>
                    @foreach($cars as $car)
                        <td class="text-center">
                            {{ $car->fuel_tank_capacity }}
                        </td>
                    @endforeach

                </tr>

                <tr>
                    <td>
                        {{ translate('بلد الصنع') }}
                    </td>
                    @foreach($cars as $car)
                        <td class="text-center">
                            {{ $car->country }}
                        </td>
                    @endforeach

                </tr>

                <tr>
                    <td>
                        {{ translate('الطول') }}
                    </td>
                    @foreach($cars as $car)
                        <td class="text-center">
                            {{ $car->length }}
                        </td>
                    @endforeach

                </tr>
                <tr>
                    <td>
                        {{ translate('العرض') }}
                    </td>
                    @foreach($cars as $car)
                        <td class="text-center">
                            {{ $car->width }}
                        </td>
                    @endforeach

                </tr>
                <tr>
                    <td>
                        {{ translate('ارتفاع عن الارض') }}
                    </td>
                    @foreach($cars as $car)
                        <td class="text-center">
                            {{ $car->ground_clearance }}
                        </td>
                    @endforeach

                </tr>

                <tr>
                    <td>
                        {{ translate('قاعدة العجلات') }}
                    </td>
                    @foreach($cars as $car)
                        <td class="text-center">
                            {{ $car->wheel_base }}
                        </td>
                    @endforeach

                </tr>

                <tr>
                    <td>
                        {{ translate('سعة السيارة') }}
                    </td>
                    @foreach($cars as $car)
                        <td class="text-center">
                            {{ $car->trunk_size }}
                        </td>
                    @endforeach

                </tr>
                <tr>
                    <td>
                        {{ translate('عدد المقاعد') }}
                    </td>
                    @foreach($cars as $car)
                        <td class="text-center">
                            {{ $car->seats }}
                        </td>
                    @endforeach

                </tr>
                <tr>
                    <td>
                        {{ translate('عزم السيارة') }}
                    </td>
                    @foreach($cars as $car)
                        <td class="text-center">
                            {{ $car->traction_type }}
                        </td>
                    @endforeach

                </tr>

                <tr>
                    <td>
                        {{ translate('عدد السلندرات') }}
                    </td>
                    @foreach($cars as $car)
                        <td class="text-center">
                            {{ $car->clynder }}
                        </td>
                    @endforeach

                </tr>
            </tbody>
        </table>
        @else
           <div class="text-center">
                <h4 class="text-danger text-danger">
                    {{ translate('لا توجد سيارات للمقارنة') }}
                </h4>
                <p>
                    <a href="{{ url('/') }}" class="btn btn-link text-decoration-none">
                        {{ translate('عودة الي الرئيسية') }}
                    </a>
                </p>
           </div>
        @endif
    </div>
@endsection
