@extends('layout.master')
<style>
    .dashboardContainer {}

    .staticsContainer {
        display: flex;
        justify-content: space-between;
        width: 100%;
        gap: 20px;
        font-weight: bolder;
        /* color: #a09ed8; */
        color: #37594c;
        padding-top: 60px;
        padding-bottom: 60px;
    }

    .staticItem {
        display: flex;
        /* align-items:center; */
        /* background-color: #e8fadf; */
        /* background-color: #d8ebe9; */
        /* background-color: #04aa6d; */
        /* background-color: #28b661; */
        /* #04aa6dc2 */
        width: 170px;
        height: 80px;
        border-radius: 10px;
        /* color: white; */
        border: 2px solid #04aa6dc2;
        /* border: 2px solid #28b6619c; */


    }

    .staticsContainer .heading {
        width: 48%;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        /* background: #28b661; */
        background: #28b6619c;
        /* background-color: #eeeaff; */
        /* background-color: #f3f5f0; */
        border-top-left-radius: 10px;
        border-bottom-left-radius: 10px;
        /* border: 2px solid #04aa6dc2; */

        /* color:white; */
    }

    .staticsContainer img {
        width: 100%;
    }

    .staticsContainer .imgCont {
        width: 50%;
        /* align-self: center;
justify-self: center; */
    }

    .staticsContainer .info {
        align-self: center;
        width: 55%;
        margin-left: 10%;
        margin-right: 10%;
    }

    @media(max-width:500px) {
        .staticsContainer {

            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .staticItem {
            width: 230px;
        }
    }
</style>
@section('content')
    <div class="dashboardContainer">
        <div class="staticsContainer">
            <div class="staticItem">
                <div class="heading">

                    <div class="imgCont">
                        {{-- <img width="" src="./images/sidebarIcons/parents.svg" alt=""> --}}
                        <i class="fas fa-briefcase"></i>
                    </div>

                </div>
                <div class="info">
                    <span class="dashCardCount">
                        Jobs

                    </span>
                    <p class="dashCardHeading">{{ $jobs->count() }}</p>

                </div>
            </div>
            <div class="staticItem">
                <div class="heading">

                    <div class="imgCont">
                        {{-- <img width="" src="./images/sidebarIcons/parents.svg" alt=""> --}}
                        <i class="fas fa-users"></i>
                    </div>
                </div>
                <div class="info">
                    <span class="dashCardCount">Companies</span>
                    <p class="dashCardHeading">{{ $companies->count() }}</p>

                </div>
            </div>
            <div class="staticItem">
                <div class="heading">

                    <div class="imgCont">
                        {{-- <img width="" src="./images/sidebarIcons/parents.svg" alt=""> --}}
                        <i class="fas fa-user"></i>
                    </div>
                </div>
                <div class="info">
                    <span class="dashCardCount">Subscribers</span>
                    <p class="dashCardHeading">0</p>
                </div>
                {{-- <input name="cat[]" type="checkbox" id="cat" value="{{ $categoriesNames }}" /> --}}
            </div>
        </div>
        <canvas id="myChart" style="width:100%;max-width:600px"></canvas>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
    {{-- {{ dd($categoriesNames) }} --}}

    {{-- @for ($i = 0; $i < $categoriesNames->count(); $i++)
    @endfor --}}



    <script>
        var app = @json($categoriesNames);
        alert(app);
        let cat = document.getElementById('cat');
        // let categoriesArr = [];
        // let subscribersArr = [];
        for (let i = 0; i < `$categoriesNames - > count()`; i++) {
            categoriesArr.push($categoriesArr[i]);
            console.log($categoriesArr[i]);
        }

        var xValues = [100, 200, 300, 400, 500, 600, 700, 800, 900, 1000];

        // [100, 200, 300, 400, 500, 600, 700, 800, 900, 1000];
        // console.log($categoriesNames);
        new Chart("myChart", {
            type: "line",
            data: {
                labels: xValues,
                datasets: [{
                    // $subscribersCount,
                    data: [860, 1140, 1060, 1060, 1070, 1110, 1330, 2210, 7830, 2478],
                    // [860, 1140, 1060, 1060, 1070, 1110, 1330, 2210, 7830, 2478],
                    borderColor: "#28b661",
                    fill: false
                }]
            },
            options: {
                legend: {
                    display: false
                }
            }
        });

        /**======================
         *    statics cards manipulation
         *========================**/

        staticItem = document.querySelectorAll('.dashCardHeading');

        let progressValue = 0;
        let progressJobEndValue = '{{ $jobs->count() }}';
        let speed = 50;

        let jobProgress = setInterval(() => {
            progressValue++;
            staticItem[0].textContent = `${progressValue}`;
            if (progressValue == progressJobEndValue) {
                clearInterval(jobProgress);
            }
        }, speed);

        let progressCompanyEndValue = '{{ $companies->count() }}';
        let companyCounter = 0;
        let companyProgress = setInterval(() => {
            companyCounter++;
            staticItem[1].textContent = `${companyCounter}`;
            if (progressValue == progressCompanyEndValue) {
                clearInterval(companyProgress);
            }
        }, speed);

        let progressSubscriberEndValue = '{{ $subscribers->count() }}';
        let subscriberCounter = 0;
        let subscriberProgress = setInterval(() => {
            subscriberCounter++;
            staticItem[2].textContent = `${subscriberCounter}`;
            if (progressValue == progressSubscriberEndValue) {
                clearInterval(subscriberProgress);
            }
        }, speed);
    </script>
@endsection
