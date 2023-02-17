@extends('frontend.partial.layout')
@section('content')
    <div class="container"  style="overflow-x: scroll;">
        @if(Session::has('compares'))
        <?php
            $ids = Session::get('compares');
            $cars = \App\Models\car::whereIn('id',explode(',',$ids))->get();
            $properties = \App\Models\Property::all();
        ?>
        <table class="table table-bordered compare-table mt-2 mb-2">
            <thead>
                <td style="width: 10%">
                    #
                </td>
                @foreach($cars as $car)
                    <td >
                         <small> {{ $car->name }} </small>
                         <a href="{{ route('rm-compare',$car->id) }}" class="btn btn-danger text-white btn-sm float-left"> <i class="bi bi-trash"></i> </a>
                    </td>
                @endforeach
            </thead>
            <tbody>
                <tr>
                    <td>
                        {{ translate('الصورة') }}
                    </td>
                    @foreach($cars as $car)
                        <td class="text-center">
                           @if($car->thumbnail)
                           <img src="{{ url('/images') }}/{{ $car->thumbnail }}"  class="w-100"/>
                           @else
                           <img src="{{url('/')}}/images/default.jpg" class="w-100">
                           @endif
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
                @foreach($properties as $property)
                    @if($property->active == 1)
                    <tr>
                        <td>
                            {{ translate($property->name) }}
                        </td>
                        @foreach($cars as $car)
                            <td>
                                {{ $car->properties->where('property_id',$property->id)->first() ? $car->properties->where('property_id',$property->id)->first()->value : '-' }}
                            </td>
                        @endforeach
                    </tr>
                    @endif
                @endforeach
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
