@extends('frontend.partial.layout')
@section('content')
<section class="main-section height-100">
    <div class="row">
        <div class="col-md-6"></div>
        <div class="col-md-6">
            <div class="card card-home">
                <div class="card-header">
                    إبحث عن نوع السيارة المناسب لكـ
                </div>
                <div class="card-body">
                    <form>
                        <div class="form-group mb-4">
                            <label>
                                ماركة السيارة
                            </label>
                            <select class="form-select" name="model"></select>
                        </div>
                        <div class="form-group mb-4">
                            <label>
                                موديل السيارة
                            </label>
                            <select class="form-select" name="model"></select>
                        </div>
                        <div class="form-group mb-4">
                            <label>
                                سنة الصنع
                            </label>
                            <select class="form-select" name="model"></select>
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
            نبذة عن
        </h5>
        <h2 class="text-black mb-4">
            وليد للتجارة
        </h2>
        <p class="text-grey">
            هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم إيبسوم لأنها تعطي توزيعاَ طبيعياَ -إلى حد ما- للأحرف عوضاً عن استخدام "هنا يوجد محتوى نصي،
        </p>
        <button type="button"  class="btn btn-primary btn-sm  border-circle">
           إقــــرا المزيــــد عنــــا
        </button>
    </div>
</section>
<section class="section-margin ProductsSection">
    <div class="container">
        <div class="text-center">
            <h5 class="text-bold">
                السيارات
            </h5>
            <h2 class="text-black mb-4">
                الكثير من السيارات المتاحة
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
            متابعة
        </h5>
        <h2 class="text-black mb-4">
            تابع معنا كل جديد
        </h2>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-6 pt-140">
                <h3>
                    قم بتسجيل البريد الالكتروني الخاص بكـ
                </h3>
                <div class="splitter"></div>
                <p class="text-grey">
                    عند تسجيل بريدك الالكتروني سوف يتم متابعة معك كل جديد من سيارات جديدة و من تغيير اسعار و تغيير اعداد السيارات بريديا
                </p>
                <div class="form-group mt-2 mb-2">
                    <label>
                        البريد الالكتروني
                    </label>
                    <input class="form-control" type="mail" name="email" required />
                    <input type="submit" class="btn btn-primary btn-sm mt-2 float-left" value="إشترك الان" />
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
