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
@if (Session::has('danger'))
    <div class="alert alert-danger alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert">
            <i class="fa fa-times"></i>
        </button>
        <strong>Success !</strong> {{ session('danger') }}
    </div>
@endif


<section class="content">
   <div class="container-fluide">
      <div class="row">
          <div class="col-lg-12">
              <div class="card">
              <div class="card-header">
                <h3 class="card-title">{{translate('جميع السيارات')}}</h3>
                <a href="{{ route('car-create') }}" class="btn btn-primary btn-sm float-right">
                    {{ translate('إضافة سيارة جديد') }}
                </a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example" class="table table-bordered table-striped" style="font-size:15px;">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>{{translate('الموديل')}}</th>
                    <th>{{translate('الاسم')}}</th>
                    <th>{{translate('السعر')}}</th>
                    <th>{{translate('الكمية')}}</th>
                    <th>{{translate('الحالة')}}</th>
                    <th>{{translate('الخصم')}}</th>
                    <th>{{translate('نهاية الخصم')}}</th>
                    <th>{{translate('الصورة')}}</th>
                    <th>{{translate(' الماتور')}}</th>
                    <th>{{translate('الاحصنة')}}</th>
                    <th>{{translate('أعلي سرعة')}}</th>
                    <th>{{translate('الناقل')}}</th>
                    <th>{{translate('السنة')}}</th>
                    <th>{{translate('الوقود')}}</th>
                    <th>{{translate('العمليات')}}</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($cars as $car)
                    <tr>
                      <td>{{$car->id}}</td>
                      <td>{{$car->model_type->name}}</td>
                      <td>{{$car->name}}</td>
                      <td>{{$car->price}}</td>
                      <td>{{$car->qty}}</td>
                      <td>{{$car->used}}</td>
                      <td>{{$car->discount_price}}</td>
                      <td>{{$car->end_date}}</td>
                      <td><img src="{{url('/')}}/images/{{$car->thumbnail}}" alt="" style="width:20px;height:20px;"></td>
                      <td>{{$car->engine_capacity}}</td>
                      <td>{{$car->horse_power}}</td>
                      <td>{{$car->maxmum_speed}}</td>
                      <td>{{$car->transmittion}}</td>
                      <td>{{$car->year}}</td>
                      <td>{{$car->fuel}}</td>
                      <td>
                        <a href="{{route('car-edit',$car->id)}}" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
                        <a href="{{route('car-delete',$car->id)}}" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                      </td>
                      
                   
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->

             </div>
             </div>
             </div>
             </div>
</section>


@endsection