@extends('backend.partial.layout')
@section('content')
<section class="content mt-2">
   <div class="container-fluid">
      <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Create a New Car</h3>
              </div>

              <div class="card-body">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="form-group">
                            <label for="price">Price</label>
                            <input type="price" name="price" class="form-control" id="price" placeholder="Enter Car Price">
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="form-group">
                            <label for="price">Price</label>
                            <input type="price" name="price" class="form-control" id="price" placeholder="Enter Car Price">
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="form-group">
                            <label for="price">Price</label>
                            <input type="price" name="price" class="form-control" id="price" placeholder="Enter Car Price">
                        </div>
                    </div>
                </div>
            </div>
          </div>
      </div>
   </div>
</section>

@endsection
