@extends('backend.partial.layout')
@section('content')
<section class="content mt-2">
   <div class="container-fluid">
      <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                    {{ translate('تعديل الموديل') }} ({{ $model->name }})
                </h3>
              </div>

              <div class="card-body">
                <form action="{{ route('models-update') }}" method="post">
                    @csrf
                    <input type="hidden" name="id" value="{{ $model->id }}" />
                    <div class="row">
                        <div class="col-md-6">
                            <label>
                                {{ translate('اسم الموديل') }}
                            </label>
                            <input type="text" value="{{ $model->name }}" name="name" class="form-control mb-2" required />
                            <input type="submit" class="btn btn-primary btn-sm" value="{{ translate('حفظ') }}" />
                        </div>
                        <div class="col-md-6">
                            <label>
                                {{ translate('اسم الماركة') }}
                            </label>
                            <select class="form-select" name="make_id" required>

                                @foreach ($makes as $make)
                                    <option {{ $make->id == $model->make_id ? 'selected' : '' }} value="{{ $make->id }}"> {{ $make->name }} </option>
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
