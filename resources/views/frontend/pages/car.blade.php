@extends('frontend.partial.layout')
@section('content')
<div class="container">
    <div class="card card-padding mt-4 mb-4">
        <div class="mt-2">
            <small>
                <b>
                    <i class="bi bi-house"></i> {{ translate('الرئيسية') }}  /  <i class="bi bi-tag"></i> {{ $car->make != null ?  $car->make->name  : '' }} / <i class="bi bi-car-front"></i> {{ $car->model_type != null ?  $car->model_type->name  : '' }}
                </b>
            </small>
        </div>
        <div class="header mt-2 text-center">
            <h2>
                {{ $car->name }}
            </h2>
        </div>
        <hr>
        <div class="row no-padding">
            <div class="col-md-9">

                @if ($car->thumbnail != null)
                <img src="{{ url('/images') }}/{{ $car->thumbnail }}"  class="w-auto-100 img-radius"/>
                @else
                    <img src="{{url('/')}}/images/default.jpg"  class="w-auto-100 img-radius"/>
                @endif
            </div>
            <div class="col-md-3">
                <div class="card card-padding text-center">
                    <h3>
                        <b>
                            <span>
                                {{ translate('السعر') }}
                            </span>
                            <br>
                           @if($car->discount_price != 0)
                                <span class="text-line-through">
                                    {{ $car->price }} {{ get_currency() }}
                                </span>
                                <br>
                                <span class="">
                                    {{ $car->discount_price }} {{ get_currency() }}
                                </span>
                           @else
                           <span class="">
                                {{ $car->price }} {{ get_currency() }}
                            </span>
                           @endif
                        </b>
                    </h3>
                </div>
                <div class="card card-padding mt-2">
                    <button carid="{{ $car->id }}" class="btn btn-primary addCompare w-100">
                        <i class="bi bi-plus-lg"></i> {{ translate('إضافة إلي المقارنة') }}
                    </button>
                    <button carid="{{ $car->id }}" class="btn btn-danger addFavorite mt-2 w-100">
                        <i class="bi bi-plus-lg"></i> {{ translate('إضافة إلي المفضلة') }}
                    </button>
                </div>
            </div>
        </div>
        <div class="row no-padding mt-4">
            <div class="col-md-12">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                      <button class="nav-link active" id="details-tab" data-bs-toggle="tab" data-bs-target="#details" type="button" role="tab" aria-controls="details" aria-selected="true">
                        {{ translate('التفاصيل') }}
                      </button>
                    </li>

                  </ul>
            </div>
            <div class="col-md-12 mt-2">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="details" role="tabpanel" aria-labelledby="details-tab">
                        <div class="row no-padding m-2">

                            @foreach($car->properties as $carProp)

                                    <div class="col-md-3 mb-4">
                                        <div class="text-center">



                                                <span>
                                                    {{ translate($carProp->property->name) }}
                                                </span>
                                                <br>
                                                <strong>{{ translate($carProp->value) }}</strong>

                                        </div>
                                    </div>

                            @endforeach
                        </div>
                    </div>
                    <div class="tab-pane fade" id="equipment" role="tabpanel" aria-labelledby="equipment-tab">
                       <div class="row no-padding">
                            <div class="col-md-4 mb-4">
                                <h5>
                                    {{ translate('وسائل الراحة') }}
                                </h5>
                                {{ $car->comfort }}
                            </div>
                            <div class="col-md-4 mb-4">
                                <h5>
                                    {{ translate('وسائل الامان') }}
                                </h5>
                                {{ $car->safety }}
                            </div>
                            <div class="col-md-4 mb-4">
                                <h5>
                                    {{ translate('النوافذ') }}
                                </h5>
                                {{ $car->windows }}
                            </div>

                            <div class="col-md-4 mb-4">
                                <h5>
                                    {{ translate('نظام الصوت') }}
                                </h5>
                                {{ $car->sound_system }}
                            </div>
                       </div>
                    </div>
                  </div>
            </div>
        </div>
    </div>
</div>


@endsection
