@extends('backend.partial.layout')
@section('content')
<section class="content mt-2">
   <div class="container-fluid">
      <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                    {{ translate('إضافة  مستخدم جديد') }}
                </h3>
              </div>

              <div class="card-body">
                <form action="{{ route('user-update') }}" method="post" enctype="multipart/form-data">
                    @csrf
                
                    <div class="row">
                        <div class="col-md-6">
                            <label>
                                {{ translate('اسم المستخدم') }}
                            </label>
                            <input type="text" name="name" class="form-control mb-2" required />
                        </div>
                        <div class="col-md-6">
                        <div class="form-group">
                                <label for="exampleSelectRounded0">{{translate('الوظيفة')}}</label>
                                <select class="custom-select select2 rounded-0" name="role_id" id="exampleSelectRounded0">
                                @foreach($roles as $role)
                                <option value="{{$role->id}}">{{$role->name}}</option>
                                @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label>
                                {{ translate('الايميل') }}
                            </label>
                            <input type="email" name="email" class="form-control mb-2" required />
                        </div>
                        <div class="col-md-6">
                        <div class="form-group">
                                <label for="password">{{translate('كلمة السر')}}</label>
                                <input name="password" type="password"  class="form-control" placeholder="{{translate('أدخل كلمة السر ')}}">
                            </div>
                        </div>
                        </div>
      
                    </div>
                    <button class="btn btn-primary" type="submit">{{translate('حفظ')}}</button>
                </form>
            </div>
          </div>
      </div>
   </div>
</section>

@endsection
