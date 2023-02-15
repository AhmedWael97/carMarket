@extends('backend.partial.layout')
@section('content')
<section class="content mt-2">
   <div class="container-fluid">
      <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                    {{ translate('إضافة موديل جديد') }}
                </h3>
              </div>

              <div class="card-body">
                <form action="{{ route('models-store') }}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <label>
                                {{ translate('اسم الموديل') }}
                            </label>
                            <input type="text" name="name" class="form-control mb-2" required />
                            <input type="submit" class="btn btn-primary btn-sm" value="{{ translate('حفظ') }}" />
                        </div>
                        
                    </div>
                </form>
            </div>
          </div>
      </div>
   </div>
</section>

@endsection
