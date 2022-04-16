$(document).ready(function(){
    // Company location
        $("#search").on('keyup',function(){
           
            var word=$('#search').val().toLowerCase();
            $(".card__title_first").filter(function(){
                $(this).parentsUntil(".row_css").toggle( $(this).text().toLowerCase().indexOf(word)>-1);

        });
          });

        $("#filter_locatin").on('change',function(){
            
            var word=$('#filter_locatin').val().toLowerCase();
            $(".card__title_second").filter(function(){
                $(this).parentsUntil(".row_css").toggle( $(this).text().toLowerCase().indexOf(word)>-1);

        });
    });


    $("#filter_company").on('change',function(){
            var word=$('#filter_company').val().toLowerCase();
            $(".company").filter(function(){
                $(this).parentsUntil(".row_css").toggle( $(this).text().toLowerCase().indexOf(word)>-1);

        });
    });

                
        });

