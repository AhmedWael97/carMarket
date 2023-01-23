@extends('frontend.partial.layout')
@section('content')
    <div class="container">
        <table class="table table-bordered compare-table w-100 mt-2 mb-2">
            <thead>
                <td class="w-25">
                    #
                </td>
                <td class="text-center">
                    كيا سيراتو 2022
                </td>
                <td class="text-center">
                    دودج رام 2022
                </td>
                <td class="text-center">
                    دودج رام 2021
                </td>
            </thead>
            <tbody>
                <tr>
                    <td>
                        الصورة
                    </td>
                    <td class="text-center">
                        <img src="{{ url('assets/imgs/bg-8.jpg') }}"  class="w-100" />
                    </td>
                    <td class="text-center">
                            <img src="{{ url('assets/imgs/bg-8.jpg') }}"  class="w-100" />
                    </td>
                    <td class="text-center">
                        <img src="{{ url('assets/imgs/bg-8.jpg') }}"  class="w-100" />
                    </td>
                </tr>
                <tr>
                    <td>
                        السعر
                    </td>
                    <td class="text-center">
                        220000 ريال
                    </td>
                    <td class="text-center">
                        5000000 ريال
                    </td>
                    <td class="text-center">
                        400000 ريال
                    </td>
                </tr>
                <tr>
                    <td>
                        سعة الماتور
                    </td>
                    <td class="text-center">
                        1600 CC
                    </td>
                    <td class="text-center">
                        2000 CC
                    </td>
                    <td class="text-center">
                        2000 CC
                    </td>
                </tr>
                <tr>
                    <td>
                        نوع الهيكل
                    </td>
                    <td class="text-center">
                        سيدان
                    </td>
                    <td class="text-center">
                       نقل
                    </td>
                    <td class="text-center">
                        نقل
                     </td>
                </tr>
                <tr>
                    <td>
                        نوع الوقود
                    </td>
                    <td class="text-center">
                       95 - 92
                    </td>
                    <td class="text-center">
                       95
                    </td>
                    <td class="text-center">
                        95 - 92
                     </td>
                </tr>
                <tr>
                    <td>
                        ناقل الحركة
                    </td>
                    <td class="text-center">
                        مانيوال - اوتوماتيك
                    </td>
                    <td class="text-center">
                        اوتوماتيك
                    </td>
                    <td class="text-center">
                        اوتوماتيك
                    </td>
                </tr>
                <tr>
                    <td>
                        استهلاك الوقود
                    </td>
                    <td class="text-center">
                        6 لتر / 100 كيلو
                    </td>
                    <td class="text-center">
                       10 لتر  / 100 كيلو
                    </td>
                    <td class="text-center">
                        8 لتر  / 100 كيلو
                     </td>
                </tr>
                <tr>
                    <td>
                        نوع الوقود
                    </td>
                    <td class="text-center">
                       95 - 92
                    </td>
                    <td class="text-center">
                       95
                    </td>
                    <td class="text-center">
                        95 - 92
                     </td>
                </tr>
                <tr>
                    <td>
                        ناقل الحركة
                    </td>
                    <td class="text-center">
                        مانيوال - اوتوماتيك
                    </td>
                    <td class="text-center">
                        اوتوماتيك
                    </td>
                    <td class="text-center">
                        اوتوماتيك
                    </td>
                </tr>
                <tr>
                    <td>
                        استهلاك الوقود
                    </td>
                    <td class="text-center">
                        6 لتر / 100 كيلو
                    </td>
                    <td class="text-center">
                       10 لتر  / 100 كيلو
                    </td>
                    <td class="text-center">
                        8 لتر  / 100 كيلو
                     </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
