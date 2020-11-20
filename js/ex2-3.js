$(
  function()
  {

    $('span').hover
      (
        //при входе курсора
        function()
        {
          if ($(this).hasClass("invisible1"))
            {
              $(this).text($(this).css('background-color','#ffff66').text());

              $(this).text($(this).css('color','#000000').text());
            };

          //конец функции пока курсор на слове
          },
            function()
              {
               if ($(this).hasClass("invisible1"))
                 {
                  $(this).text($(this).css('background-color','whitesmoke').text());

                  $(this).text($(this).css('color','whitesmoke').text());
                };

              },
      );
    }
  );
