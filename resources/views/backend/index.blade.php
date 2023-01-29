@extends('backend.partial.layout')
@section('content')
<?php  
$cars= App\Models\car::all();
$num_of_cars =count($cars);

$num_of_user =count(App\Models\User::all()) ;
$num_of_models = count(App\Models\models::all());
$num_of_makes = count(App\Models\make::all());
?>
<section class="content">
<div class="container-fluide card mt-4">
<div class="row">
          <div class="col-lg-3 col-6">
            <!-- small card -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{$num_of_cars}}</h3>

                <p>{{translate('عدد السيارات')}}</p>
              </div>
              <div class="icon">
                <i class="fas fa-shopping-cart"></i>
              </div>
              <a href="{{route('car-index')}}" class="small-box-footer">
              {{translate('عرض الكل')}} <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small card -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>{{$num_of_models}}</h3>

                <p>{{translate('عدد الموديلات')}}</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="{{route('models-index')}}" class="small-box-footer">
              {{translate('عرض الكل')}} <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small card -->
            <div class="small-box bg-warning">
              <div class="inner">
              <h3>{{$num_of_user}}</h3>

                <p>{{translate('عدد المستخدمين')}}</p>
              </div>
              <div class="icon">
                <i class="fas fa-user-plus"></i>
              </div>
              <a href="{{route('user-index')}}" class="small-box-footer">
              {{translate('عرض الكل')}} <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small card -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>{{$num_of_makes}}</h3>

                <p>{{translate('عدد الماركات')}}</p>
              </div>
              <div class="icon">
                <i class="fas fa-chart-pie"></i>
              </div>
              <a href="{{route('makes-index')}}" class="small-box-footer">
                {{translate('عرض الكل')}} <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        </div>
        </section>
@endsection