document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.sidenav');
    var instances = M.Sidenav.init(elems, options);
  });

  // Or with jQuery
  (function($){
    $(function(){
  
      $('.sidenav').sidenav();
  
    }); // end of document ready
  })(jQuery); // end of jQuery name space

  $(document).ready(function() {
    $('input#input_text, textarea#textarea2').characterCounter();
  });
        
  $(document).ready(function(){
  $('.modal-trigger').modal();
  });

  $(document).ready(function(){
    $('.modal').modal();
    $('#modal1').on('click', function(){
    });
  });



  function initMap() {
    var uluru = {
      lat: -25.363,
      lng: 131.044
    };
    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 4,
      center: uluru
    });
    var marker = new google.maps.Marker({
      position: uluru,
      map: map
    });
  }
  $('ul.tabs').on('click', 'a', function(e) {
    setTimeout(function() {
      google.maps.event.trigger(map, 'resize');
    }, 500);
  });


  document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.chips');
    var instances = M.Chips.init(elems, options);
  });

  // Or with jQuery
  $('.chips-placeholder').chips({
    placeholder: 'Your skill Area',
    secondaryPlaceholder: '',
  });

        
  
  document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('select');
    var instances = M.FormSelect.init(elems, options);
  });

  // Or with jQuery

  $(document).ready(function(){
    $('select').formSelect();
  });      


  $(document).ready(function(){
    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
    $('.modal-trigger').leanModal();
  });


  jQuery(document).ready(function(){
    jQuery('.timepicker').timepicker({
      twelveHour: false
    });
  });

  function triggerClick() {
    document.querySelector('#profileImage').click();
  }
  
  function displayImage(e) {
    if (e.files[0]) {
      var reader = new FileReader();
      
      reader.onload = function(e) {
        document.querySelector('#profileDisplay').setAttribute('src', e.target.result);
      }
      reader.readAsDataURL(e.files[0]);
    }
  }