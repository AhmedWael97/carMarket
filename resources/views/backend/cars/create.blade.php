@extends('backend.partial.layout')
@section('content')
@if (Session::has('success'))
    <div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert">
            <i class="fa fa-times"></i>
        </button>
        <strong>Success !</strong> {{ session('success') }}
    </div>
@endif

<section class="content">
   <div class="container-fluide card mt-4">
        <div class="row">
         <div class="col-lg-12">
         <div class="card-body">
            <h4>{{translate('أدخل بيانات السيارة الجديدة')}}</h4>
            <ul class="nav nav-tabs" id="custom-content-below-tab" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="custom-content-below-home-tab" data-toggle="pill" href="#custom-content-below-home" role="tab" aria-controls="custom-content-below-home" aria-selected="true">{{translate('التفاصيل')}}</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="custom-content-below-profile-tab" data-toggle="pill" href="#custom-content-below-profile" role="tab" aria-controls="custom-content-below-profile" aria-selected="false">{{translate('التجهيزات')}}</a>
              </li>
            </ul>
            <form action="{{route('car-store')}}" method="post" enctype="multipart/form-data">
             @csrf
            <div class="tab-content" id="custom-content-below-tabContent">
                <div class="tab-pane fade active show" id="custom-content-below-home" role="tabpanel" aria-labelledby="custom-content-below-home-tab">
                    <div class="row">
                    <div class="col-lg-4">
                            <div class="form-group">
                                <label for="exampleSelectRounded0">{{translate('موديل السيارة')}}</label>
                                <select class="custom-select select2 rounded-0" name="model_id" id="exampleSelectRounded0">
                                @foreach($models as $model)
                                <option value="{{$model->id}}">{{$model->name}}</option>
                                @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="name">{{translate('اسم السيارة')}}</label>
                                <input type="text" name="name" class="form-control" id="name" placeholder="{{translate('أدخل اسم السيارة')}}">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="thumbnail">{{translate('صورة السيارة')}}</label>
                                <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" name="thumbnail"class="custom-file-input" id="thumbnail">
                                    <label class="custom-file-label" for="thumbnail">{{translate('أختر صورة السيارة')}}</label>
                                </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="name">{{translate('سعر السيارة')}}</label>
                                <input type="double" name="price" class="form-control" id="price" placeholder="{{translate('أدخل سعر السيارة')}}">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="used">{{translate('حالة السيارة')}}</label>
                                <select class="custom-select rounded-0" name="used" id="exampleSelectRounded0">
                                <option value="0">{{translate('مستعملة')}}</option>
                                <option value="1">{{translate('جديدة')}}</option>
                                </select>
                             </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="discount_price">{{translate('خصم السيارة')}}</label>
                                <input type="double" name="discount_price" class="form-control" id="discount_price" placeholder="{{translate('أدخل الخصم علي السيارة')}}">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="start_date">{{translate('تاريخ بدء الخصم')}}</label>
                                <input type="date" name="start_date" class="form-control" id="start_date" placeholder="{{translate('أدخل تاريخ بدء الخصم علي السيارة')}}">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="end_date">{{translate('تاريخ انتهاء الخصم')}}</label>
                                <input type="date" name="end_date" class="form-control" id="start_date" placeholder="{{translate('أدخل تاريخ انتهاء الخصم علي السيارة')}}">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="warranty">{{translate('ضمان السيارة')}}</label>
                                <input type="text" name="warranty" class="form-control"  placeholder="{{translate('أدخل ضمان السيارة')}}">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="engine_capacity">{{translate('سعة الموتور')}}</label>
                                <input type="text" name="engine_capacity" class="form-control"  placeholder="{{translate('أدخل سعة موتور السيارة')}}">
                            </div>
                        </div>



                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="horse_power">{{translate('عدد أحصنة الموتور')}}</label>
                                <input type="text" name="horse_power" class="form-control"  placeholder="{{translate('أدخل عدد أحصنة الموتور')}}">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="maxmum_speed">{{translate('السرعة القصوي')}}</label>
                                <input type="text" name="maxmum_speed" class="form-control"  placeholder="{{translate('أدخل السرعة القصوي')}}">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="transmittion">{{translate('ناقل الحركة')}}</label>
                                <input type="text" name="transmittion" class="form-control"  placeholder="{{translate('أدخل نوع ناقل الحركة')}}">
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="year">{{translate('سنة الصنع')}}</label>
                                <input type="text" name="year" class="form-control"  placeholder="{{translate('أدخل سنة الصنع')}}">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="fuel">{{translate('نوع الوقود')}}</label>
                                <input type="text" name="fuel" class="form-control"  placeholder="{{translate('أدخل نوع الوقود ')}}">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="fuel_usage">{{translate('استهلاك الوقود')}}</label>
                                <input type="text" name="fuel_usage" class="form-control"  placeholder="{{translate('أدخل استهلاك الوقود ')}}">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="country">{{translate('بلد الصنع')}}</label>
                                <input type="text" name="country" class="form-control"  placeholder="{{translate('أدخل بلد الصنع ')}}">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="supplied_country">{{translate('السيارة وارد بلد ')}}</label>
                                <input type="text" name="supplied_country" class="form-control"  placeholder="{{translate('أدخل البلد الموردة للسيارة  ')}}">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="lenght">{{translate('طول السيارة')}}</label>
                                <input type="text" name="lenght" class="form-control"  placeholder="{{translate('أدخل  طول السيارة ')}}">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="width">{{translate('عرض السيارة')}}</label>
                                <input type="text" name="width" class="form-control"  placeholder="{{translate('أدخل  عرض السيارة ')}}">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="ground_clearance">{{translate('ارتفاع السيارة عن الارض')}}</label>
                                <input type="text" name="ground_clearance" class="form-control"  placeholder="{{translate('أدخل  ارتفاع السيارة ')}}">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="wheel_base">{{translate('قاعدة العجلات')}}</label>
                                <input type="text" name="wheel_base" class="form-control"  placeholder="{{translate('أدخل قاعدة العجلات')}}">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="trunk_size">{{translate('حجم الشنطة')}}</label>
                                <input type="text" name="trunk_size" class="form-control"  placeholder="{{translate('أدخل حجم الشنطة')}}">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="seats">{{translate('عدد المقاعد')}}</label>
                                <input type="text" name="seats" class="form-control"  placeholder="{{translate('أدخل عدد مقاعد السيارة')}}">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="traction_type">{{translate('نوع الجر')}}</label>
                                <input type="text" name="traction_type" class="form-control"  placeholder="{{translate('أدخل نوع الجر')}}">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="clynder">{{translate('عدد السلندار ')}}</label>
                                <input type="text" name="clynder" class="form-control"  placeholder="{{translate('أدخل عدد السلندار ')}}">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="fuel_tank_capacity">{{translate('سعة خزان الوقود')}}</label>
                                <input type="text" name="fuel_tank_capacity" class="form-control"  placeholder="{{translate('أدخل  سعة خزان الوقود ')}}">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>{{translate('وصف قصير للسيارة')}}</label>
                                <textarea class="form-control" rows="3" name="short_desc" placeholder="{{translate('أدخل وصف قصير للسيارة')}}"></textarea>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>{{translate('وصف  السيارة')}}</label>
                                <textarea class="form-control" rows="3" name="desc" placeholder="{{translate('أدخل وصف  للسيارة')}}"></textarea>
                            </div>
                        </div>
                    </div>
                </div>

            <div class="tab-pane fade" id="custom-content-below-profile" role="tabpanel" aria-labelledby="custom-content-below-profile-tab">
               <div class="row">
               <div class="col-lg-4">
                        <div class="form-group">
                            <label for="comfort">{{translate('وسائل الراحة')}}</label>
                            <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" name="comfort" type="checkbox" id="customCheckbox1" value="شاشة متعددة الوسائط تعمل باللمس">
                            <label for="customCheckbox1" class="custom-control-label">{{translate('شاشة متعدة الوسائط تعمل باللمس')}}</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="windows">{{translate('نوافذ')}}</label>
                            <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" name="windows" type="checkbox" id="customCheckbox2" value="نوافذ كهربائية أمامية">
                            <label for="customCheckbox2" class="custom-control-label">{{translate('نوافذ كهرائية أمامية')}}</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="sound_system">{{translate('نظام الصوت')}}</label>
                            <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" name="sound_system" type="checkbox" id="customCheckbox3" value="نظام تحكم في الطارة">
                            <label for="customCheckbox3" class="custom-control-label">{{translate('نظام تحكم في الطارة')}}</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="safety">{{translate('وسائل الامان')}}</label>
                            <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" name="safety" type="checkbox" id="customCheckbox4" value="نظام إيموبليزر ضد السرقة">
                            <label for="customCheckbox4" class="custom-control-label">{{translate('نظام إيموبليزر ضد السرقة')}}</label>
                            </div>
                        </div>
                    </div>

                     <div class="col-lg-4">
                        <div class="form-group">
                            <label for="other">{{translate('وسائل اخري')}}</label>
                            <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" name="other" type="checkbox" id="customCheckbox5" value="مثبت سرعة">
                            <label for="customCheckbox5" class="custom-control-label">{{translate('مثبت سرعة')}}</label>
                            </div>
                        </div>
                    </div>

               </div>
             </div>
            </div>
            <button class="btn btn-sm btn-primary" type="submit">{{translate('تسجيل')}}</button>
           </form>

          </div>
         </div>

        </div>
    </div>

</section>


@endsection


