var counter=0;
slider();
var interval_id;
function slider(){

  

   var slides= document.querySelectorAll(".img_slides");
   var dots= document.querySelectorAll(".dots");
    counter++;

   //  console.log(counter);
   for(i=0;i<slides.length;i++){
   slides[i].style.display="none";
  
    }
    // for( let n=0; n<dots.length;n++){
    //    // console.log("dots"+ dots[n]);

    //    dots[n].classList.remove("active");
    //    // console.log(  dots[n]);
    // }
    
    if(counter>slides.length){
       counter=1;
    }
    slides[counter-1].style.display="block";
    // dots[counter-1].classList.add("active");
  

    interval_id=setTimeout(slider,3000);
}
var next= document.querySelector(".next");
   var prev= document.querySelector(".prev");
   next.onclick=function(){
       clearTimeout(interval_id);
     
       slider();

   }
   prev.onclick=function(){
       clearTimeout(interval_id);
       console.log(counter);
     
                   if(counter>1){
                       counter=counter-2;
                       slider();
                   }
                   else{
                       counter=4;
                       slider();
                   }
                     // if(counter>1){
           // var slides= document.querySelectorAll(".img_slides");
           //     var dots= document.querySelectorAll(".dots");
           //     counter--;
               
           //     for(i=0;i<slides.length;i++){
           //     slides[i].style.display="none";
           //     }
           //     for( let n=0; n<dots.length;n++){
           //         dots[n].classList.remove("active");
                  
           //     }
               
           //     if(counter>slides.length){
           //         counter=1;
           //     }
           //     slides[counter-1].style.display="block";
           //     dots[counter-1].classList.add("active");
           

           //     interval_id=setTimeout(slider,3000);
           //         }
   }

console.log( counter);
