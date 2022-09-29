<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/header_footer.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/slider_with_js.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="assets/css/left.css" id="language_style">
    <link rel="stylesheet" href="assets/css/home.css">


</head>


<body>

    @include('include.header')
    <main>
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-caption d-none d-md-block">
                    <h4>Your <span class="sli_span">Dream Job</span> is Waiting </h4>
                    <p>Enjoy Searching Journey For a Job with Us</p>
                </div>
                <div class="carousel-item active">
                    <!-- <img src="..." class="d-block w-100" alt="..."> -->
                </div>
                <div class="carousel-item">
                    <!-- <img src="..." class="d-block w-100" alt="..."> -->
                </div>
                <div class="carousel-item">
                    <!-- <img src="..." class="d-block w-100" alt="..."> -->
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <div class="container">
            <div class="jobs_section">
                <div class="heading_cont">
                    <h3> Recent Jobs</h3>
                    <div class="lowe_head">
                        Latest jobs puplished
                    </div>
                </div>
                <div class="card_container row_css">
                    @foreach ($data['job'] as $item)
                        <div class="card">
                            <div class="card__header">
                                <span class="card__icon"> <i class="fas fa-heart"></i> </span>
                                <div class="card__job_time"> {{ $item['interval'] }}</div>
                            </div>
                            <div class="card__content">
                                <i class="card__img">
                                    <img src="images/{{ $item['logo'] }}" alt="">
                                </i>
                                <div class="card__title">
                                    <span class="card__title_first"> {{ $item['title'] }}</span>
                                    <div class="card__title_second"> <i class="fas fa-map-marker-alt"></i>
                                        {{ $item['location'] }}</div>
                                    <div class="company "> {{ $item['name'] }}</div>


                                </div>
                                <div class="card__skills">
                                    <span>HTML</span> <span>CSS</span> <span>Figma</span> <span>XD</span>
                                    <span>Figma</span> <span>XD</span> <a href="job_details.html"><span
                                            class="page_btn">More</span></a>
                                </div>

                            </div>

                        </div>
                    @endforeach
                    {{-- <div class="card">
            <div class="card__header">
                <span class="card__icon"> <i class="fas fa-heart"></i> </span>
                <div class="card__job_time"> Fall Time</div>
            </div>
             <div class="card__content">
                <i class="card__img">
                    <img src="assets/img/c-5.png" alt="">
                </i>
                <div class="card__title">
                    <span class="card__title_first"> ui/ux Web Designer</span>
                    <div class="card__title_second"> <i class="fas fa-map-marker-alt"></i> Almsbahi</div>
                  
                </div>
                <div class="card__skills">
                    <span>HTML</span> <span >CSS</span>  <span>Figma</span> <span >XD</span> 
                    <span>Figma</span> <span >XD</span>  <a href="template/job_details.html"><span class="page_btn">More</span></a>
                </div>
                
            </div>
            
        </div> --}}
                    {{-- <div class="card">
            <div class="card__header">
                <span class="card__icon"> <i class="fas fa-heart"></i> </span>
                <div class="card__job_time card__job_time--warning"> Part Time</div>
            </div>
             <div class="card__content">
                <i class="card__img">
                    <img src="assets/img/c-2.png" alt="">
                </i>
                <div class="card__title">
                    <span class="card__title_first"> ui/ux Web Designer</span>
                    <div class="card__title_second"><i class="fas fa-map-marker-alt"></i> Almsbahi</div>
                  
                </div>
                <div class="card__skills">
                    <span>HTML</span> <span >CSS</span>  <span>Figma</span> <span >XD</span> 
                    <span>Figma</span> <span >XD</span>  <a href="template/job_details.html"><span class="page_btn">More</span></a>
                </div>
                
            </div>
            
        </div>
        <div class="card">
            <div class="card__header">
                <span class="card__icon"> <i class="fas fa-heart"></i> </span>
                <div class="card__job_time card__job_time--purple"> Contract</div>
            </div>
             <div class="card__content">
                <i class="card__img">
                    <img src="assets/img/c-7.png" alt="">
                </i>
                <div class="card__title">
                    <span class="card__title_first"> ui/ux Web Designer</span>
                    <div class="card__title_second"> <i class="fas fa-map-marker-alt"></i>Almsbahi</div>
                  
                </div>
                <div class="card__skills">
                    <span>HTML</span> <span >CSS</span>  <span>Figma</span> <span >XD</span> 
                    <span>Figma</span> <span >XD</span>  <a href="template/job_details.html"><span class="page_btn">More</span></a>
                </div>
                
            </div>
            
        </div>
        <div class="card">
            <div class="card__header">
                <span class="card__icon"> <i class="fas fa-heart"></i> </span>
                <div class="card__job_time card__job_time--pink"> Enternship</div>
            </div>
             <div class="card__content">
                <i class="card__img">
                    <img src="assets/img/c-6.png" alt="">
                </i>
                <div class="card__title">
                    <span class="card__title_first "> ui/ux Web Designer</span>
                    <div class="card__title_second"> <i class="fas fa-map-marker-alt"></i> Almsbahi</div>
                  
                </div>
                <div class="card__skills">
                    <span>HTML</span> <span >CSS</span>  <span>Figma</span> <span >XD</span> 
                    <span>Figma</span> <span >XD</span>  <a href="template/job_details.html"><span class="page_btn">More</span></a>
                </div>
                
            </div>
            
        </div>
        <div class="card">
            <div class="card__header">
                <span class="card__icon"> <i class="fas fa-heart"></i> </span>
                <div class="card__job_time"> Part Time</div>
            </div>
             <div class="card__content">
                <i class="card__img">
                    <img src="assets/img/c-8.png" alt="">
                </i>
                <div class="card__title">
                    <span class="card__title_first"> ui/ux Web Designer</span>
                    <div class="card__title_second"><i class="fas fa-map-marker-alt"></i> Almsbahi</div>
                  
                </div>
                <div class="card__skills">
                    <span>HTML</span> <span >CSS</span>  <span>Figma</span> <span >XD</span> 
                    <span>Figma</span> <span >XD</span>  <a href="template/job_details.html"><span class="page_btn">More</span></a>
                </div>
                
            </div>
            
        </div>
        <div class="card">
            <div class="card__header">
                <span class="card__icon"> <i class="fas fa-heart"></i> </span>
                <div class="card__job_time"> Fall Time</div>
            </div>
             <div class="card__content">
                <i class="card__img">
                    <img src="assets/img/c-5.png" alt="">
                </i>
                <div class="card__title">
                    <span class="card__title_first"> ui/ux Web Designer</span>
                    <div class="card__title_second"> <i class="fas fa-map-marker-alt"></i> Almsbahi</div>
                  
                </div>
                <div class="card__skills">
                    <span>HTML</span> <span >CSS</span>  <span>Figma</span> <span >XD</span> 
                    <span>Figma</span> <span >XD</span>  <a href="template/job_details.html"><span class="page_btn">More</span></a>
                </div>
                
            </div>
            
        </div>
        <div class="card">
            <div class="card__header">
                <span class="card__icon"> <i class="fas fa-heart"></i> </span>
                <div class="card__job_time card__job_time--warning"> Part Time</div>
            </div>
             <div class="card__content">
                <i class="card__img">
                    <img src="assets/img/c-2.png" alt="">
                </i>
                <div class="card__title">
                    <span class="card__title_first"> ui/ux Web Designer</span>
                    <div class="card__title_second"><i class="fas fa-map-marker-alt"></i> Almsbahi</div>
                  
                </div>
                <div class="card__skills">
                    <span>HTML</span> <span >CSS</span>  <span>Figma</span> <span >XD</span> 
                    <span>Figma</span> <span >XD</span>  <a href="template/job_details.html"><span class="page_btn">More</span></a>
                </div>
                
            </div>
            
        </div>
        <div class="card">
            <div class="card__header">
                <span class="card__icon"> <i class="fas fa-heart"></i> </span>
                <div class="card__job_time card__job_time--purple"> Contract</div>
            </div>
             <div class="card__content">
                <i class="card__img">
                    <img src="assets/img/c-7.png" alt="">
                </i>
                <div class="card__title">
                    <span class="card__title_first"> ui/ux Web Designer</span>
                    <div class="card__title_second"> <i class="fas fa-map-marker-alt"></i>Almsbahi</div>
                  
                </div>
                <div class="card__skills">
                    <span>HTML</span> <span >CSS</span>  <span>Figma</span> <span >XD</span> 
                    <span>Figma</span> <span >XD</span>  <a href="template/job_details.html"><span class="page_btn">More</span></a>
                </div>
                
            </div>
            
        </div>
        <div class="card">
            <div class="card__header">
                <span class="card__icon"> <i class="fas fa-heart"></i> </span>
                <div class="card__job_time"> Fall Time</div>
            </div>
             <div class="card__content">
                <i class="card__img">
                    <img src="assets/img/c-5.png" alt="">
                </i>
                <div class="card__title">
                    <span class="card__title_first"> ui/ux Web Designer</span>
                    <div class="card__title_second"> <i class="fas fa-map-marker-alt"></i> Almsbahi</div>
                  
                </div>
                <div class="card__skills">
                    <span>HTML</span> <span >CSS</span>  <span>Figma</span> <span >XD</span> 
                    <span>Figma</span> <span >XD</span>  <a href="template/job_details.html"><span class="page_btn">More</span></a>
                </div>
                
            </div>
            
        </div> --}}

                </div>

                <a href="jobs"><span class="job_page_btn">More Jobs</span></a>
            </div>
        </div>




        <div class="container">

            <div class="ads_container">

                <div class="lower_adv_cont d-flex flex-column flex-md-row  ">
                    @foreach ($data['ad'] as $item)
                        <div class="ad_one"> <img src="images/{{ $item['image'] }}" alt=""></div>
                    @endforeach


                </div>
            </div>

        </div>

        <!-- ###########companies cards################# -->
        <div class="companies_section">
            <!-- <div class="section_heading">
        <h3>Companies</h3>
        <span> Companies we work with</span>
       </div> -->
            <div class="heading_cont">
                <h3> Companies</h3>
                <div class="lowe_head">
                    Companies we work with
                </div>
            </div>
            <div class="company_container">
                @foreach ($data['company'] as $item)
                    <div class=" card--long">
                        <div class=" card--long flex_row">
                            <i class="card__img">
                                <img src="images/{{ $item['logo'] }}" alt="">
                            </i>
                            <div class="card__title ">
                                <span class="card__title_first"> {{ $item['name'] }} </span>
                                <div class="card__title_second"> <i class="fas fa-map-marker-alt"></i>
                                    {{ $item['location'] }}</div>
                            </div>
                        </div>
                    </div>
                @endforeach
                {{-- <div class=" card--long">
        <div class=" card--long flex_row">
            <i class="card__img">
                <img src="assets/img/c-2.png" alt="">
            </i>
            <div class="card__title ">
                <span class="card__title_first"> Yemen Solutions  </span>
                <div class="card__title_second"> <i class="fas fa-map-marker-alt"></i> Almsbahi</div>
            </div>
        </div>
    </div>

    <div class=" card--long">
        <div class=" card--long flex_row">
            <i class="card__img">
                <img src="assets/img/c-7.png" alt="">
            </i>
            <div class="card__title ">
                <span class="card__title_first"> Yemen Solutions  </span>
                <div class="card__title_second"> <i class="fas fa-map-marker-alt"></i> Almsbahi</div>
            
            </div>
        </div>
    </div>
    <div class=" card--long">
        <div class=" card--long flex_row">
            <i class="card__img">
                <img src="assets/img/c-5.png" alt="">
            </i>
            <div class="card__title ">
                <span class="card__title_first"> Yemen Solutions  </span>
                <div class="card__title_second"> <i class="fas fa-map-marker-alt"></i> Almsbahi</div>
            </div>
        </div>
    </div>

    <div class=" card--long">
        <div class=" card--long flex_row">
            <i class="card__img">
                <img src="assets/img/c-2.png" alt="">
            </i>
            <div class="card__title ">
                <span class="card__title_first"> Yemen Solutions  </span>
                <div class="card__title_second"> <i class="fas fa-map-marker-alt"></i> Almsbahi</div>
            </div>
        </div>
    </div>

    <div class=" card--long">
        <div class=" card--long flex_row">
            <i class="card__img">
                <img src="assets/img/c-7.png" alt="">
            </i>
            <div class="card__title ">
                <span class="card__title_first"> Yemen Solutions  </span>
                <div class="card__title_second"> <i class="fas fa-map-marker-alt"></i> Almsbahi</div>
            
            </div>
        </div>
    </div> --}}

            </div>
        </div>
        <!-- ##########end cards############ -->
        <div class="container">
            <!-- ##########Start subscribe############ -->

            <div class="subscribe_container">
                <div class="heading_cont">
                    <h3>Stay Up to Date</h3>
                    <div class="lowe_head">
                        Subscribe to our newsletter to receive our weekly feed
                    </div>
                </div>
                <div class="img_sub_con">
                    <img src="assets/img/subscribe.svg" alt="">
                </div>
                <form class=" needs-validation d-flex justify-content-center flex-column flex-md-row " novalidate>
                    <div class=" input_con">
                        <input type="Email" class="form-control" id="inputEmail" placeholder="username@gmail.com">
                    </div>
                    <select class="form-select" aria-label="select" id="filter_company">
                        <option selected>cat</option>
                        <option value="Yemen Solution">IT</option>
                        <option value="Prosite">HR</option>

                    </select>
                    <button type="submit" class="btn  subscribe_btn">Subscribe</button>
                </form>
            </div>
        </div>
        <!-- ##########End subscribe############ -->



    </main>

    @include('include.footer')




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/main_nav.js"></script>

    <script></script>
</body>

</html>
