@extends('backend.partial.layout')
@section('content')

<section class="content">
   <div class="container-fluide">
        <div class="row">
         <div class="col-lg-12">
            <div class="card-body">
                <h4>{{translate('تعديل سيارة')}} {{ $car->name }}</h4>
                <hr>
                <form action="{{route('car-update')}}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="hidden" value="{{$car->id}}" name="id">
                    <div class="tab-content" id="custom-content-below-tabContent">
                        <div class="tab-pane fade active show" id="custom-content-below-home" role="tabpanel" aria-labelledby="custom-content-below-home-tab">
                            <div class="row">
                            <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="exampleSelectRounded0">{{translate('موديل السيارة')}}</label>
                                        <select class="custom-select rounded-0" name="model_id" id="exampleSelectRounded0">
                                        @foreach($models as $model)
                                        <option value="{{$model->id}}" {{$model->id  == $car->model_id ? 'selected' : ' '}}>{{$model->name}}</option>
                                        @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="name">{{translate('اسم السيارة')}}</label>
                                        <input type="text" name="name" value="{{$car->name}}" class="form-control" id="name" placeholder="{{translate('أدخل اسم السيارة')}}">
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
                                        <input type="double" name="price" value="{{$car->price}}" class="form-control" id="price" placeholder="{{translate('أدخل سعر السيارة')}}">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="used">{{translate('حالة السيارة')}}</label>
                                        <select class="custom-select rounded-0" name="used" id="exampleSelectRounded0">
                                        <option value="0" {{$car->used == 0 ? 'selected' : ' '}}>{{translate('مستعملة')}}</option>
                                        <option value="1" {{$car->used == 1 ? 'selected' : ' '}}>{{translate('جديدة')}}</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="discount_price">{{translate('خصم السيارة')}}</label>
                                        <input type="double" name="discount_price" value="{{$car->discount_price}}" class="form-control" id="discount_price" placeholder="{{translate('أدخل الخصم علي السيارة')}}">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="start_date">{{translate('تاريخ بدء الخصم')}}</label>
                                        <input type="date" name="start_date" value="{{$car->start_date}}" class="form-control" id="start_date" placeholder="{{translate('أدخل تاريخ بدء الخصم علي السيارة')}}">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="end_date">{{translate('تاريخ انتهاء الخصم')}}</label>
                                        <input type="date" name="end_date" value="{{$car->end_date}}" class="form-control" id="start_date" placeholder="{{translate('أدخل تاريخ انتهاء الخصم علي السيارة')}}">
                                    </div>
                                </div>
                                @foreach($properties as $key => $property)

                                    @if($car->properties->where('property_id',$property->id)->first())
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="">{{translate($property->name)}}</label>
                                            <input value="{{ $car->properties->where('property_id',$property->id)->first()->value }}"  type="{{ $property->type }}" name="prop_{{ $property->id }}"  class="form-control"  placeholder="{{translate($property->name)}}">
                                        </div>
                                    </div>
                                    @else
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="">{{translate($property->name)}}</label>
                                            <input  type="{{ $property->type }}" name="prop_{{ $property->id }}"  class="form-control"  placeholder="{{translate($property->name)}}">
                                        </div>
                                    </div>
                                    @endif
                                @endforeach



                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>{{translate('وصف قصير للسيارة')}}</label>
                                        <textarea class="form-control" rows="3" name="short_desc" placeholder="{{translate('أدخل وصف قصير للسيارة')}}">{{$car->short_desc}}</textarea>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>{{translate('وصف  السيارة')}}</label>
                                        <textarea class="form-control" rows="3" name="desc" placeholder="{{translate('أدخل وصف  للسيارة')}}">{{$car->desc}}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>


                    <button class="btn btn-sm btn-primary" type="submit">{{translate('تعديل')}}</button>
                </form>

            </div>
         </div>

        </div>
    </div>

</section>


@endsection


