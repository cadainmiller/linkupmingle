<?php
    include('includes/header.php');
    include('includes/navbar.php');

?>
    <style>
       /* Set the size of the div element that contains the map */
      #map {
        height: 600px;  /* The height is 400 pixels */
        width: 100%;  /* The width is the width of the web page */
       }
    </style>
    <div class="container">
    <div class="row padding_bottom">
        <div class="col s6">
        <img class="about_logo_size" src="img\LinkUpMingle.png" alt="">
        <h1>About LinkupMingle</h1>
        <p>
        LinkupMingle is an online site which enables a company to search young professionals profile and select suitable candidates 
        for jobs depending on, work experience, qualification among other areas. Linkup Mingle allows young professionals to Log on, 
        create a professional profile for themselves, upload a copy of their Curriculum vitae(CV) and also state the experience they 
        have in related field. The Website is also set that one can search for a job in their respective fields by just a click of a 
        button and browse. Linkup mingle is professional and believe that everybody should be given the opportunity to work in their respective 
        fields and excel at the highest level whilst being paid to do so. We assure you that once your profile is created and resume’ 
        uploaded then the right persons will see your documents, it must however be stated that we cannot guarantee what the employers 
        decision will be after reading same.
        </p>  
        <p>
        LinkupMingle is proud to say we are an award winning company with over 10 years’ experience in our field and liaise with some 
        of the best companies’ word wide to ensure that our clients are aligned with the award winning companies who will have their 
        best interest at heart.  The aim of LinkupMingle is to create a comfortable environment that both employers and potential 
        employee’s while searching for a job.
        </p>
        </div>
        <div class="col s6">
                <P></P><br>
                <div id="map"></div>
                </div>
        </div>
    </div>

    <div class="row">
        
    </div>
    </div>
   

    <script>
        // Initialize and add the map
        function initMap() {
        // The location of Uluru
        var uluru = {lat: 18.4558165, lng: -77.9395964};
        // The map, centered at Uluru
        var map = new google.maps.Map(
            document.getElementById('map'), {zoom: 4, center: uluru});
        // The marker, positioned at Uluru
        var marker = new google.maps.Marker({position: uluru, map: map});
        }
            </script>
            <!--Load the API from the specified URL
            * The async attribute allows the browser to render the page while the API loads
            * The key parameter will contain your own API key (which is not needed for this tutorial)
            * The callback parameter executes the initMap() function
            -->
            <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDgtN_CcURhW9emMihYbt3hlUeIAEBDRSs&callback=initMap">
        </script>


<?php include('includes/footer.php');