<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@300;400&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="../assets/css/header_footer.css">
   <link rel="stylesheet" href="../assets/css/services.css">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    


</head>
<style>

</style>
<body>
  
@include('include.header')
    <main>
       <div class=" section_header">
           <div class="heading">
                <h4>
                    Services
                </h4>
                <div class="breadcrumb_container">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="#">Home</a></li>
                      <li class="breadcrumb-item active" aria-current="page"> Services </li>
                    </ol></div>
                </div>

       </div>

     <div class="services_container">
    
    <div class="serv_card_con ">
        @foreach ($data as $item)
        <div class="serv ">
            <div class="icon_cont orng">

                <i class="fas fa-briefcase"></i>
            </div>
            <div> 
                <h5> {{$item['title']}}</h5>
                <p>{{$item['description']}}</p>
            </div>
        </div>  
        @endforeach
          
    </div>
 






         <div class="subscribe">

         </div>
    </main>
    <hr>
    @include('include.footer')
 

        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

        <script >
        //         var nav_item=document.querySelectorAll(".navbar a");
        //  for(let i=0;i<nav_item.length;i++){
        //     nav_item[i].classList.remove("colored");
        //     nav_item[2].classList.add("colored");
                   
        //         }
                
        </script>
</body>
</html>