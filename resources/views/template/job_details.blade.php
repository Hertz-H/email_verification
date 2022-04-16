<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/css/header_footer.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/job_details.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>
<body>
@include('include.header')
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
                 </ol></div>
             </div>


    </div>
<div class=" container">
    <div class=" card--long">
        <div class=" card--long flex_row">
            <i class="card__img">
                <img src="../assets/img/c-5.png" alt="">
            </i>
            <div class="card__title ">
                <span class="card__title_first"> ui/ux Web Designer in  Hada  </span>
                <div class="card__title_second"> <i class="far fa-building"></i> Yemen Solutions<span class="card--long__job_time "> Part Time</span></div>
                <div class="card__job_time card__job_time--purple"> Computer Science</div>
              
            </div>
            <button class="button  button--green" > View Company</button>
            
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
                    <h4>Job Description</h4>
                    <p>We are looking for a PHP Developer responsible for managing back-end services 
                        and the interchange of data between the server and the users. Your primary focus 
                        will be the development of all server-side logic, definition and maintenance of the
                        central database .</p><br>
                    <p>
                        Across our network, we strive to provide rapid, performance-based, industry-focused 
                        and technology-enabled services, which reflect a shared knowledge of global and local
                        industries and our experience of the Indian business environment.
                    </p>
                </div>
                <div class="job_requirments">
                    <h4>Requirements:</h4>
                    <ul>
                        <li><span><i class=" fas fa-check small"></i></span> Strong core PHP Hands on experience.</li>
                        <li><span><i class=" fas fa-check small"></i></span>Strong Expertise in CodeIgniter Framework .</li>
                        <li><span><i class=" fas fa-check small"></i></span>Understanding of MVC design pattern.</li>
                       
                        <li><span><i class=" fas fa-check small"></i></span> Proficient understanding of code versioning tools, such as Git.</li>
                    </ul>

                </div>
                <div class="skills_con">
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
                        
                </div>
                <hr>
            <div class="job_app_shar_cont">
            
                <div class="apply">
                To apply send your cv to  <a href="mailto:company@gmail.com"> company@gmail.com</a>  
                
                </div>
                <div class="shar">
                    <a href=""><i class="fas fa-download"></i> <i class="fas fa-heart"></i></a>
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
                 <span class="skill_value">DBA / Data warehousing</span>
                <span class="skill_value">Yemen Solutions</span>
                <span class="skill_value">Almsbahi</span>
                <span class="skill_value"> Part Time, Permanent</span>
                <span class="skill_value">12/12/2022</span>
                </div>
          
        </div>
    </div>
</div>
<div class="container related_jobs ">
    <h3 class="related_j_heading"> related Jobs</h3>
    <div class="card_container row_css">
        <div class="card">
            <div class="card__header">
                <span class="card__icon"> <i class="fas fa-heart"></i> </span>
                <div class="card__job_time"> Fall Time</div>
            </div>
             <div class="card__content">
                <i class="card__img">
                    <img src="../assets/img/c-5.png" alt="">
                </i>
                <div class="card__title">
                    <span class="card__title_first"> ui/ux Web Designer</span>
                    <div class="card__title_second"> <i class="fas fa-map-marker-alt"></i> Almsbahi</div>
                  
                </div>
                <div class="card__skills">
                    <span>HTML</span> <span >CSS</span>  <span>Figma</span> <span >XD</span> 
                    <span>Figma</span> <span >XD</span> <span >More</span>
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
                    <img src="../assets/img/c-2.png" alt="">
                </i>
                <div class="card__title">
                    <span class="card__title_first"> ui/ux Web Designer</span>
                    <div class="card__title_second"><i class="fas fa-map-marker-alt"></i> Almsbahi</div>
                  
                </div>
                <div class="card__skills">
                    <span>HTML</span> <span >CSS</span>  <span>Figma</span> <span >XD</span> 
                    <span>Figma</span> <span >XD</span> <span >More</span>
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
                    <img src="../assets/img/c-7.png" alt="">
                </i>
                <div class="card__title">
                    <span class="card__title_first"> ui/ux Web Designer</span>
                    <div class="card__title_second"> <i class="fas fa-map-marker-alt"></i>Almsbahi</div>
                  
                </div>
                <div class="card__skills">
                    <span>HTML</span> <span >CSS</span>  <span>Figma</span> <span >XD</span> 
                    <span>Figma</span> <span >XD</span> <span >More</span>
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
                    <img src="../assets/img/c-6.png" alt="">
                </i>
                <div class="card__title">
                    <span class="card__title_first "> ui/ux Web Designer</span>
                    <div class="card__title_second"> <i class="fas fa-map-marker-alt"></i> Almsbahi</div>
                  
                </div>
                <div class="card__skills">
                    <span>HTML</span> <span >CSS</span>  <span>Figma</span> <span >XD</span> 
                    <span>Figma</span> <span >XD</span> <span >More</span>
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
                    <img src="../assets/img/c-8.png" alt="">
                </i>
                <div class="card__title">
                    <span class="card__title_first"> ui/ux Web Designer</span>
                    <div class="card__title_second"><i class="fas fa-map-marker-alt"></i> Almsbahi</div>
                  
                </div>
                <div class="card__skills">
                    <span>HTML</span> <span >CSS</span>  <span>Figma</span> <span >XD</span> 
                    <span>Figma</span> <span >XD</span> <span >More</span>
                </div>
                
            </div>
            
        </div>


    </div>

        
    </div>
</main>
<hr>
@include('include.footer')
<!-- <script src="../assets/js/bootstap_js_file.js"></script> -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>