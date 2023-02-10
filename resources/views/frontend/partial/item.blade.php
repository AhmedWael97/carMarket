<div class="card item-card mb-3">
    <div class="imgCap">
        @if ($car->thumbnail != null)
        <img src="{{ url('/images') }}/{{ $car->thumbnail }}"  class="w-100"/>
        @else
            <img src="{{ url('/assets/imgs/bg-8.jpg') }}"  class="w-100"/>
        @endif
        <div class="brands mb-2 ">
            <label class="badge bg-dark">
                @if($car->make)
                    {{ $car->make->name }}
                @else
                    {{ translate('لم يخصص ماركة') }}
                @endif
            </label>
            <label class="badge bg-dark">
                @if($car->model_type)
                    {{ $car->model_type->name }}
                @else
                    {{ translate('لم يخصص موديل') }}
                @endif
            </label>
            @if($car->used == 1)
            <label class="badge bg-light text-black">
                مستخدم - USED
            </label>
            @else
                <label class="badge bg-success">
                    جديد - New
                </label>
            @endif
        </div>
        <div class="priceandactions">
            @if($car->discount_price > 0)
            <label class="badge bg-warning text-line-through">
                {{ $car->price }} {{ get_currency() }}
            </label>
            <br>
            <label class="badge bg-success">
                {{ $car->discount_price }} {{ get_currency() }}
            </label>
            <br>
            @else
            <label class="badge bg-success">
                {{ $car->price }} {{ get_currency() }}
            </label>
            <br>
            @endif

            <label class="badge bg-primary">
               <a  carId="{{ $car->id }}" class=" cursor-pointer text-decoration-none text-white addCompare">
                {{ translate('أضف للمقارنة') }}
               </a>
            </label>
            <br>
            <label class="badge bg-danger">
                <a carId="{{ $car->id }}" class="cursor-pointer text-decoration-none addFavorite text-white">
                    {{ translate('أضف للمفضلة') }}
                </a>
            </label>
        </div>
    </div>
    <div class="item-details prl-5 mt-2 mb-3">
        <h4 class="text-center">
           <b>
                <a href="{{ route('car-details',$car->id) }}" class="text-decoration-none ">
                    {{ $car->name }}
                </a>
           </b>
        </h4>
        <small class="text-grey d-block">
           {{ substr($car->short_desc, 0, 50) }}
        </small>

     </div>
</div>
