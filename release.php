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
      <div class="small-12 columns">
        

        <section>

           <h1 class="line-after">Release</h1>


<h2>Consent for Disclosure of Personally Identifiable Information</h2>
<p>Effective upon submission of this Consent, I hereby authorize Clinical Placement Consortium #1 dba Clinical Placements Northwest (“CPNW”) to disclose and provide my personally identifiable information as provided in this Authorization. 
The personally identifiable information subject to this authorization (“PII”) includes any and all personally identifiable information I have provided or uploaded to CPNW’s Services. My personally identifiable information may include my contact, identification and demographic information; my educational affiliations, including but not limited to the educational institutions’ verification of such affiliations; copies of documentation relating to my immunizations; history of infectious diseases; titer levels; background checks; personal identity, including social security number; nursing skills check-off lists; results of health training modules on such topics as compliance requirements, patient confidentiality, HIV/AIDS, and universal infectious disease precautions; and other records and documentation which may include other personally identifiable, sensitive information I have provided or uploaded to CPNW’s Services. 
I authorize CPNW to disclose this personally identifiable information upon request to:</p>

<ul>
  <li>The healthcare educational institution with which I am associated for purposes of the Services (“School”), for purposes of verifying my PII; and </li>
<li>Any healthcare organization which has an agreement with CPNW authorizing them to obtain such information for clinical placement purposes (“Affiliated Organizations”), for clinical placement purposes. </li>
</ul>

<p>I understand I have the right to revoke this authorization by electronic request to CPNW at admin@cpnw.org. I understand the revocation will not apply to information that has already been released in response to this authorization.</p>  
<p>I further understand that once the PII I have authorized to be disclosed reaches the recipient, that person or organization may use or re-disclose it, and that CPNW has no control over or responsibility for such use or disclosure. </p>
<p>By completing the following information and submitting this form to CPNW I acknowledge that I have been informed of and consent to the terms and conditions of this Authorization, and that CPNW will rely upon this Authorization in disclosing my PII. </p>






    <p>
      Clinical Placements Northwest (CPNW) is a collaboration among education and healthcare organizations
      to streamline procedures and develop systems to facilitate student clinical placement.</p>
      <p>This web application is a tool to facilitate the verification that each student meets health, safety, and legal requirements which are a condition of participation in a clinical learning experiences within member organizations.
     </p>
     <p> For this reason we need to request your informed consent to release your records:
    </p>

    <h2>Informed Consent</h2>

    <p>
      By checking the box below and clicking "I agree", I consent to Clinical Placements Northwest sharing
      with clinical agencies and clinical placement coordinators my records.
      Items that may be shared include copies of documentation relating to my immunizations; history of
      infectious diseases; titer levels;
      background checks; personal identity, including student id number; nursing skills check-off lists;
      and results of on-line learning modules competency assessments on such topics as compliance requirements, patient
      confidentiality, HIV/AIDS, and universal infectious disease precautions.
    </p>
    @using( Html.BeginForm( "Consent", "Contacts" ) ) {
      @Html.AntiForgeryToken();
      <div>
        @Html.CheckBox( "consent", false )
        I AGREE<br>
        @if( ViewBag.ConsentError != null ) {
          <span class="field-validation-error" data-valmsg-for="consent" data-valmsg-replace="true">@ViewBag.ConsentError</span>
        }
      </div>
      <div>
        <input type="submit" value="Record Consent" class="button" />

    }


        
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
