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
        <div class="small-12">


            <section>

                <h1 class="line-after">Register</h1>

                <div class="row">
                    <div class="small-12 medium-7 columns">
                        <h3>Getting Started</h3>
                        <ol class="number">
                            <li><strong>Integer posuere</strong> erat a ante venenatis dapibus posuere velit aliquet.
                                Nullam quis risus eget urna mollis ornare vel eu leo. Cras mattis consectetur purus sit
                                amet fermentum. Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod.
                                Etiam porta sem malesuada magna mollis euismod. Maecenas sed diam eget risus varius
                                blandit sit amet non magna.
                            </li>
                            <li><strong>Donec sed odio</strong> dui. Etiam porta sem malesuada magna mollis euismod.
                                Etiam porta sem malesuada magna mollis euismod. Maecenas sed diam eget risus varius
                                blandit sit amet non magna.
                            </li>
                            <li><strong>Integer posuere</strong> a ante venenatis dapibus posuere velit aliquet. Nullam
                                quis risus eget urna mollis ornare vel eu leo. Cras mattis consectetur purus sit amet
                                fermentum. Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Etiam
                                porta sem malesuada magna mollis euismod. Maecenas sed diam eget risus varius blandit
                                sit amet non magna.
                            </li>

                        </ol>
                    </div>
                    <div class="small-12 medium-5 columns">
                        <h3>Register</h3>
                        <form action="register-2.php">

                            <field>  Hidden error message appears confirming college name </field>
                            <label>
                                Enter Access Code:
                                <input placeholder="Access Code *" required aria-describedby="nameHelpText" data-tooltip
                                       aria-haspopup="true" class="has-tip" title="Access Code"/>
                            </label>
                            <small class="error">error message</small>
                            <label>
                                <input placeholder="Email *"
                                       title="At least 10 characters including: upper and lowercase letters, a number and a special character."/>
                            </label>
                            <small class="error">error message</small>

                            <label> Password:
                                <input placeholder="Password *"/>
                            </label>
                            <small class="error">error message</small>
                <label>Confirm Password
                            <input placeholder="Confirm Password *"/>
                            </label>
                            <small class="error">error message</small>
                            <label>Authentication code delivery preference
                            <select name="">
                                <option selected disabled value="">select</option>
                            </select>
                            </label>
                            <small class="error">error message</small>
                            <label>
                                Text Enabled Phone:
                            <input placeholder="Text Phone (xxx)xxx-xxxx *"/>
                            </label>
                            <small class="error">error message</small>

                            <label>
                            <select name="">
                                <option selected disabled value="">Select Cell Carrier</option>
                            </select>
                            </label>
                            <small class="error">error message</small>

                            <div class="form-caption">
                                <p>By clicking Create Account you indicate you have read and agree to the<a
                                        href="~/Views/Home/Terms.cshtml"> CPNW Terms of Use</a> and <a
                                        href="~/Views/Home/PrivacyPolicy.cshtml"> Privacy Policy</a>.</p>
                            </div>

                            <input type="submit" value="Create Account" class="button">


                        </form>

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


</body>
</html>
