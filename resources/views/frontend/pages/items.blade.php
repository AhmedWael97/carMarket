@extends('frontend.partial.layout')
@section('content')
<div class="container">
    <div class="card card-padding mt-4 mb-4">
        <div class="mt-2">
            <small>
                <b>
                    <i class="bi bi-house"></i> {{ translate('الرئيسية') }} / <i class="bi bi-car"></i> {{ translate('السيارات') }}
                </b>
            </small>
        </div>
        <h2 class="mt-4 mb-4">
            {{ translate('السيارات المعروضة') }}
        </h2>
        <div class="splitter"></div>
        <form method="post" action="{{ route('filter') }}">
            @csrf
            <div class="row filter">
                <div class="col-md-3">
                    <label>
                        {{ translate('إسم السيارة') }}
                    </label>
                    <input type="text" name="car_name"  class="form-control"/>
                </div>

                <div class="col-md-3">
                    <label>
                        {{ translate('سنة الصنع') }}
                    </label>
                    <select class="form-select select2" name="year">
                        <option disabled selected> {{ translate('إختر سنة الصنع') }} </option>
                        @for($i = Date('Y',strtotime("+1 year")) ; $i >= 2000  ; $i-- )
                            <option value="{{ $i }}"> {{ $i }}</option>
                        @endfor
                    </select>
                </div>
                <div class="col-md-3">
                    <label>
                        {{ translate('أقل سعر') }}
                    </label>
                    <input type="number" name="less_price" value="0" class="form-control"/>
                </div>
                <div class="col-md-3">
                    <label>
                        {{ translate('أقصي سعر') }}
                    </label>
                    <input type="number" name="max_price"  class="form-control"/>
                </div>
                <div class="col-md-9"></div>
                <div class="col-md-3">
                    <input type="submit"  class="btn btn-primary w-100 mt-4" value="{{ translate('بحث') }}"/>
                </div>
            </div>
        </form>
        <hr>
        <div class="row">
            @foreach($items as $item)
                <div class="col-md-4">
                    @include('frontend.partial.item',['car' => $item])
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
