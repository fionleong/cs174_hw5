$(document).ready(function() {
  $('#fountain-image').attr("src", "http://netdna.webdesignerdepot.com/uploads/fountains/JuliePenroseFountain.jpg");
  $('#fountains').change(function() {
    if ($(this).val() === 'fountain1') {
      $('#fountain-image').attr("src", "http://netdna.webdesignerdepot.com/uploads/fountains/JuliePenroseFountain.jpg");
    } else if ($(this).val() === 'fountain2') {
      $('#fountain-image').attr("src", "https://landscapearchitecturemag.files.wordpress.com/2013/03/lovejoy_fountain-courtesy-portland-parks-and-recreation.jpg");
    } else if ($(this).val() === 'fountain3') {
      $('#fountain-image').attr("src", "http://yourguidetoitaly.com/rome/wp-content/uploads/2014/05/Trevi-fountain-3.jpg");
    }
  })
});
