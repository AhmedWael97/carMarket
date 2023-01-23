@extends('frontend.partial.layout')
@section('content')
<div class="container">
    <div class="card card-padding mt-4 mb-4">
        <div class="mt-2">
            <small>
                <b>
                    <i class="bi bi-house"></i> {{ translate('الرئيسية') }}  /  <i class="bi bi-tag"></i> هيونداي - huyndai / <i class="bi bi-car-front"></i> هيونداي توسان
                </b>
            </small>
        </div>
        <div class="header mt-2 text-center">
            <h2>
                هيونداي توسان 2022
            </h2>
        </div>
        <hr>
        <div class="row no-padding">
            <div class="col-md-9">
                <img src="{{ url('/assets/imgs/bg-8.jpg') }}" class="w-auto-100 img-radius"/>
            </div>
            <div class="col-md-3">
                <div class="card card-padding text-center">
                    <h3>
                        <b>
                            <span>
                                {{ translate('السعر') }}
                            </span>
                            <br>
                            2220000 SAR
                        </b>
                    </h3>
                </div>
                <div class="card card-padding mt-2">
                    <button class="btn btn-primary w-100">
                        <i class="bi bi-plus-lg"></i> {{ translate('إضافة إلي المقارنة') }}
                    </button>
                    <button class="btn btn-danger mt-2 w-100">
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
                    <li class="nav-item" role="presentation">
                      <button class="nav-link" id="equipment-tab" data-bs-toggle="tab" data-bs-target="#equipment" type="button" role="tab" aria-controls="equipment" aria-selected="false">
                        {{ translate('التجهيزات') }}
                      </button>
                    </li>
                  </ul>
            </div>
            <div class="col-md-12 mt-2">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="details" role="tabpanel" aria-labelledby="details-tab">
                        <div class="row no-padding m-2">
                            <div class="col-md-3">
                                <div class="text-center">

                                    <i class="fa-size-24 fa-solid fa-triangle-exclamation"></i>
                                        <br>
                                        <span>
                                            {{ translate('الضمان') }}
                                        </span>
                                        <br>
                                        <strong>100000 كم /
                                        3 سنوات </strong>

                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="text-center">

                                    <i class="fa-solid fa-car fa-size-24"></i>
                                        <br>
                                        <span>
                                            {{ translate('الماتور') }}
                                        </span>
                                        <br>
                                        <strong>1600 سي سي</strong>

                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="text-center">

                                    <i class="fa-solid fa-horse fa-size-24"></i>
                                        <br>
                                        <span>
                                            {{ translate('حصان ميكانيكي') }}
                                        </span>
                                        <br>
                                        <strong>110 حصان</strong>

                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="text-center">

                                    <i class="fa-solid fa-gauge-simple-high font-size-24"></i>
                                        <br>
                                        <span>
                                            {{ translate('أقصي سرعة') }}
                                        </span>
                                        <br>
                                        <strong>210 كم / س</strong>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="equipment" role="tabpanel" aria-labelledby="equipment-tab">
                        التجهيزات
                    </div>
                  </div>
            </div>
        </div>
    </div>
</div>


@endsection
