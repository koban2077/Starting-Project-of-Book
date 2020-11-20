$(document).ready(function(){

 $( "span" ).tooltip
    (
      {

 track:true

      }
    );
  }
);

$(
  function()
  {

    $('span').hover
      (

        function()
        {   if ((($(this).hasClass("people_translate")) || ($(this).hasClass("nontech_translate")) || ($(this).hasClass("tech_translate"))))
            {
              let reserve = $(this);
              $('#word').text($(this).css('background-color','#ffff66').text());
              let word_core;                                                   //обьявление переменной
              word_core = document.getElementById("word").textContent;        //требуемая перменная

                                                                              //конец функции пока курсор на слове

              $.ajax(
                {
                    method: "POST",
                    url: "test1.php",
                    data: { word_core:word_core } //формат имя колонки БД: имя перменной
                })
                .done(function( msg )
                  {

                    //$(reserve).className = 'ab';
                    $(reserve).attr('title', msg).tooltip('close').tooltip('open');
                    

                  })
                          //конец функции пока курсор на слове
              };
            },

          function()
              {
              $(this).text($(this).css('background-color','').text());
              $('#word').text('');    //при выходе курсора
            },
        );
      }
    );
