<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="assets/css/header_footer.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/slider_with_js.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="assets/css/left.css" id="language_style">
    <link rel="stylesheet" href="assets/css/home.css">


</head>
<style>
    .introContianer {
        padding-top: 90px;
        padding-bottom: 90px;
        /* background-color: rgb(241, 246, 246); */
        background-color: var(--secondary-color);
    }

    .intro {
        display: flex;
        /* text-align: center; */
    }

    .introContianer .introImgContainer {
        width: 100%;
        /* overflow: hidden; */
        position: relative;
        z-index: 1;

    }

    .introContianer .introImgContainer img {
        max-height: 100%;
        max-width: 100%;
        position: relative;
        z-index: 1;
        border-radius: 10px;

    }

    .introContianer .introContent {
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        justify-content: center;
        width: 100%;

    }

    .introContent p {
        max-width: 400px;
        letter-spacing: 1px;
        font-weight: bolder;
        line-height: 1.8;


    }

    .introContent h4 {
        font-size: 30px;
        font-weight: bolder;
    }

    .jlcVQc {
        width: 155px;
        color: #d8ebe9;
        position: absolute;
        left: 30px;
        top: -90px;
        z-index: 0;
    }

    .cYoJqn {
        transform: rotate(-30deg);
        width: 100px;
        position: absolute;
        right: -20px;
        top: -55px;
        z-index: 2;
        /* color: rgb(88, 209, 189); */
        color: #28b661c4;



    }

    .kTBlWA {
        width: 150px;
        right: -23px;
        bottom: -55px;
        color: rgb(216, 235, 233);
        position: absolute;
        z-index: 0;
        transform: rotate(-14.83deg);
    }

    .hNeGZA {
        width: 94px;
        left: -9%;
        bottom: -4%;
        color: #28b661c4;
        position: absolute;
        transform: rotate(-26.94deg);
        z-index: 1;
    }

    .subscriber {
        position: relative;
    }

    .subscribe_container .feedbackMessage {
        position: absolute;
        display: flex;
        align-items: center;
        width: 250px;
        height: 40px;
        border-color: #28b661;

        /* border-style: solid; */
        border-width: 1px;
        bottom: 100px;
        right: 250px;
        text-align: left;
        color: #28b661;
        opacity: 0;
        transition: opacity 1s;
        border-radius: 3px;
        padding-left: 10px;
        padding-right: 10px;
        box-shadow: 0px 8px 16px rgba(0, 0, 0, .15);
        /* padding-left: 20px; */

    }

    .feedbackMessage i {
        /* background-color: green; */

        margin-right: 10px;
    }
</style>

