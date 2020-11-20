
$(
function(){

  $('td').hover
  (
    function() {
      let class_name = $(this).attr('class');
      let work = '.' + class_name;
      $(work).css('background-color','#ffff66').text();
    },

    function ()
    {
      let class_name = $(this).attr('class');
      let work = '.' + class_name;
      $(work).css('background-color','whitesmoke').text();
    },
  );
}
);
