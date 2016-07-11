<!doctype html>
<html class="no-js" lang="en">
<head>


  <?php include 'partials/head.php'; ?>
  <!-- /head -->

</head>
<body>

  <?php include 'partials/header.php'; ?>
  <!-- /header -->

  <div class="hero hero-inner">
    <img src="images/content/heros/dashboard.jpg" />
      <div class="row">
        <div class="small-12 columns">
          <h1>Dashboard</h1>
        </div>
    </div>
  </div>
  <!-- /hero -->


  <div class="main">
    <div class="row">
      <div class="small-12 medium-3 columns">
        <aside>

          <?php include 'partials/asidenav-sample.php'; ?>
          
        </aside>
      </div>
      <div class="small-12 medium-9 columns">

        <section>

            <h1 class="line-after">My Demographics</h1>
            <p>Providing this information is optional. </p>


            <form>


                    <div class="row">
                        <div class="small-12 medium-4 columns">

                            <h3>School ID Photo </h3>
                            <div class="profile-img profile-placeholder">
                                <img src="images/icons/profile-headshot.svg">
                            </div>
                            <button class="file-upload button button-secondary">
                                <!-- <input type="file" name="file" class="file-input"/>--> Choose Photo
                            </button>
                            <!--  @Html.ValidationMessageFor( model => model.pPhoto ) -->
                        </div>
                        <div class="small-12 medium-3 columns">                            <!--  @Html.LabelFor( model => model.gender )
                             @Html.RadioButtonFor( model => model.gender, "F", new { id = "gender_F" } )
                              @Html.RadioButtonFor( model => model.gender, "M", new { id = "gender_M" } )-->

                            <h3>Gender</h3>
                            <ul class="no-bullet">
                                <li><input type="radio" name="gender"> Male</li>
                                <li>
                                    <input type="radio" name="gender"> Female
                                </li>

                            </ul>
                        </div>
                        <div class="small-12 medium-5 columns">
                            <h3>Race and Ethnicity</h3>

                            <ul class="no-bullet">
                                <li><input type="radio" name="race"> White</li>
                                <li><input type="radio" name="race"> Black/African American</li>
                                <li><input type="radio" name="race"> Asian</li>
                                <li><input type="radio" name="race"> Hispanic/Latino/Spanish</li>
                                <li><input type="radio" name="race"> Native Hawaiian/Other Pacific Islander</li>
                                <li><input type="radio" name="race"> Other Race or Origin</li>
                            </ul>


                            <!-- @Html.RadioButtonFor( model => model.iRace, 1, new { id = "white" } )

                       @Html.RadioButtonFor( model => model.iRace, 2, new { id = "black" } )
                        <label for="black"> Black/African American</label><br>

                        @Html.RadioButtonFor( model => model.iRace, 3, new { id = "asian" } )
                        <label for="asian"> Asian</label><br>

                        @Html.RadioButtonFor( model => model.iRace, 4, new { id = "latino" } )
                        <label for="latino"> Hispanic/Latino/Spanish</label><br>

                        @Html.RadioButtonFor( model => model.iRace, 5, new { id = "native" } )
                        <label for="native"> American Indian/Alaska Native </label><br>

                        @Html.RadioButtonFor( model => model.iRace, 6, new { id = "pacific" } )
                        <label for="pacific"> Native Hawaiian/Other Pacific Islander </label><br>

                        @Html.RadioButtonFor( model => model.iRace, 99, new { id = "other" } )
                        <label for="other"> Other Race or Origin </label> -->
                        </div>

                        
                    </div>
                    <div class="row">
                      <div class="small-12 columns">
                        <hr />
                        <input type="submit" value="Save My Demographics" class="button">
                      </div>
                    </div>

                    


                </form>





        </section>

      </div>


    </div>

    <?php include 'partials/contact-form.php'; ?>

    
  </div>
  <!-- /main -->

  <?php include 'partials/footer.php'; ?>
  <!-- /footer -->


  <?php include 'partials/footer-scripts.php'; ?>
  <!-- /footer scripts -->






<script type="text/javascript">

</script>




</body>
</html>
