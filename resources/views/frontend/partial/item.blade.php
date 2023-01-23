<div class="card item-card">
    <div class="imgCap">
        <img src="{{ url('/assets/imgs/bg-8.jpg') }}"  class="w-100"/>
        <div class="brands mb-2 ">
            <label class="badge bg-dark">
                KIA - كيا
            </label>
            <label class="badge bg-dark">
                GRAND CERATO - جراند سيراتو
            </label>
            @if($used == 1)
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
            @if($discount == 1)
            <label class="badge bg-warning text-line-through">
                220000 ريال
            </label>
            <br>
            @endif
            <label class="badge bg-success">
                195000 ريال
            </label>
            <br>
            <label class="badge bg-primary">
                قارن
            </label>
            <br>
            <label class="badge bg-danger">
                مفضل
            </label>
        </div>
    </div>
    <div class="item-details prl-5 mt-2 mb-3">
        <h4 class="text-center">
           <b>
                KIA GRAND CERATO 2022
           </b>
        </h4>
        <small class="text-grey d-block">
            وصف سيارة دقيق لا يتعدي تقريبا 50 حرفا فقط حتي لا يزيد عن سطرين
            وصف سيارة دقيق لا يتعدي تقريبا 50 حرفا فقط حتي لا يزيد عن سطرين
        </small>
        <div class="splitter"></div>
       <div class="row no-margin mb-2">
            <div class="col-md-6">
                <small class="d-block">
                    سنة الصنع : 2023
                 </small>
                 <small class="d-block">
                    ناقل الحركة : اوتوماتيك
                 </small>
            </div>
            <div class="col-md-6">
                <small class="d-block">
                   سعة الماتور : 1600 CC
                 </small>
                 @if($used == 1)
                 <small class="d-block">
                    كيلو متر : 1000 كم
                 </small>
                 @endif
            </div>
       </div>
     </div>
</div>
