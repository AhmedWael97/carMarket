@extends('backend.partial.layout')
@section('content')
<section class="content mt-2">
   <div class="container-fluid">
      <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                    {{ translate('إعدادات الموقع') }}
                </h3>
              </div>

              <div class="card-body">
                <form action="{{ route('settings-update') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <h4 class="mb-4">
                        {{ translate('الاعدادات العامة') }}
                    </h4>
                    <div class="row">
                        <div class="col-md-4">
                            <label>
                                {{ translate('اسم الموقع') }}
                            </label>
                            <input type="text" value="{{ $settings->site_name }}" name="site_name" class="form-control mb-2" required />
                            <input type="submit" class="btn btn-primary btn-sm" value="{{ translate('حفظ') }}" />
                        </div>

                        <div class="col-md-4">
                            <label>
                                {{ translate('شعار الموقع') }}
                            </label>
                            <input type="file" name="site_logo" class="form-control" />
                            @if($settings->site_logo != null)
                                <img src="{{ url('/assets/settings/') }}/{{ $settings->site_logo }}" style="width:auto; height:65px" />
                            @endif
                        </div>
                        <div class="col-md-4">
                            <label>
                                {{ translate('fav icon') }}
                            </label>
                            <input type="file" name="site_fav_icon" class="form-control" />
                            @if($settings->site_fav_icon != null)
                                <img src="{{ url('/assets/settings/') }}/{{ $settings->site_fav_icon }}" style="width:auto; height:65px" />
                            @endif
                        </div>
                    </div>
                    <hr>
                    <h4 class="mb-4">
                        {{ translate('القسم الاول') }}
                    </h4>
                    <div class="row">

                        <div class="col-md-4">
                            <label>
                                {{ translate('صورة الخلفية') }}
                            </label>
                            <input type="file" name="section_one_img" class="form-control mb-2" />
                            @if($settings->section_one_img != null)
                                <img src="{{ url('/assets/settings/') }}/{{ $settings->section_one_img }}" style="width:auto; height:65px" />
                            @endif
                            <br>
                            <input type="submit" class="btn btn-primary btn-sm mt-2" value="{{ translate('حفظ') }}" />
                        </div>
                    </div>
                    <hr>
                    <h4 class="mb-4">
                        {{ translate('القسم نبذة عن') }}
                    </h4>
                    <div class="row">

                        <div class="col-md-12">
                            <label>
                                {{ translate('الوصف') }}
                            </label>
                           <textarea class="form-control mb-2" name="description">{{ $settings->description }}</textarea>
                            <input type="submit" class="btn btn-primary btn-sm" value="{{ translate('حفظ') }}" />
                        </div>
                    </div>
                    <hr>
                    <h4 class="mb-4">
                        {{ translate('القسم الاشتراك عبر البريد الالكتروني') }}
                    </h4>
                    <div class="row">

                        <div class="col-md-4">
                            <label>
                                {{ translate('عنوان القسم') }}
                            </label>
                            <input type="text" value="{{ $settings->section_subscribe_title }}" name="section_subscribe_title" class="form-control mb-2" required />
                            <input type="submit" class="btn btn-primary btn-sm" value="{{ translate('حفظ') }}" />
                        </div>
                        <div class="col-md-6">
                            <label>
                                {{ translate('وصف القسم') }}
                            </label>
                            <input type="text" value="{{ $settings->section_subscribe_desc }}" name="section_subscribe_desc" class="form-control mb-2" required />

                        </div>
                        <div class="col-md-2">
                            <label>
                                {{ translate('صورة الجانبية') }}
                            </label>
                            <input type="file" name="section_subscribe_img" class="form-control mb-2" />
                            @if($settings->section_subscribe_img != null)
                                <img src="{{ url('/assets/settings/') }}/{{ $settings->section_subscribe_img   }}" style="width:auto; height:65px" />
                            @endif
                        </div>
                    </div>
                    <hr>
                    <h4 class="mb-4">
                        {{ translate('الفوتر') }}
                    </h4>
                    <div class="row">

                        <div class="col-md-6 mb-2">
                            <label>
                                {{ translate('الفوتر') }}
                            </label>
                           <input class="form-control" name="footer_text" value="{{ $settings->footer_text }}"  />
                        </div>
                        <div class="col-md-6"></div>
                        <div class="col-md-3">
                            <label>
                                {{ translate('رابط الفيس بوك') }}
                            </label>
                           <input class="form-control mb-2" name="facebook_url" value="{{ $settings->facebook_url }}"  />
                           <input type="submit" class="btn btn-primary btn-sm" value="{{ translate('حفظ') }}" />
                        </div>
                        <div class="col-md-3">
                            <label>
                                {{ translate('رابط الانستجرام') }}
                            </label>
                           <input class="form-control" name="instagram_url" value="{{ $settings->instagram_url }}"  />
                        </div>
                        <div class="col-md-3">
                            <label>
                                {{ translate('رابط تويتر') }}
                            </label>
                           <input class="form-control" name="twitter_url" value="{{ $settings->twitter_url }}"  />
                        </div>
                        <div class="col-md-3">
                            <label>
                                {{ translate('رابط سناب شات') }}
                            </label>
                           <input class="form-control" name="snap_chat" value="{{ $settings->snap_chat }}"  />
                        </div>
                    </div>
                    <hr>
                </form>
            </div>
          </div>
      </div>
   </div>
</section>

@endsection
