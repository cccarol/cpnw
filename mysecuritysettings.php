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

            
            <h1 class="line-after">My Security Settings</h1>


                <form>

                    @using( Html.BeginForm( "SecurityUpdate", "Contacts", new { id = Model.ContactIDPK } ) ) {
                    @Html.AntiForgeryToken()
                    <input type="hidden" name="id" value="@Model.ContactIDPK"/>


                    <div class="row">
                        <div class="small-12 medium-6 columns">
                            <label>
                                <input type="password" placeholder="Update Password *">
                                <!-- Password
                                 @Html.PasswordFor( m => m.Password, new {
                                 @class = "has-tip",
                                 placeholder = "Create Password",
                                 data_tooltip = "",
                                 title = "At least 10 characters including: upper and lowercase letters, a number and a special character."
                                 } )
                             </label>-->
                                <small>
                                    @Html.ValidationMessage( "Password" )
                                </small>
                        </div>


                        <div class="small-12 medium-6 columns">
                            <label>
                                <input type="password" placeholder="Confirm Password *">
                                <!-- Confirm Password
                                 @Html.PasswordFor( m => m.passwordConfirm, new { placeholder = "Confirm Password" } )-->
                            </label>
                            <small>
                                @Html.ValidationMessage( "passwordConfirm" )
                            </small>
                        </div>
                    </div>


                    <div class="row">
                        <div class="small-12  medium-6 columns">
                            <label> I prefer to receive my authentication code by:</label>

                            <select name="MFAPreference">
                                <option value="text" @TextSelected>Text Message</option>
                                <option value="email" @EmailSelected>Email</option>
                            </select>
                        </div>

                        <div class="small-12 medium-6 columns">
                            <label> Please enter your text-enabled phone number. </label>
                            <input type="tel" placeholder="xxx-xxx-xxxx">
                            <!--@Html.LabelFor( m => m.PhoneNumber )
                            @Html.TextBoxFor( m => m.PhoneNumber, new {
                            @class = "has-tip",
                            placeholder = "xxx-xxx-xxxx",
                            data_tooltip = "",
                            title = "Enter your text-enabled phone number."
                            } )-->

                        </div>
                    </div>
                    <div class="row">
                        <div class="small-12 medium-6 columns">
                        <label>
                            Select Cell Carrier
                            <!--@Html.DropDownList( "SelectedSMSCarrier", Model.SMSCarriers, "-No Cell Phone-",
                            new { @class = "has-tip", title = "Select your cellular provider.", data_tooltip = "" } )-->
                        </label>
                        <select name="SelectedSMSCarrier">
                        <option >Carrier Name</option>
                        <option>Carrier Name</option>
                        </select>
                    </div>
                     </div>
                    <input type="submit" value="Update" class="button">

                   

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
