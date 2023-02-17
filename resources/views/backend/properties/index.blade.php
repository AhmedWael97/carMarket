@extends('backend.partial.layout')
@section('content')
<section class="content mt-2">
   <div class="container-fluid">
      <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                    {{ translate('إضافة خاصية جديدة للسيارات') }}
                </h3>
              </div>

              <div class="card-body">
                <form action="{{ route('properties-store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <input type="hidden" class="id" name="id" value="0" />
                        <div class="col-md-6">
                            <label>
                                {{ translate('اسم الخاصية') }}
                            </label>
                            <input type="text" name="name" class="form-control name mb-2" required />
                            <input type="submit" class="btn btn-primary btn-sm" value="{{ translate('حفظ') }}" />
                        </div>


                    </div>
                </form>
                <br>
                <table class="table table-bordered">
                    <thead>
                        <th>#</th>
                        <th>{{ translate('إسم الخاصية') }}</th>
                        <th>{{ translate('مفعل ؟') }}</th>
                        <th>{{ translate('العمليات') }}</th>
                    </thead>
                    <tbody>
                        @foreach($properties as $key=>$property)
                            <tr>
                                <td>
                                    {{ ++$key }}
                                </td>
                                <td>
                                    {{ $property->name }}
                                </td>
                                <td>
                                    <input class="form-check changeStatus" value="1" propId="{{ $property->id }}" type="checkbox" name="checkbox" {{ $property->active ?? 'check' }}/>
                                </td>
                                <td>
                                    @can('Property Edit')
                                    <button type="button" class="btn btn-warning btn-sm update" attr-id="{{ $property->id }}" attr-name="{{ $property->name }}">
                                        <i class="fa fa-edit"></i>
                                    </button>
                                    @endcan

                                    @can('Property Delete')
                                        <a href="{{ route('properties-destroy', $property->id) }}" class="btn btn-danger btn-sm">
                                            <i class="fa fa-trash"></i>
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
