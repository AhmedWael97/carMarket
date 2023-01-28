@extends('backend.partial.layout')
@section('content')
<section class="content mt-2">
   <div class="container-fluid">
      <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                    {{ translate('جميع الموديلات') }}
                </h3>
                @can('Model Create')
                <a href="{{ route('models-create') }}" class="btn btn-primary btn-sm float-right">
                    {{ translate('إضافة موديل جديد') }}
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
                            {{ translate('كود') }}
                        </td>
                        <td>
                            {{ translate('الاسم') }}
                        </td>
                        <td>
                            {{ translate('الماركة') }}
                        </td>
                        <td>
                            {{ translate('العمليات') }}
                        </td>
                    </thead>
                    <tbody>
                        @foreach($models as $key=>$model)
                            <tr>
                               <td>
                                {{ ++$key }}
                               </td>
                               <td>
                                {{ $model->id }}
                               </td>
                               <td>
                                {{ $model->name }}
                               </td>
                               <td>
                                    {{ $model->make ? $model->make->name : '' }}
                               </td>
                               <td>
                                    @can('Model Edit')
                                    <a href="{{ route('models-edit',$model->id) }}" class="btn btn-warning btn-sm">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    @endcan
                                    @can('Model Delete')
                                    <a href="{{ route('models-delete',$model->id) }}" class="btn btn-danger btn-sm">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                    @endcan
                               </td>
                            </tr>

                        @endforeach
                    </tbody>
                </table>
                {{ $models->links('pagination::bootstrap-4') }}
            </div>
          </div>
      </div>
   </div>
</section>

@endsection
