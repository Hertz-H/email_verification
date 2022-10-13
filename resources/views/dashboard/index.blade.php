@extends('layout.master')
<style>
    .staticsContainer:first-of-type {
        padding-top: 25px;

    }

    .staticsContainer {
        display: flex;
        justify-content: space-between;
        width: 100%;
        gap: 20px;
        font-weight: bolder;
        /* color: #a09ed8; */
        color: #37594c;
        padding-bottom: 20px;
    }

    .staticItem {
        display: flex;
        /* align-items:center; */
        /* background-color: #e8fadf; */
        /* background-color: #d8ebe9; */
        /* background-color: #04aa6d; */
        /* background-color: #28b661; */
        /* #04aa6dc2 */
        width: 190px;
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

    .dashCardHeading {
        text-align: center;
        margin-top: 5px;
    }

    .staticsContainer .info {
        padding-top: 30px;
        padding-bottom: 20px;
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
                        <i class="fas fa-briefcase"></i>
                    </div>

                </div>
                <div class="info">
                    <span class="dashCardCount">
                        Advertisments

                    </span>
                    <p class="dashCardHeading">{{ $adds->count() }}</p>

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


            </div>
        </div>
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
                        All Jobs

                    </span>
                    <p class="dashCardHeading">0</p>

                </div>
            </div>
            <div class="staticItem">
                <div class="heading">

                    <div class="imgCont">
                        {{-- <img width="" src="./images/sidebarIcons/parents.svg" alt=""> --}}
                        <i class="fas fa-briefcase"></i>

                    </div>
                </div>
                <div class="info">
                    <span class="dashCardCount">Opened/Jobs</span>
                    <p class="dashCardHeading">0</p>

                </div>
            </div>

            <div class="staticItem">
                <div class="heading">

                    <div class="imgCont">
                        {{-- <img width="" src="./images/sidebarIcons/parents.svg" alt=""> --}}
                        <i class="fas fa-briefcase"></i>

                    </div>
                </div>
                <div class="info">
                    <span class="dashCardCount">Closed/Jobs </span>
                    <p class="dashCardHeading">0</p>
                </div>


            </div>
        </div>
        <canvas id="myChart" style="width:400px!important;max-width:600px"></canvas>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>




    <script>
        var categoriesJson = @json($categoriesNames);
        var subscribersJson = @json($subscribersNums);

        var arr = Object.keys(categoriesJson);
        var catNamesArr = [];
        var subscribersNumArr = [];

        /* get the json values and store it in array 
         Object.keys(categoriesJson) return the keys only of json into array */

        catNamesArr = Object.keys(categoriesJson).map((key) => {
            return categoriesJson[key];
        });
        subscribersNumArr = Object.keys(subscribersJson).map((key) => {
            return subscribersJson[key];
        });



        var xValues = catNamesArr;
        new Chart("myChart", {
            type: "line",
            data: {
                labels: xValues,
                datasets: [{
                    label: 'subscribers',
                    data: subscribersNumArr,
                    borderColor: "#28b661",
                    fill: false
                }]
            },
            options: {
                legend: {
                    display: true,
                }


            }
        });

        /**======================
         *    statics cards manipulation
         *========================**/

        staticItem = document.querySelectorAll('.dashCardHeading');


        /**======================
         *    companies
         *========================**/

        let speed = 50;
        console.log('{{ $companies->count() }}');
        let companyCounter = -1;
        let progressCompanyEndValue = '{{ $companies->count() }}';
        let companyProgress = setInterval(() => {
            companyCounter++;
            staticItem[0].textContent = `${companyCounter}`;
            if (companyCounter == progressCompanyEndValue) {
                clearInterval(companyProgress);
            }
        }, speed);


        console.log('subscribers' + '{{ $subscribers->count() }}');
        console.log('adds' + '{{ $adds->count() }}');
        let progressValue = -1;
        let progressEndValue = '{{ $adds->count() }}';
        console.log('{{ $adds->count() }}');
        let addProgress = setInterval(() => {
            progressValue++;
            staticItem[1].textContent = `${ progressValue}`;
            if (progressValue == progressEndValue) {
                clearInterval(addProgress);
            }
        }, speed);




        console.log('subscribers' + '{{ $subscribers->count() }} ');
        let progressSubscriberEndValue = '{{ $subscribers->count() }}';
        let subscriberCounter = -1;
        let subscriberProgress = setInterval(() => {
            subscriberCounter++;
            staticItem[2].textContent = `${subscriberCounter}`;
            if (subscriberCounter == progressSubscriberEndValue) {
                clearInterval(subscriberProgress);
            }
        }, speed);


        let progressJobEndValue = '{{ $jobs->count() }}';
        let jobCounter = -1;
        let jobProgress = setInterval(() => {
            jobCounter++;
            staticItem[3].textContent = `${jobCounter}`;
            if (jobCounter == progressJobEndValue) {
                clearInterval(jobProgress);
            }
        }, speed);



        let progressOpenedJobsEndValue = '{{ $openedJobs->count() }}';
        let openedJobsCounter = -1;
        let openedJobsProgress = setInterval(() => {
            openedJobsCounter++;
            staticItem[4].textContent = `${openedJobsCounter}`;
            if (openedJobsCounter == progressOpenedJobsEndValue) {
                clearInterval(openedJobsProgress);
            }
        }, speed);



        let progressClosedJobsEndValue = '{{ $closedJobs->count() }}';
        let closedJobsCounter = -1;
        let closedJobsProgress = setInterval(() => {
            closedJobsCounter++;
            staticItem[5].textContent = `${closedJobsCounter}`;
            if (closedJobsCounter == progressClosedJobsEndValue) {
                clearInterval(closedJobsProgress);
            }
        }, speed);
    </script>
@endsection
