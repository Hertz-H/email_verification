{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="../assets/css/header_footer.css">
    <link rel="stylesheet" href="../assets/css/job_page.css">
</head>

<body> --}}
@section('layout/')
    @include('include.header')
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









                {{-- <div class="card ">
            <div class="card__header">
                <span class="card__icon"> <i class="fas fa-heart"></i> </span>
                <div class="card__job_time card__job_time--warning"> Part Time</div>
            </div>
             <div class="card__content">
                <i class="card__img">
                    <img src="../assets/img/c-2.png" alt="">
                </i>
                <div class="card__title">
                    <span class="card__title_first"> ui/ux Web Designer</span>
                    <div class="card__title_second"><i class="fas fa-map-marker-alt"></i> Alsafia</div>
                    <div class="company">Prosite</div>
                  
                </div>
                <div class="card__skills">
                    <span>HTML</span> <span >CSS</span>  <span>Figma</span> <span >XD</span> 
                    <span>Figma</span> <span >XD</span> <a href="job_details.html"><span class="page_btn">More</span></a>
                </div>
                
            </div>
            
        </div>
        <div class="card  ">
            <div class="card__header">
                <span class="card__icon"> <i class="fas fa-heart"></i> </span>
                <div class="card__job_time card__job_time--purple"> Contract</div>
            </div>
             <div class="card__content">
                <i class="card__img">
                    <img src="../assets/img/c-7.png" alt="">
                </i>
                <div class="card__title">
                    <span class="card__title_first"> ui/ux Web Designer</span>
                    <div class="card__title_second"> <i class="fas fa-map-marker-alt"></i>Almsbahi</div>
                    <div class="company">Prosite</div>
                  
                </div>
                <div class="card__skills">
                    <span>HTML</span> <span >CSS</span>  <span>Figma</span> <span >XD</span> 
                    <span>Figma</span> <span >XD</span><a href="job_details.html"><span class="page_btn">More</span></a>
                </div>
                
            </div>
            
        </div>
        <div class="card ">
            <div class="card__header">
                <span class="card__icon"> <i class="fas fa-heart"></i> </span>
                <div class="card__job_time card__job_time--pink"> Enternship</div>
            </div>
             <div class="card__content">
                <i class="card__img">
                    <img src="../assets/img/c-6.png" alt="">
                </i>
                <div class="card__title">
                    <span class="card__title_first "> ui/ux Web Designer</span>
                    <div class="card__title_second"> <i class="fas fa-map-marker-alt"></i> Almsbahi</div>
                    <div class="company">Prosite</div>
                  
                </div>
                <div class="card__skills">
                    <span>HTML</span> <span >CSS</span>  <span>Figma</span> <span >XD</span> 
                    <span>Figma</span> <span >XD</span> <a href="job_details.html"><span class="page_btn">More</span></a>
                </div>
                
            </div>
            
        </div>
        <div class="card ">
            <div class="card__header">
                <span class="card__icon"> <i class="fas fa-heart"></i> </span>
                <div class="card__job_time"> Part Time</div>
            </div>
             <div class="card__content">
                <i class="card__img">
                    <img src="../assets/img/c-8.png" alt="">
                </i>
                <div class="card__title">
                    <span class="card__title_first"> ui/ux Web Designer</span>
                    <div class="card__title_second"><i class="fas fa-map-marker-alt"></i> Almsbahi</div>
                    <div class="company">Prosite</div>
                  
                </div>
                <div class="card__skills">
                    <span>HTML</span> <span >CSS</span>  <span>Figma</span> <span >XD</span> 
                    <span>Figma</span> <span >XD</span> <a href="job_details.html"><span class="page_btn">More</span></a>
                </div>
                
            </div>
            
        </div>
        <div class="card ">
            <div class="card__header">
                <span class="card__icon"> <i class="fas fa-heart"></i> </span>
                <div class="card__job_time card__job_time--pink"> Enternship</div>
            </div>
             <div class="card__content">
                <i class="card__img">
                    <img src="../assets/img/c-6.png" alt="">
                </i>
                <div class="card__title">
                    <span class="card__title_first "> ui/ux Web Designer</span>
                    <div class="card__title_second"> <i class="fas fa-map-marker-alt"></i> Almsbahi</div>
                    <div class="company">Yemen Solution</div>
                  
                </div>
                <div class="card__skills">
                    <span>HTML</span> <span >CSS</span>  <span>Figma</span> <span >XD</span> 
                    <span>Figma</span> <span >XD</span> <a href="job_details.html"><span class="page_btn">More</span></a>
                </div>
                
            </div>
            
        </div> --}}


            </div>


        </section>
    </div>
    @include('include.footer')
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script> -->
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/filter.js"></script>
    <script></script>
    </body>

    </html>
