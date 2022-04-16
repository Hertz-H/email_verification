var nav_item=document.querySelectorAll(".navbar a");
var navbar=document.querySelector(".navbar");
var change_language=document.querySelector(".change_language");
document.onscroll=function(){
if(document.body.scrollTop>65||document.documentElement.scrollTop>65){
    navbar.style.backgroundColor="#e7f7ee";
    nav_item.forEach(Element=>{
        Element.classList.add("nav-item_scrl_col");
       
    })
    }
    else{
        navbar.style.backgroundColor="transparent";
        nav_item.forEach(Element=>{
        Element.classList.remove("nav-item_scrl_col");
       
    })
       
        
    }

}



var change_language=document.querySelector(".change_language");
var link_href=document.getElementById("language_style");
var language= link_href.getAttribute("href");
change_language.onclick=function(){
if(language == "assets/css/right.css"){
link_href.setAttribute("href","assets/css/left.css");
language=link_href.getAttribute("href");
console.log( "from right"+link_href.getAttribute("href"));
change_language.innerHTML="English";
}
else{
link_href.setAttribute("href","assets/css/right.css");
console.log( "from left"+link_href.getAttribute("href"));
language=link_href.getAttribute("href");
change_language.innerHTML="Arabic";
}
console.log( link_href.getAttribute("href"));
}

