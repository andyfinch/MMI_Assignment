<?php
/* Smarty version 3.1.33, created on 2019-10-28 09:04:32
  from 'C:\wamp64\www\MMI_Assignment\views\layouts\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5db6af204aaf84_69845658',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '93f01204e9286350166d91478c3ceabe6bee5860' => 
    array (
      0 => 'C:\\wamp64\\www\\MMI_Assignment\\views\\layouts\\main.tpl',
      1 => 1572017880,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5db6af204aaf84_69845658 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
echo '<?php
';?>require_once(__DIR__ . '/includes/boot.include.php');
<?php echo '?>';?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title>Home</title>
    <link rel="stylesheet" href="./css/styles.css">
    <?php echo '<script'; ?>
 src="https://kit.fontawesome.com/e5d243858b.js" crossorigin="anonymous"><?php echo '</script'; ?>
>
</head>
<body class="background-gradient" cz-shortcut-listen="true">
<header class="container-fluid">
    <nav class="navbar navbar-expand-lg navbar-light bg-lightx">
        <a class="navbar-brand" href="./index.php">
            <img src="./images/list-logo.png" width="30" height="30" class="d-inline-block align-top"
                 alt="">
            RevisionIT
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a href="./dashboard.html" class="nav-link">Home <span class="sr-only">(current)</span></a>
                </li>
            </ul>
        </div>

        <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <!--<a class="nav-link" href="./login.html">Sign in</a>-->
                    <button class="btn btn-primary" type="submit" data-toggle="modal" data-target="#signinModal">
                        Sign in
                    </button>
                </li>
                <li class="nav-item">
                    <button class="btn btn-primary" type="submit" data-toggle="modal" data-target="#signupModal">
                        Sign up
                    </button>
                    <!--<a class="nav-link" href="./join.html">Sign up</a>-->
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
</header>
<div class="container">

    <div class="row pt-5 h-100" style="margin-top: 10em">
        <div class="col-4 offset-1">
            <div class=""><h1 class="">The best revision content site for students</h1>
                <p class="">RevisionIT is designed to allow students to create revision content, annotate it, edit it
                    and know it.<br></p>
                <button class="btn btn-primary btn-lg btn-block" type="submit" data-toggle="modal"
                        data-target="#signupModal">Sign up
                </button>
            </div>
        </div>

        <div class="col-5 offset-2">
            <div class="learning-image">
            </div>
        </div>

    </div>


</div>

<footer class="my-5 pt-5 text-muted text-center text-small" style="position: absolute; bottom: 0; width: 100%">
    <div>
        <p class="mb-1">� 2019 AJF Plc</p>
        <ul class="list-inline">
            <li class="list-inline-item"><a href="#">Privacy</a></li>
            <li class="list-inline-item"><a href="#">Terms</a></li>
            <li class="list-inline-item"><a href="#">Support</a></li>
        </ul>
    </div>
</footer>

<!-- Modal -->
<div class="modal fade" id="signupModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <!-- <div class="modal-header">
               <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                 <span aria-hidden="true">&times;</span>
               </button>
             </div>-->
            <div class="modal-body">
                <div class="container">
                    <div class="text-center">
                        <h2>Sign up</h2>
                        <p class="lead">Please enter your details below to sign up</p>
                    </div>

                    <div class="row">
                        <div class="col-md-12 order-md-1">
                            <form class="needs-validation" novalidate="">

                                <div class="mb-3">
                                    <label for="userName">User Name </label>
                                    <input type="text" class="form-control" id="userName">
                                    <div class="invalid-feedback">
                                        Please enter a valid user name.
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="email">Email </label>
                                    <input type="email" class="form-control" id="email" placeholder="you@example.com">
                                    <div class="invalid-feedback">
                                        Please enter a valid email address for shipping updates.
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="password">Password </label>
                                    <input type="email" class="form-control" id="password">
                                    <div class="invalid-feedback">
                                        Please enter a valid password.
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="confirmPassword">Confirm Password </label>
                                    <input type="email" class="form-control" id="confirmPassword">
                                    <div class="invalid-feedback">
                                        Please enter a valid password.
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col mb-3">
                                        <label for="fullName">Full name</label>
                                        <input type="text" class="form-control" id="fullName" placeholder="" value=""
                                               required="">
                                        <div class="invalid-feedback">
                                            Valid name is required.
                                        </div>
                                    </div>
                                </div>


                                <div class="mb-3">
                                    <label for="city">City</label>
                                    <input type="text" class="form-control" id="city" required="">
                                    <div class="invalid-feedback">
                                        Please enter valid city.
                                    </div>
                                </div>

                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="terms">
                                    <label class="custom-control-label" for="terms">Please tick to accept the Terms and
                                        Conditions</label>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button onclick="runSignup()" type="button" class="btn btn-primary">
                    <span class="signupSpinner d-none spinner-border spinner-border-sm" role="status"
                          aria-hidden="true"></span>
                    Sign up
                </button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="signinModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <!-- <div class="modal-header">
               <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                 <span aria-hidden="true">&times;</span>
               </button>
             </div>-->
            <div class="modal-body">
                <div class="container">
                    <div class="text-center">
                        <h2>Sign in</h2>
                        <p class="lead">Please enter your details below to sign up</p>
                    </div>

                    <div class="row">
                        <div class="col-md-12 order-md-1">
                            <form id="signinform" class="needs-validation" novalidate="">

                                <div class="mb-3">
                                    <label for="signinemail">Email </label>
                                    <input type="email" class="form-control" id="signinemail"
                                           placeholder="you@example.com" required>
                                    <div class="invalid-feedback">
                                        Please enter a valid email address.
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="signinpassword">Password </label>
                                    <input type="password" class="form-control" id="signinpassword" required>
                                    <div class="invalid-feedback">
                                        Please enter a valid password.
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button onclick="runSignin()" type="button" class="btn btn-primary">
                    <span class="signinSpinner d-none spinner-border spinner-border-sm" role="status"
                          aria-hidden="true"></span>
                    Sign in
                </button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11831173505db6af204a6660_91500615', "body");
?>


<?php echo '<script'; ?>
 src="./bootstrap/jquery.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="./bootstrap/popper.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="./bootstrap/bootstrap.bundle.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
    function runSignin() {
        if (validateForm($('#signinform')[0])) {
            $('.signinSpinner').toggleClass('d-none');
            setTimeout(function () {
                $('.signinSpinner').toggleClass('d-none');
                // Something you want delayed.
                document.location.href = "./dashboard.html"
            }, 1000); // How long do you want the delay to be (in milliseconds)?
        }


    }

    function runSignup() {
        $('.signupSpinner').toggleClass('d-none');
        setTimeout(function () {
            $('.signupSpinner').toggleClass('d-none');
            // Something you want delayed.
            document.location.href = "./dashboard.html"
        }, 1000); // How long do you want the delay to be (in milliseconds)?

    }

    function validateForm(form) {
        let isValid = form.checkValidity();

        if (isValid === false) {
            console.log('not valid');
        } else {
            console.log("valid");
        }
        form.classList.add('was-validated');

        return isValid;
    }


<?php echo '</script'; ?>
>
<!--<?php echo '<script'; ?>
 src="form-validation.js"><?php echo '</script'; ?>
>-->

</body>
</html>
<?php }
/* {block "body"} */
class Block_11831173505db6af204a6660_91500615 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_11831173505db6af204a6660_91500615',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "body"} */
}
