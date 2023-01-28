@extends('backend.partial.layout')
@section('content')
<section class="content mt-2">
   <div class="container-fluid">
      <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                    {{ translate('إضافة وظيفة جديدة') }}
                </h3>
              </div>

              <div class="card-body">
                <form action="{{ route('role-store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <label>
                                {{ translate('اسم الوظيفة') }}
                            </label>
                            <input type="text" name="name" class="form-control mb-2" required />
                            <input type="submit" class="btn btn-primary btn-sm" value="{{ translate('حفظ') }}" />
                        </div>

                        <div class="col-md-6">
                            <label>
                                {{ translate('الصلاحيات') }}
                            </label>
                            <select class="form-select" multiple name="permissions[]">
                                @foreach ($permissions as $permission)
                                    <option value="{{ $permission->id }}">
                                        {{ $permission->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </form>
            </div>
          </div>
      </div>
   </div>
</section>

@endsection
