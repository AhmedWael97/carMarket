@extends('backend.partial.layout')
@section('content')
<section class="content mt-2">
   <div class="container-fluid">
      <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                    {{ translate('جميع الماركات') }}
                </h3>
                <a href="{{ route('makes-create') }}" class="btn btn-primary btn-sm float-right">
                    {{ translate('إضافة ماركة جديدة') }}
                </a>
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
                            {{ translate('الصورة') }}
                        </td>
                        <td>
                            {{ translate('العمليات') }}
                        </td>
                    </thead>
                    <tbody>
                        @foreach($makes as $key=>$make)
                            <tr>
                               <td>
                                {{ ++$key }}
                               </td>
                               <td>
                                {{ $make->id }}
                               </td>
                               <td>
                                {{ $make->name }}
                               </td>
                               <td>
                                    @if($make->logo != null)
                                        <img src="{{ $make->logo }}" class="w-100" />
                                    @endif
                               </td>
                               <td>
                                    <a href="{{ route('makes-edit',$make->id) }}" class="btn btn-warning btn-sm">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <a href="{{ route('makes-delete',$make->id) }}" class="btn btn-danger btn-sm">
                                        <i class="fas fa-trash"></i>
                                    </a>
                               </td>
                            </tr>

                        @endforeach
                    </tbody>
                </table>
                {{ $makes->links('pagination::bootstrap-4') }}
            </div>
          </div>
      </div>
   </div>
</section>

@endsection
