var $grid = $('#portfolio-works').isotope({
    // options
  });
  // filter items on button click
  $('.filter-button-group').on( 'click', 'button', function() {
    var filterValue = $(this).attr('data-filter');
    $grid.isotope({ filter: filterValue });
  }); 

$(document).scroll(function () {
    if($(this).scrollTop() > 50){
      $(".navbar").addClass("navbar-shadow");
    }else{
      $(".navbar").removeClass("navbar-shadow");
    }
})



// ----------------------li active---------------------------------


function changeNav(cls){
  $("." + cls).addClass("active");
}


// ------------------------li active--------------------------------






$(document).ready(function () {
 
  $('.portfolio .filter-buttons button').click(function (e) {
      $('.portfolio .filter-buttons button').removeClass('active');
      $(this).addClass('active');
  });
});




