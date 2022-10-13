@extends('template.layout.master')
@section('css')
    <link rel="stylesheet" href="../assets/css/job_page.css">
@endsection
@section('content')
    <div class=" section_header">
        <div class="heading">
            <h4>
                All Jobs
            </h4>
            <div class="breadcrumb_container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Jobs</li>
                </ol>
            </div>
        </div>
    </div>
    <div class="container">
        <section class="job_section d-flex flex-md-row flex-column ">
            <div class="filer_section d-flex  flex-column "style="gap:15px">
                <div class="fliter_heading"> Search Filters</div>
                <input class="form-control" type="text" placeholder="Search key" id="search">
                <select class="form-select" aria-label="select" id="filter_company">
                    {{-- <option selected>Company</option> --}}
                    @foreach ($companies as $item)
                        {{-- <option selected>{{$item['location']}}</option> --}}
                        <option value="{{ $item['name'] }}">{{ $item['name'] }}</option>
                    @endforeach

                </select>
                <select class="form-select" aria-label="select "id="filter_locatin">
                    @foreach ($locations as $item)
                        {{-- <option selected>{{$item['location']}}</option> --}}
                        <option value="{{ $item['name'] }}">{{ $item['name'] }}</option>
                    @endforeach
                </select>
            </div>
            <div class=" row_css w-100 ">
                @foreach ($data as $item)
                    <div class="card">
                        <div class="card__header">
                            <span class="card__icon"> <i class="fas fa-heart"></i> </span>
                            <div class="card__job_time"> {{ $item['inerval'] }}</div>
                        </div>
                        <div class="card__content">
                            <i class="card__img">
                                <img src="images/{{ $item->company['logo'] }}" alt="">
                            </i>
                            <div class="card__title">
                                <span class="card__title_first"> {{ $item['title'] }}</span>
                                <div class="card__title_second"> <i class="fas fa-map-marker-alt"></i>
                                    {{ $item->company->location['name'] }}</div>
                                <div class="company "> {{ $item['name'] }}</div>


                            </div>
                            <div class="card__skills">
                                <span>HTML</span> <span>CSS</span> <span>Figma</span> <span>XD</span>
                                <span>Figma</span> <span>XD</span> <a href="jobDetails/{{ $item['id'] }}"><span
                                        class="page_btn">More</span></a>
                            </div>

                        </div>

                    </div>
                @endforeach


            </div>


        </section>
    </div>
@endsection
@section('javaScript')
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/filter.js"></script>
@endsection

</html>
