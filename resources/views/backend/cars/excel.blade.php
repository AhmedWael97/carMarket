@extends('backend.partial.layout')
@section('content')
<section class="content mt-2">
   <div class="container-fluid">
      <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">{{ translate('إضافة سيارات جديدة') }}</h3>
              </div>
              <div class="card-body">
                <div class="row">
                    <div class="col-md-5">
                       <form class="form" action="{{ route('upload-excel') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group mb-2">
                                <label>
                                    {{ translate('ملف السيارات') }}
                                </label>
                                <small class="text-danger d-block">
                                    {{ translate('يقبل فقط ملفات xlsx, csv') }}
                                </small>

                                <input type="file" name="file" class="form-control mb-2" required>
                                <input type="submit" class="btn btn-primary " value="{{ translate('رفع الملف') }}" >
                                <a href="{{ route('example-sheet') }}" download class="btn btn-success">
                                    {{ translate('تحميل ملف المثال') }}
                                </a>
                            </div>
                       </form>
                    </div>
                </div>
            </div>
          </div>
      </div>
   </div>
</section>

@endsection
