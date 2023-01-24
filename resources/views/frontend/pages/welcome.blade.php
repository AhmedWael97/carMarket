@extends('frontend.partial.layout')
@section('content')
<section class="main-section height-100">
    <div class="row">
        <div class="col-md-6"></div>
        <div class="col-md-6">
            <div class="card card-home">
                <div class="card-header">
                   {{ translate(' إبحث عن نوع السيارة المناسب لكـ') }}
                </div>
                <div class="card-body">
                    <form>
                        <div class="form-group mb-4">
                            <label>
                               {{ translate('ماركة السيارة') }}
                            </label>
                            <select class="form-select makes select2" name="model">
                                <option disabled selected> {{ translate('إختر ماركة السيارة') }} </option>
                                @foreach($makes as $make)
                                    <option value="{{ $make->id }}">
                                        {{ $make->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group mb-4">
                            <label>
                               {{ translate('موديل السيارة') }}
                            </label>
                            <select class="form-select models select2" name="model"></select>
                        </div>
                        <div class="form-group mb-4">
                            <label>
                                {{ translate('سنة الصنع') }}
                            </label>
                            <select class="form-select select2" name="model">
                                <option disabled selected> {{ translate('إختر سنة الصنع') }} </option>
                                @for($i = Date('Y',strtotime("+1 year")) ; $i >= 2000  ; $i-- )
                                    <option value="{{ $i }}"> {{ $i }}</option>
                                @endfor
                            </select>
                        </div>
                        <div class="form-group mb-4">
                            <button type="submit" class="btn btn-primary btn-block w-100">
                                إبحث الان
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section-margin about-section">
    <div class="container text-center">
        <h5 class="text-bold">
           {{ translate('نبذة عن') }}
        </h5>
        <h2 class="text-black mb-4">
           {{ get_info('وليد للتجارة') }}
        </h2>
        <p class="text-grey">
            {{ get_info('هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم إيبسوم لأنها تعطي توزيعاَ طبيعياَ -إلى حد ما- للأحرف عوضاً عن استخدام "هنا يوجد محتوى نصي،') }}
        </p>
        <button type="button"  class="btn btn-primary btn-sm  border-circle">
          {{ translate('إقــــرا المزيــــد عنــــا') }}
        </button>
    </div>
</section>
<section class="section-margin ProductsSection">
    <div class="container">
        <div class="text-center">
            <h5 class="text-bold">
                {{ translate('السيارات') }}
            </h5>
            <h2 class="text-black mb-4">
                {{ translate('الكثير من السيارات المتاحة') }}
            </h2>
        </div>
        <div class="row">
            <div class="col-md-4">
                @include('frontend.partial.item', ['used' => 0, 'discount' => 0])
            </div>
            <div class="col-md-4">
                @include('frontend.partial.item', ['used' => 1, 'discount' => 1])
            </div>
            <div class="col-md-4">
                @include('frontend.partial.item', ['used' => 0, 'discount' => 1])
            </div>
            <div class="col-md-4">
                @include('frontend.partial.item', ['used' => 1, 'discount' => 0])
            </div>
            <div class="col-md-4">
                @include('frontend.partial.item', ['used' => 1, 'discount' => 1])
            </div>
            <div class="col-md-4">
                @include('frontend.partial.item', ['used' => 0, 'discount' => 1])
            </div>

        </div>
    </div>
</section>
<section class="section-margin">
    <div class="text-center">
        <h5 class="text-bold">
            {{ translate('متابعة') }}
        </h5>
        <h2 class="text-black mb-4">
            {{ translate('تابع معنا كل جديد') }}
        </h2>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-6 pt-140">
                <h3>
                   {{ translate('قم بتسجيل البريد الالكتروني الخاص بكـ') }}
                </h3>
                <div class="splitter"></div>
                <p class="text-grey">
                   {{ translate('عند تسجيل بريدك الالكتروني سوف يتم متابعة معك كل جديد من سيارات جديدة و من تغيير اسعار و تغيير اعداد السيارات بريديا') }}
                </p>
                <div class="form-group mt-2 mb-2">
                    <label>
                       {{ translate('البريد الالكتروني') }}
                    </label>
                    <input class="form-control" type="mail" name="email" required />
                    <input type="submit" class="btn btn-primary btn-sm mt-2 float-left" value="{{ translate('إشترك الان') }}" />
                </div>
            </div>
            <div class="col-md-6 text-center" >
                <img src="{{ url('assets/imgs/email.svg') }}" class="w-100" />
            </div>
        </div>
    </div>
</section>
<section class="section-margin ProductsSection">
    <div class="container">
        <div class="text-center">
            <h5 class="text-bold">
                المبيعات
            </h5>
            <h2 class="text-black mb-4">
                أكثر السيارات مبيعا و بحثا
            </h2>
        </div>
        <div class="row">
            <div class="col-md-4">
                @include('frontend.partial.item', ['used' => 0, 'discount' => 0])
            </div>
            <div class="col-md-4">
                @include('frontend.partial.item', ['used' => 1, 'discount' => 1])
            </div>
            <div class="col-md-4">
                @include('frontend.partial.item', ['used' => 0, 'discount' => 1])
            </div>
            <div class="col-md-4">
                @include('frontend.partial.item', ['used' => 1, 'discount' => 0])
            </div>
            <div class="col-md-4">
                @include('frontend.partial.item', ['used' => 1, 'discount' => 1])
            </div>
            <div class="col-md-4">
                @include('frontend.partial.item', ['used' => 0, 'discount' => 1])
            </div>
            <div class="col-md-4">
                @include('frontend.partial.item', ['used' => 0, 'discount' => 0])
            </div>
            <div class="col-md-4">
                @include('frontend.partial.item', ['used' => 1, 'discount' => 1])
            </div>
            <div class="col-md-4">
                @include('frontend.partial.item', ['used' => 0, 'discount' => 1])
            </div>
            <div class="col-md-4">
                @include('frontend.partial.item', ['used' => 1, 'discount' => 0])
            </div>
            <div class="col-md-4">
                @include('frontend.partial.item', ['used' => 1, 'discount' => 1])
            </div>
            <div class="col-md-4">
                @include('frontend.partial.item', ['used' => 0, 'discount' => 1])
            </div>
        </div>
    </div>
</section>
@endsection

@section('js')
    <script>
        $(document).ready(function(){
            $('.makes').change(function() {
                var value = $(this).val();
                $.get('{{ url("/get/models/") }}/'+value, function(res) {
                    $('.models').find('option').remove();
                    $.each(res,function(i,item){
                       $('.models').find('option')
                       .end()
                       .append('<option value='+item['id']+'>'+item['name']+'</option>')
                       .val(item['id']);
                    });
                });
            });
        });
    </script>
@endsection
