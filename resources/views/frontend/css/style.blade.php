
{{-- cairo font --}}
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300&display=swap" rel="stylesheet">

{{-- bootstrap v5.3 --}}
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" integrity="sha512-c42qTSw/wPZ3/5LBzD+Bw5f7bSF2oxou6wEb+I/lqeaKV5FDIfMvvRp772y4jcJLKuGUOpbJMdg/BTl50fJYAw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
    body {
       background-color:  white;
       font-family: 'Cairo', sans-serif;
       overflow-x: hidden;
    }

    h1,h2,h3,h4, a {
        color: #003545 !important;
        font-weight: 800;
    }

    p {
        font-size: 18px;
        font-weight: 600;
    }

    .infoContact {
        background-color: #003545;
        color: whitesmoke;
        padding-right: 1.5rem;
        padding-left: 1.5rem;
        min-height: 35px;
        padding-top:5px;
    }

    .navbar {
        background-color: transparent !important;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    }


    .font-weight-800{
        font-weight: 800;
    }

    .nav-link, label {
        font-weight: 800;
    }

    .border-radius-40 {
        border-radius: 40px;
    }
    .mt-10 {
        margin-top: 15%;
    }
    .main-section{
        background-image: url('{{ url("/assets/settings/")."/". get_settings("section_one_img") }}');
        background-size: cover;
        background-repeat: no-repeat;
    }
    .card-home {
        margin: 15%;
        padding: 25px;
        overflow: hidden;
    }
    label {
        margin-bottom:5px;
    }
    .card-header {
        background: transparent;
        font-weight: 800;
        font-size:20px;
    }
    .btn-primary {
        background-color: #003545;
        border-color: #003545;
    }
    .btn-primary:hover {
        background-color: #003545;
        border-color: #003545;
        opacity: .8;
    }
    .row {
        margin: 0;
        padding: 0;
    }
    .section-margin  {
        margin-top:60px;
        padding-top:25px;
    }
    .ProductsSection {
        background-color: #fbfbfb;
    }
    .prl-5 {
        padding-right: 10px;
        padding-left: 10px;
    }
    .item-card {
        margin-bottom: 15px;
    }
    .no-margin {
        margin: 0 !important;
    }
    .imgCap {
        position: relative;
    }
    .brands {
        position: absolute;
        bottom: 0;
        right: 10px;
    }
    .priceandactions {
        position: absolute;
        top:5px;
        right: 10px;
    }
    .splitter {
        margin-top:5px;
        margin-bottom: 5px;
        width: 45px;
        height:2px;
        background-color: #003545;
    }
    .text-line-through {
        text-decoration: line-through;
    }
    .float-left {
        float: left;
    }
    .pt-140 {
        padding-top:140px;
    }
    .font-20 {
        font-size: 20px;
    }
    .plr-5 {
        padding-left: 5px;
        padding-right: 5px;
    }
    .compare-table {
        font-weight: bold;
    }
    .card-padding {
        padding:15px;
    }
    .img-radius {
        border-style: solid;
        border-radius: 0.375rem;
        border-color: transparent;
        border-width: 0;
    }
    .w-auto-100 {
        width: auto;
        height: 450px;
    }
    .height-450 {
        height: 450px;
    }
    .fa-size-24 {
        font-size: 24px;
    }

    .cursor-pointer {
        cursor: pointer;
    }

    .float-div  {
        position: fixed;
        left: 10px;
        bottom: 10px;
    }
</style>


