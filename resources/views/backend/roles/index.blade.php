@extends('backend.partial.layout')
@section('content')
<section class="content mt-2">
   <div class="container-fluid">
      <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                    {{ translate('جميع الوظائف') }}
                </h3>
                @can('Role Create')
                    <a href="{{ route('role-create') }}" class="btn btn-primary btn-sm float-right">
                        {{ translate('إضافة وظيفة جديدة') }}
                    </a>
                @endcan
              </div>

              <div class="card-body">
                <table class="table table-bordered mb-2">
                    <thead>
                        <td>
                            #
                        </td>

                        <td>
                            {{ translate('الاسم') }}
                        </td>
                        <td class="w-75">
                            {{ translate('الصلاحيات') }}
                        </td>
                        <td>
                            {{ translate('العمليات') }}
                        </td>
                    </thead>
                    <tbody>
                        @foreach($roles as $key=>$role)
                            <tr>
                               <td>
                                {{ ++$key }}
                               </td>
                               <td>
                                {{ $role->name }}
                               </td>
                               <td>
                                    @foreach($role->permissions as $permission)
                                        <label class="badge badge-primary mt-2">
                                            {{ $permission->name }}
                                        </label>
                                    @endforeach
                               </td>
                               <td>
                                @can('Role Edit')
                                    <a href="{{ route('role-edit',$role->id) }}" class="btn btn-warning btn-sm">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                @endcan
                                @can('Role Delete')
                                    <a href="{{ route('role-delete',$role->id) }}" class="btn btn-danger btn-sm">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                @endcan
                               </td>
                            </tr>

                        @endforeach
                    </tbody>
                </table>

            </div>
          </div>
      </div>
   </div>
</section>

@endsection
