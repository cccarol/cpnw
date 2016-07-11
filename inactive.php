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

              <h1 class="line-after">Inactive Users</h1>
              <p> data jquery data tables</p>
              <div class="row">
                  <div class="small-12 columns end">
                      <ul class="inline-list inline-list-icons">
                          <li>Key: </li>
                          <li><i class="fa fa-user-plus"></i>Active</li>
                          <li><i class="fa fa-stop-circle"></i>Deactivate</li>
                          <li><i class="fa fa-archive"></i>Archive</li>
                      </ul>
                  </div>
              </div>

              <div class="row">
                  <div class="medium-12 columns">
                      <table role="grid" id="contactDeactivated" class="display responsive nowrap" cellspacing="0" width="100%">
                          <thead>
                          <tr>
                              <th class="text-center"><i class="fa fa-user-plus"></i></th>
                              <th class="text-center"><i class="fa fa-stop-circle"></i></th>
                              <th class="text-center"><i class="fa fa-archive"></i></th>
                              <th>User Type</th>
                              <th>SID-EID</th>
                              <th>Last Name</th>
                              <th>First Name</th>
                              <th>Email</th>
                              <th>Program</th>
                              <th>Progression</th>
                          </tr>
                          </thead>
                          <tbody>

                          <tr>
                              <td class="text-center"><input type="radio" name="active_@item.ContactIDPK" value="activate_@item.ContactIDPK"></td>
                              <td class="text-center"><input type="radio" name="active_@item.ContactIDPK" value="deactivate_@item.ContactIDPK"></td>
                              <td class="text-center"><input type="radio" name="active_@item.ContactIDPK" value="archive_@item.ContactIDPK"></td>
                              <td>@Globals.GetTypeFromiTypeContact( item.TypeContact.ToString() )</td>
                              <td>@item.IndividualID</td>
                              <td>@item.NameLast</td>
                              <td>@item.NameFirst</td>
                              <td>@item.email</td>
                              <td>@item.ProgAbbrev</td>
                              <td>@item.Progression</td>
                          </tr>
                          </tbody>
                      </table>
                      <div class="row">
                          <div class="12-small columns">
                              <button class="button">Update</button>
                          </div>
                      </div>

                  </div>

              </div>









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
