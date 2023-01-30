@extends('frontend.partial.layout')
@section('content')
<div class="container">
    <div class="card card-padding mt-4 mb-4">
        <div class="mt-2">
            <small>
                <b>
                    <i class="bi bi-house"></i> {{ translate('الرئيسية') }} / <i class="bi bi-search"></i> {{ translate('البحث') }}
                </b>
            </small>
        </div>
        <h2 class="text-center mb-2">
            {{ translate('نتائج البحث') }}
        </h2>
        <div class="row no-padding">
            @forelse($cars as $car)
                <div class="col-md-4">
                    @include('frontend.partial.item',$car)
                </div>
            @empty
                <p class="text-center text-danger">
                    {{ translate('لم نجد نتائج متوافقة مع البحث') }}
                </p>
            @endforelse
        </div>

    </div>
</div>
@endsection
