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
                <a class="nav-link" id="custom-content-below-profile-tab" data-toggle="pill" href="#custom-content-below-profile" role="tab" aria-controls="custom-content-below-profile" aria-selected="false">{{translate('المواصفات')}}</a>
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

                        @foreach($properties as $property)
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="end_date">{{translate($property->name)}}</label>
                                <input type="{{ $property->type }}" name="prop_{{ $property->id }}" class="form-control" id="start_date" placeholder="{{translate($property->name)}}">
                            </div>
                        </div>
                        @endforeach


                    </div>
                    <div class="row">
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


            <button class="btn btn-sm btn-primary" type="submit">{{translate('تسجيل')}}</button>
           </form>

          </div>
         </div>

        </div>
    </div>

</section>


@endsection


