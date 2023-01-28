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
                <h3 class="card-title">{{translate('جميع المستخدمين')}}</h3>
                @can('Users Create')
                <a href="{{ route('user-create') }}" class="btn btn-primary btn-sm float-right">
                    {{ translate('إضافة  مستخدم جديد') }}
                </a>
                @endcan
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example" class="table table-bordered table-striped" style="font-size:15px;">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>{{translate('الاسم')}}</th>
                    <th>{{translate('الايميل')}}</th>
                    <th>{{translate('العمليات')}}</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($users as $user)
                    <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                      <td>
                         @can('Users Edit')
                        <a href="{{route('user-edit',$user->id)}}" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
                         @endcan
                         @can('Users Delete')
                        <a href="{{route('user-delete',$user->id)}}" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                         @endcan
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