<body>

    @include('include.header')
    <main>

        <div class="introContianer">
            <div class="container intro">
                <div class="introContent">
                    <h4>Your <span class="sli_span">Dream Job</span> is Waiting </h4>
                    <p> we help employees to find a job and better utilize their total compensation and make financial
                        decisions.
                        Enjoy Searching Journey For a Job with Us </p>
                </div>
                <div class="introImgContainer">
                    <svg class="hero_section__Star-sc-1vw08q1-19 jlcVQc" viewBox="0 0 256 256" fill="none">
                        <path
                            d="M7.96406 76.6162L60.2496 81.5039C66.1477 82.0609 70.7637 76.644 69.1538 71.0879L54.9356 21.6675C58.4973 19.4813 58.2266 19.6484 61.7741 17.476L101.124 51.4674C105.554 55.2968 112.549 53.584 114.601 48.1532L132.823 0C137.011 0.278503 136.698 0.25066 140.886 0.529163L152.284 50.6458C153.566 56.2994 160.248 58.9173 165.177 55.7145L208.872 27.2237C212.092 29.8555 211.849 29.6606 215.069 32.2924L194.155 79.3873C191.804 84.6928 195.622 90.6528 201.549 90.8895L254.034 92.9504C255.06 96.933 254.974 96.6266 256 100.609L210.767 126.691C205.666 129.629 205.182 136.661 209.826 140.24L251.042 172.059C249.475 175.875 249.589 175.582 248.036 179.384L195.75 174.496C189.852 173.939 185.236 179.356 186.846 184.912L201.064 234.332C197.503 236.519 197.774 236.352 194.226 238.524L154.877 204.533C150.446 200.703 143.451 202.416 141.399 207.847L123.178 256C118.989 255.722 119.302 255.749 115.114 255.471L103.716 205.354C102.434 199.701 95.7524 197.083 90.8231 200.285L47.1284 228.776C43.9086 226.144 44.1508 226.339 40.9311 223.707L61.8452 176.613C64.1959 171.307 60.3779 165.347 54.4512 165.111L1.96606 163.05C0.940293 159.067 1.02577 159.373 0 155.391L45.2334 129.309C50.3338 126.371 50.8182 119.339 46.1738 115.76L4.95802 83.9408C6.52516 80.1253 6.39692 80.4178 7.96406 76.6162Z"
                            fill="currentColor"></path>
                    </svg>
                    <svg class="hero_section__MrWobbles-sc-1vw08q1-17 cYoJqn" viewBox="0 0 129 82" fill="none">
                        <path
                            d="M123.72 52.7042C117.184 46.191 117.184 35.6155 123.675 29.0797C130.188 22.5438 130.165 11.9684 123.629 5.45519C117.093 -1.058 106.518 -1.03526 100.005 5.50062C93.4916 12.0365 82.9161 12.0365 76.3803 5.54598C69.8444 -0.9672 59.269 -0.944531 52.7559 5.59135C46.2427 12.1272 35.6672 12.1273 29.1313 5.63678C22.5954 -0.876405 12.0201 -0.853736 5.50689 5.68214C-1.00629 12.218 -0.983691 22.7934 5.55219 29.3066C12.0881 35.8198 12.0881 46.3952 5.59762 52.9311C-0.915565 59.467 -0.892827 70.0424 5.64305 76.5556C12.1789 83.0688 22.7543 83.046 29.2675 76.5102C35.7806 69.9743 46.3561 69.9743 52.892 76.4648C59.4279 82.978 70.0032 82.9553 76.5164 76.4194C83.0296 69.8836 93.6051 69.8835 100.141 76.374C106.677 82.8872 117.252 82.8645 123.765 76.3286C130.279 69.7701 130.256 59.2173 123.72 52.7042Z"
                            fill="currentColor">
                        </path>
                    </svg>
                    <img src="\template_assets\img\introImage.jpg" alt="">
                    <svg class="hero_section__NewSparkle-sc-1vw08q1-20 kTBlWA" viewBox="0 0 16 16" fill="none">
                        <path
                            d="M16 7.71062C12.4768 6.31904 9.68414 3.52323 8.29572 0C8.00792 0 7.99842 0 7.71061 0C6.31903 3.52323 3.52322 6.31588 0 7.70429C0 7.9921 0 8.00159 0 8.28939C3.52322 9.68097 6.31588 12.4768 7.7043 16C7.9921 16 8.00158 16 8.28939 16C9.68097 12.4768 12.4768 9.68413 16 8.29571C16 8.00475 16 7.99842 16 7.71062Z"
                            fill="currentColor"></path>
                    </svg>
                    <svg class="hero_section__Cash-sc-1vw08q1-18 hNeGZA" viewBox="0 0 20 12" fill="none">
                        <path
                            d="M1.05667 1.06446C7.94524 4.30802 12.9209 -2.63099 19.5 1.17639L19.485 10.5861C19.2442 10.7318 19.1755 10.7719 18.9369 10.9176C12.3664 7.7163 7.39288 14.6279 0.5 10.8205L0.515034 1.39811C0.74931 1.25241 0.820242 1.21017 1.05667 1.06446Z"
                            fill="currentColor"></path>
                    </svg>
                </div>
            </div>
        </div>

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
                                <div class="card__job_time"> {{ $item['inerval'] }}</div>
                            </div>
                            <div class="card__content">
                                <i class="card__img">
                                    <img src="images/{{ $item->company['logo'] }}" alt="">
                                </i>
                                <div class="card__title">
                                    <span class="card__title_first"> {{ $item['title'] }}</span>
                                    <div class="card__title_second"> <i class="fas fa-map-marker-alt"></i>
                                    </div>
                                    {{-- <div class="company "> {{ $item->company['name'] }}</div> --}}


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
                                    {{ $item->location->name }}</div>
                            </div>
                        </div>
                    </div>
                @endforeach


            </div>
        </div>
        <!-- ##########end cards############ -->
        <div class="container subscriber">
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
                {{-- <form method="POST" action="{{ route('subscribe') }}"
                    class="needs-validation d-flex justify-content-center flex-column flex-md-row "> --}}
                <form class="needs-validation d-flex justify-content-center flex-column flex-md-row ">
                    {{-- @csrf --}}
                    <div class=" input_con">
                        <input type="Email" class="form-control" id="inputEmail" placeholder="username@gmail.com"
                            name='email'>
                    </div>
                    <select class="form-select" aria-label="select" id="cate_id" name='cate_id'>
                        {{-- <option selected>Category</option> --}}
                        @foreach ($data['category'] as $item)
                            <option value="{{ $item->id }}">{{ $item->title }}</option>
                        @endforeach
                    </select>
                    <button class="btn  subscribe_btn" id='subscribe'>Subscribe</button>
                </form>

                <div class="feedbackMessage" id='fetChData'>
                    {{-- <i class="fas-solid fa-circle-check"></i> --}}
                    {{-- <i class="far fa-check-circle"></i> --}}
                    {{-- <i class="fad fa-check-circle"></i> --}}

                </div>
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
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script>
        var fetChData = document.querySelector("#fetChData");
        let token = document.head.querySelector("[name=csrf-token]").content;
        document.getElementById("subscribe").addEventListener("click", function(event) {
            event.preventDefault();
            let email = document.querySelector('input[name="email"]').value;
            let cate_id = document.querySelector('#cate_id').value;
            axios
                .post(`/subscribe`, {
                    email: email,
                    cate_id: cate_id,
                    "X-CSRF-TOKEN": token,
                })
                .then((response) => {
                    console.log(response);
                    fetChData.style.color = '#28b661';
                    fetChData.innerHTML = "<i class='fad fa-check-circle'></i>" + response.data.message;

                })
                .catch(function(error) {
                    if (error.response) {
                        // console.log(error.response.data.errors);
                        var errors = error.response.data.errors;
                        Object.keys(errors).forEach((key) => {
                            fetChData.style.color = 'red';
                            fetChData.innerHTML = "<i class='close fas fa-times'></i>" + errors[key];
                        });
                    }
                });
            // fetch("/subscribe", {
            //     headers: {
            //         "Content-Type": "application/json",
            //         Accept: "application/json, text-plain, */*",
            //         "X-Requested-With": "XMLHttpRequest",
            //         "X-CSRF-TOKEN": token,
            //     },
            //     method: "post",
            //     credentials: "same-origin",
            //     body: JSON.stringify({
            //         email: email,
            //         cate_id: cate_id

            //     })
            // }).then(async (response) => {

            //     if (JSON.stringify(response.error) != '{}') {
            //         fetChData.innerHTML = "<i class='fad fa-check-circle'></i>" + (await response
            //                 .json())
            //             .message;
            //     } else {
            //         console.log(JSON.stringify(data.error));
            //     }
            // })
            fetChData.style.opacity = 1;
            setTimeout(function() {
                fetChData.style.opacity = 0;
            }, 3000);

        });
    </script>
</body>

</html>
