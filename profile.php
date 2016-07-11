<!doctype html>
<html class="no-js" lang="en">
<head>


  <?php include 'partials/head.php'; ?>
  <!-- /head -->

</head>
<body class="simple">

  <?php include 'partials/header.php'; ?>
  <!-- /header -->


  <div class="main">
    <div class="row">
      <div class="small-12 medium-3 columns">
        <aside>

          <?php include 'partials/asidenav-sample.php'; ?>
          
        </aside>
      </div>
      <div class="small-12 medium-9 columns">
        

        <section>

           <h1 class="line-after">My Profile</h1>

            <form action="">
                    <fieldset>
                        <div class="row">
                            <div class="small-12 medium-5 columns">
                                <input placeholder="First Name *"/>
                            </div>
                            <div class="small-12 medium-5 columns">
                                <input placeholder="Last Name *"/>
                            </div>
                            <div class="small-12 medium-2 columns">
                                <input placeholder="MI"/>
                            </div>
                        </div>

                        <div class="row">
                            <div class="small-12 medium-6 columns">  <!-- populated from db-->
                                <input placeholder="Email *"/>
                            </div>
                            <div class="small-12 medium-6 columns">
                                <input placeholder="Alternative Email"/>
                            </div>
                        </div>
                        <div class="row">
                            <div class="small-12 medium-3 columns">
                                <input placeholder="Phone*"/>
                            </div>
                            <div class="small-12 medium-3 columns">
                                <input placeholder="Student/Faculty ID*"/>
                            </div>
                            <div class="small-12 medium-3 columns">  <!-- populated from db-->
                                <input placeholder="School*"/>
                            </div>
                            <div class="small-12 medium-3 columns">  <!-- populated from db-->
                                <input placeholder="Program*"/>
                            </div>

                        </div>

                        <div class="row">
                            <div class="small-12 medium-6 columns">
                                <input placeholder="Emergency Contact Name *"/>
                            </div>
                            <div class="small-12 medium-6 columns">
                                <input placeholder="Emergency Contact Phone *"/>
                            </div>
                        </div>


                    </fieldset>
                    <fieldset>
                        <div class="row">
                            <div class="small-12 medium-4 columns">
                                <input placeholder="Permanent Address*"/>
                            </div>
                            <div class="small-12 medium-4 columns">
                                <input placeholder="City *"/>
                            </div>
                            <div class="small-12 medium-2 columns">
                                <input placeholder="State *"/>
                            </div>
                            <div class="small-12 medium-2 columns">
                                <input placeholder="ZIP *"/>
                            </div>
                        </div>

                        <div class="row">
                            <div class="small-12 medium-3 columns">
                                <input placeholder="Birthdate *"/>
                            </div>


                            <div class="small-12 medium-3 columns">
                                <input placeholder="Social Security *"/>
                            </div>


                            <div class="small-12 medium-3 columns">
                                <label>Previous Name </label>
                                <input type="radio" value="alias"> Yes
                                <input type="radio" value="no_alias"> No

                            </div>
                            <div class="small-12 medium-3 columns">  <!-- if yes inputs will appear below -->
                                <a class="button button-add">Add Previous Name</a> <!-- if yes button to add more former name inputs -->
                            </div>
                        </div>
                        <div class="row">
                            <div class="small-12 medium-6 columns">
                                <input type="text" name="@pfn" placeholder="Prefious First Name">
                            </div>
                            <div class="small-12 medium-6 columns">
                                <input type="text" name="@pfn" placeholder="Previous Last Name">
                            </div>
                        </div>
                        <div class="row">
                            <div class="small-12 medium-6 columns">
                                <input type="text" name="@pfn" placeholder="Prefious First Name">
                            </div>
                            <div class="small-12  medium-6 columns">
                                <input type="text" name="@pfn" placeholder="Previous Last Name">
                            </div>
                        </div>
                        <div class="row">
                            <div class="small-12 medium-6 columns">
                                <input type="text" name="@pfn" placeholder="Prefious First Name">
                            </div>
                            <div class="small-12  medium-6 columns">
                                <input type="text" name="@pfn" placeholder="Previous Last Name">
                            </div>
                        </div>
                    </fieldset>


                    <input type="submit" value="Update Profile" class="button">


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
