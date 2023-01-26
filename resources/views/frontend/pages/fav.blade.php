@extends('frontend.partial.layout')
@section('content')
<div class="container">
    <div class="card card-padding mt-4 mb-4">
        <div class="mt-2">
            <small>
                <b>
                    <i class="bi bi-house"></i> {{ translate('الرئيسية') }} / <i class="bi bi-heart"></i> {{ translate('المفضلة') }}
                </b>
            </small>
        </div>
        <h2 class="text-center">
            {{ translate('المفضلة') }}
        </h2>
        @if(Session::has('favs'))
            <?php
                $ids = explode(',',Session::get('favs'));
                $cars = \App\Models\car::whereIn('id',$ids)->get();
            ?>
            <div class="row no-padding">
                @foreach($cars as $car)
                    <div class="col-md-4">
                        @include('frontend.partial.item',$car)
                    </div>
                @endforeach
            </div>
        @else
            <p class="text-danger">
                {{ translate('لا توجد سيارات في المفضلة') }}
                <br>
                <a href="{{ url('/') }}"  class="btn btn-link text-decoration-none">
                    {{ translate('العودة للصفحة الرئيسية') }}
                </a>
            </p>
        @endif
    </div>
</div>
@endsection
