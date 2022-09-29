<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- <link rel="stylesheet" href="../assets/css/bootstrapFile.css"> -->
    <link rel="stylesheet" href="../assets/css/header_footer.css">
    <link rel="stylesheet" href="../assets/css/company_page.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />


</head>

<body>
    @include('include.header')
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

                {{-- <div class=" card--long">
                <div class=" card--long flex_row">
                    <i class="card__img">
                        <img src="../assets/img/c-2.png" alt="">
                    </i>
                    <div class="card__title ">
                        <span class="card__title_first"> Yemen Solutions  </span>
                        <div class="card__title_second"> <i class="fas fa-map-marker-alt"></i> Almsbahi</div>
                        <a href=""><div class="card__job_time card__job_time--green"> View Company</div></a>
                    </div>
                </div>
            </div>

            <div class=" card--long">
                <div class=" card--long flex_row">
                    <i class="card__img">
                        <img src="../assets/img/c-7.png" alt="">
                    </i>
                    <div class="card__title ">
                        <span class="card__title_first"> Yemen Solutions  </span>
                        <div class="card__title_second"> <i class="fas fa-map-marker-alt"></i> Almsbahi</div>
                        <a href=""><div class="card__job_time card__job_time--green"> View Company</div></a>
                    </div>
                </div>
            </div>
            <div class=" card--long">
                <div class=" card--long flex_row">
                    <i class="card__img">
                        <img src="../assets/img/c-6.png" alt="">
                    </i>
                    <div class="card__title ">
                        <span class="card__title_first"> Yemen Solutions  </span>
                        <div class="card__title_second"> <i class="fas fa-map-marker-alt"></i> Almsbahi</div>
                        <a href=""><div class="card__job_time card__job_time--green"> View Company</div></a>
                    </div>
                </div>
            </div>
            <div class=" card--long">
                <div class=" card--long flex_row">
                    <i class="card__img">
                        <img src="../assets/img/c-8.png" alt="">
                    </i>
                    <div class="card__title ">
                        <span class="card__title_first"> Yemen Solutions  </span>
                        <div class="card__title_second"> <i class="fas fa-map-marker-alt"></i> Almsbahi</div>
                        <a href=""><div class="card__job_time card__job_time--green"> View Company</div></a>
                    </div>
                </div>
            </div>
            <div class=" card--long">
                <div class=" card--long flex_row">
                    <i class="card__img">
                        <img src="../assets/img/c-5.png" alt="">
                    </i>
                    <div class="card__title ">
                        <span class="card__title_first"> Yemen Solutions  </span>
                        <div class="card__title_second"> <i class="fas fa-map-marker-alt"></i> Almsbahi</div>
                        <a href=""><div class="card__job_time card__job_time--green"> View Company</div></a>
                    </div>
                </div>
            </div>

            <div class=" card--long">
                <div class=" card--long flex_row">
                    <i class="card__img">
                        <img src="../assets/img/c-2.png" alt="">
                    </i>
                    <div class="card__title ">
                        <span class="card__title_first"> Yemen Solutions  </span>
                        <div class="card__title_second"> <i class="fas fa-map-marker-alt"></i> Almsbahi</div>
                        <a href=""><div class="card__job_time card__job_time--green"> View Company</div></a>
                    </div>
                </div>
            </div>

            <div class=" card--long">
                <div class=" card--long flex_row">
                    <i class="card__img">
                        <img src="../assets/img/c-7.png" alt="">
                    </i>
                    <div class="card__title ">
                        <span class="card__title_first"> Yemen Solutions  </span>
                        <div class="card__title_second"> <i class="fas fa-map-marker-alt"></i> Almsbahi</div>
                        <a href=""><div class="card__job_time card__job_time--green"> View Company</div></a>
                    </div>
                </div>
            </div>
            <div class=" card--long">
                <div class=" card--long flex_row">
                    <i class="card__img">
                        <img src="../assets/img/c-6.png" alt="">
                    </i>
                    <div class="card__title ">
                        <span class="card__title_first"> Yemen Solutions  </span>
                        <div class="card__title_second"> <i class="fas fa-map-marker-alt"></i> Almsbahi</div>
                        <a href=""><div class="card__job_time card__job_time--green"> View Company</div></a>
                    </div>
                </div>
            </div> --}}



            </div>
        </div>

        <div class="subscribe">

        </div>
    </main>

    @include('include.footer')


</body>
<script src="../assets/js/bootstap_js_file.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</script>

</html>
