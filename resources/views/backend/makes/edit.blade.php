@extends('backend.partial.layout')
@section('content')
<section class="content mt-2">
   <div class="container-fluid">
      <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                    {{ translate('تعديل ماركة جديدة') }} ({{ $make->name }})
                </h3>
              </div>

              <div class="card-body">
                <form action="{{ route('makes-update') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="id" value="{{ $make->id }}" />
                    <div class="row">
                        <div class="col-md-6">
                            <label>
                                {{ translate('اسم الماركة') }}
                            </label>
                            <input type="text" value="{{ $make->name }}" name="name" class="form-control mb-2" required />
                            <input type="submit" class="btn btn-primary btn-sm" value="{{ translate('حفظ') }}" />
                        </div>

                        <div class="col-md-6">
                            <label>
                                {{ translate('شعار الماركة') }}
                            </label>
                            <input type="file" name="logo" class="form-control" />
                            @if($make->logo)
                                <img src="{{ $make->logo }}" class="img-responsive" style="width:auto; height: 150px">
                            @endif
                        </div>
                    </div>
                </form>
            </div>
          </div>
      </div>
   </div>
</section>

@endsection
