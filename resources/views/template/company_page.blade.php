@extends('template.layout.master')
@section('css')
    <link rel="stylesheet" href="../assets/css/company_page.css">
@endsection
@section('content')
    <main>


        <div class=" section_header">
            <div class="heading">
                <h4>
                    Companies
                </h4>
                <div class="breadcrumb_container">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page"> Companies </li>
                    </ol>
                </div>
            </div>


        </div>
        <div class=" container">

            <div class="Companies_container  ">
                <!-- <div class="section_heading">
                                <h3>Companies</h3>
                                </div> -->

                <div class="cards_container">
                    @foreach ($data as $item)
                        <div class=" card--long">
                            <div class=" card--long flex_row">
                                <i class="card__img">
                                    <img src="images/{{ $item['logo'] }}" alt="">
                                </i>
                                <div class="card__title ">
                                    <span class="card__title_first"> {{ $item['name'] }} </span>
                                    <div class="card__title_second"> <i class="fas fa-map-marker-alt"></i>
                                        {{ $item->location->name }}</div>
                                    <a href="{{ $item['link'] }}">
                                        <div class="card__job_time card__job_time--green"> View Company</div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="subscribe">

        </div>
    </main>
@endsection


</html>
