<?php
    include('includes/header.php');
    include('includes/navbar.php');

?>

    <div class="row padding_top padding_bottom">
      <div class="col s6 center">
      <img src="img\feedback.png" alt="Feedback" height="80%" width="80%">
      </div>
    <div class="col s6">
        <div class="row">
            <form class="col s12 m10" action="scripts/feedback_script.php" method="POST">
            <div class="row">
            <div class="input-field col s6">
                <input id="first_name" name="first_name" type="text" class="validate">
                <label for="first_name">First Name</label>
            </div>
            <div class="input-field col s6">
                <input id="last_name" name="last_name" type="text" class="validate">
                <label for="last_name">Last Name</label>
            </div>
            </div>
            <div class="row">
            <div class=" input-field col s12">
                <input id="email" name="email" type="email" class="validate">
                <label for="email">Email</label>
                <span class="helper-text" data-error="wrong" data-success="right"></span>
                </div>
            </div>
            </div>
            <p>
              <h5>Please rate us</h5>  
            </p>
            <div>
                <p>
                    <label>
                        <input class="radiocolor" name="MyRadio" value="1 Star" type="radio" />
                        <span>1</span>
                    </label>
                    <label>
                        <input class="radiocolor" name="MyRadio" value="2 Stars" type="radio" />
                        <span>2</span>
                    </label>
                    <label>
                        <input class="radiocolor" name="MyRadio" value="3 Stars" type="radio" />
                        <span>3</span>
                    </label>
                    <label>
                        <input class="radiocolor" name="MyRadio" value="4 Stars" type="radio" />
                        <span>4</span>
                    </label>
                    <label>
                        <input class="radiocolor" name="MyRadio" value="5 Stars" type="radio" checked />
                        <span>5</span>
                    </label><br>
                    <span class="blue-grey-text text-lighten-2">1 being the lowest and 5 the highest</span> 
                </p>
            </div>
            <div class="row">
          <div class="input-field col s10">
            <textarea id="comments" name="comments" class="materialize-textarea" data-length="200"></textarea>
            <label for="comments">Feedback</label>
                </div>
            </div>
            <button class="btn waves-effect waves-light deep-purple darken-1" type="submit" name="action">Submit
                <i class="material-icons right" onclick="M.toast({html: 'Thanks for your feedback'} , 10000 )">send</i>
            </button>
            <button class="btn waves-effect waves-light red darken-3" type="reset" name="action">Cancel
            <i class="material-icons right">cancel</i>
            </button>
            </div>
            </form>
        </div> 
      </div>
    </div>


<?php include('includes/footer.php');