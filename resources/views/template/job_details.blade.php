@extends('template.layout.master')

@section('css')
    <link rel="stylesheet" href="../assets/css/job_details.css">
@endsection
@section('content')
    <main>
        <div class=" section_header">
            <div class="heading">
                <h4>
                    About Jobs
                </h4>
                <div class="breadcrumb_container">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page"> About </li>
                    </ol>
                </div>
            </div>


        </div>
        <div class=" container">
            <div class=" card--long">
                <div class=" card--long flex_row">
                    <i class="card__img">
                        <img src="/images/{{ $data->company->logo }}" alt="">
                    </i>
                    <div class="card__title ">
                        <span class="card__title_first"> {{ $data->title }} </span>
                        <div class="card__title_second"> <i class="far fa-building"></i> {{ $data->company->name }}
                            <span class="card--long__job_time "> {{ $data->inerval }}</span>
                        </div>
                        <div class="card__job_time card__job_time--purple">{{ $category->title }}</div>
                        {{-- Computer Science --}}

                    </div>
                    <button class="button  button--green"><a href="{{ $data->company->link }}"> View
                            Company</a></button>

                    <!-- <div class="card__skills">
                                    <span>HTML</span> <span >CSS</span>  <span>Figma</span> <span >XD</span>
                                    <span>Figma</span> <span >XD</span> <span >More</span>
                                </div> -->

                </div>
            </div>
            <div class="job_info_container ">

                <div class="left_job_info">
                    <div class="job_info">
                        <div class="job_description">
                            {{-- <h4>Job Description</h4>
                            <p> {{ $data->description }} </p> --}}
                            {{-- <p>We are looking for a PHP Developer responsible for managing back-end services
                                and the interchange of data between the server and the users. Your primary focus
                                will be the development of all server-side logic, definition and maintenance of the
                                central database .</p><br>
                            <p>
                                Across our network, we strive to provide rapid, performance-based, industry-focused
                                and technology-enabled services, which reflect a shared knowledge of global and local
                                industries and our experience of the Indian business environment.
                            </p> --}}
                        </div>
                        <div class="job_requirments">

                            {!! $data->requirements !!}
                            {{-- <ul>
                                <li><span><i class=" fas fa-check small"></i></span> Strong core PHP Hands on
                                    experience.</li>
                                <li><span><i class=" fas fa-check small"></i></span>Strong Expertise in CodeIgniter
                                    Framework .</li>
                                <li><span><i class=" fas fa-check small"></i></span>Understanding of MVC design pattern.
                                </li>

                                <li><span><i class=" fas fa-check small"></i></span> Proficient understanding of code
                                    versioning tools, such as Git.</li>
                            </ul> --}}

                        </div>
                        {{-- <div class="skills_con">
                            <h4>Skills Required</h4>
                            <div class="skills">
                                <div>
                                    <span class="skill_key">Role</span>
                                    <span class="skill_key">Industry Type</span>
                                    <span class="skill_key">Functional Area</span>
                                    <span class="skill_key">Employment Type</span>
                                    <span class="skill_key">Role Category</span>
                                </div>
                                <div>
                                    <span class="skill_value">Database Architect / Designer</span>
                                    <span class="skill_value">Advertising & Marketing</span>
                                    <span class="skill_value">Engineering - Software</span>
                                    <span class="skill_value"> Part Time, Permanent</span>
                                    <span class="skill_value">DBA / Data warehousing</span>
                                </div>
                            </div>

                        </div> --}}
                        <hr>
                        <div class="job_app_shar_cont">

                            <div class="apply">
                                To apply send your cv to <a href="mailto:{{ $data->company->email }}">
                                    {{ $data->company->email }}</a>

                            </div>
                            <div class="shar">
                                <a href=""
                                    onclick=" window.print();
                                return false;"><i
                                        class="fas fa-download"></i> <i class="fas fa-heart"></i></a>
                            </div>

                        </div>
                    </div>

                </div>
                <div class="job_endin_cont">

                    <div>
                        <span class="skill_key">Role Category</span>
                        <span class="skill_key">Company</span>
                        <span class="skill_key">Location</span>
                        <span class="skill_key">Employment Type</span>
                        <span class="skill_key">Due Date</span>
                    </div>
                    <div>
                        <span class="skill_value">{{ $category->title }}</span>
                        <span class="skill_value">{{ $data->company->name }}</span>
                        <span class="skill_value">{{ $data->company->location->name }}</span>
                        <span class="skill_value"> {{ $data->inerval }}, Permanent</span>
                        <span class="skill_value">{{ $data->end_date }}</span>
                    </div>

                </div>
            </div>
        </div>
        @if ($similar_jobs != null)
            <div class="container related_jobs ">
                <h3 class="related_j_heading"> Related Jobs</h3>
                <div class="card_container row_css">
                    @foreach ($similar_jobs->cat_jobs as $item)
                        @if ($loop->iteration < 5)
                            <div class="card">
                                <div class="card__header">
                                    <span class="card__icon"> <i class="fas fa-heart"></i> </span>
                                    <div class="card__job_time">{{ $item->inerval }}</div>
                                </div>
                                <div class="card__content">
                                    <i class="card__img">
                                        <img src="/images/{{ $item->company['logo'] }}" alt="">
                                    </i>
                                    <div class="card__title">
                                        <span class="card__title_first"> {{ $item->title }} </span>
                                        <div class="card__title_second"> <i
                                                class="fas fa-map-marker-alt"></i>{{ $item->company->name }}</div>

                                    </div>
                                    <div class="card__skills">
                                        <span>HTML</span> <span>CSS</span> <span>Figma</span> <span>XD</span>
                                        <span>Figma</span> <span>XD</span> <a
                                            href="/jobDetails/{{ $item['id'] }}"><span>More</span></a>
                                    </div>

                                </div>

                            </div>
                        @endif
                    @endforeach
                </div>


            </div>
        @else
        @endif

    </main>
@endsection

</html>
