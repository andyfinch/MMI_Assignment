<?php
/* Smarty version 3.1.33, created on 2019-11-19 23:09:05
  from 'C:\wamp64\www\MMI_Assignment\views\pages\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dd47611f13c44_47490413',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '52a4acf047d2f899a8e53b368104f94e4379c9ad' => 
    array (
      0 => 'C:\\wamp64\\www\\MMI_Assignment\\views\\pages\\login.tpl',
      1 => 1574204942,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dd47611f13c44_47490413 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21163470735dd47611efc443_27006635', "body");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9918820965dd47611f00b34_95265521', "modals");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2712115305dd47611f0cfd2_95334773', "scripts");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "layouts/main.tpl");
}
/* {block "body"} */
class Block_21163470735dd47611efc443_27006635 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_21163470735dd47611efc443_27006635',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="container">
        <div class="row d-sm-none">
            <div class="col">
                <div class="learning-image mx-auto">
                </div>
            </div>
        </div>
        <div class="d-none d-sm-block" style="margin-top: 10em"></div>
        <div class="row pt-5 h-100">
            <div class="col-sm-4 offset-sm-1">
                <div class=""><h1 class="text-center">The best revision content site for students</h1>
                    <p class="text-center">RevisionIT is designed to allow students to create revision content, annotate it, edit
                        it
                        and know it.<br></p>
                    <button class="btn btn-primary btn-lg btn-block" type="submit" data-toggle="modal"
                            data-target="#signupModal">Sign up
                    </button>
                </div>
            </div>

            <div class="col-sm-5 offset-sm-2 d-none d-sm-block">
                <div class="learning-image">
                </div>
            </div>

        </div>
    </div>
<?php
}
}
/* {/block "body"} */
/* {block "modals"} */
class Block_9918820965dd47611f00b34_95265521 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'modals' => 
  array (
    0 => 'Block_9918820965dd47611f00b34_95265521',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<form id="signUpForm" class="needs-validation" novalidate="" method="post" action="index.php">
    <input type="hidden" name="action" value="signup">
 <div class="modal fade" id="signupModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
      aria-hidden="true">
     <div class="modal-dialog modal-dialog-centered" role="document">
         <div class="modal-content">
             <div class="modal-body">
                 <div class="container">
                     <?php if ($_smarty_tpl->tpl_vars['error']->value) {?>
                     <div class="alert alert-danger" role="alert">
                         <?php echo $_smarty_tpl->tpl_vars['error']->value;?>

                     </div>
                     <?php }?>

                     <div class="text-center">
                         <h2>Sign up</h2>
                         <p class="lead">Please enter your details below to sign up</p>
                     </div>

                     <div class="row">
                         <div class="col-md-12 order-md-1">

                             <div class="mb-3">
                                 <label for="userName">User Name </label>
                                 <input type="text" class="form-control" id="userName" name="userName">
                                 <div class="invalid-feedback">
                                     Please enter a valid user name.
                                 </div>
                             </div>

                             <div class="mb-3">
                                 <label for="password">Password </label>
                                 <input type="password" class="form-control" id="password" name="password">
                                 <div class="invalid-feedback">
                                     Please enter a valid password.
                                 </div>
                             </div>

                             <div class="mb-3">
                                 <label for="confirmPassword">Confirm Password </label>
                                 <input type="password" class="form-control" id="confirmPassword"
                                        name="confirmPassword">
                                 <div class="invalid-feedback">
                                     Please enter a valid password.
                                 </div>
                             </div>

                             <div class="mb-3">
                                 <label for="email">Email </label>
                                 <input type="email" class="form-control" id="email" placeholder="you@example.com" name="email">
                                 <div class="invalid-feedback">
                                     Please enter a valid email address for shipping updates.
                                 </div>
                             </div>

                             <div class="row">
                                 <div class="col mb-3">
                                     <label for="fullName">Full name</label>
                                     <input type="text" class="form-control" id="fullName" placeholder="" value=""
                                            required="" name="fullName">
                                     <div class="invalid-feedback">
                                         Valid name is required.
                                     </div>
                                 </div>
                             </div>


                             <div class="mb-3">
                                 <label for="city">City</label>
                                 <input type="text" class="form-control" id="city" name="city" required="">
                                 <div class="invalid-feedback">
                                     Please enter valid city.
                                 </div>
                             </div>

                             <div class="custom-control custom-checkbox">
                                 <input type="checkbox" class="custom-control-input" id="terms" name="terms">
                                 <label class="custom-control-label" for="terms">Please tick to accept the Terms and
                                     Conditions</label>
                             </div>



                         </div>
                     </div>
                 </div>
             </div>
             <div class="modal-footer">
                 <button type="submit" class="btn btn-primary">Sign up
                     <span class="signupSpinner d-none spinner-border spinner-border-sm" role="status"
                           aria-hidden="true"></span>
                 </button>
                 <!--<button onclick="runSignup()" type="button" class="btn btn-primary">
                     <span class="signupSpinner d-none spinner-border spinner-border-sm" role="status"
                           aria-hidden="true"></span>
                     Sign up
                 </button>-->
                 <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
             </div>
         </div>

     </div>
 </div>
</form>

 <!-- Modal -->
<form class="needs-validation" novalidate="" method="post" action="index.php">
    <input type="hidden" name="action" value="signin">
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
                                     <label for="userName">User Name </label>
                                     <input type="text" class="form-control" id="userNameSignin" name="userName" required>
                                     <div class="invalid-feedback">
                                         Please enter a valid User Name.
                                     </div>
                                 </div>

                                 <div class="mb-3">
                                     <label for="signinpassword">Password </label>
                                     <input type="password" class="form-control" id="passwordSignin" name="password" required>
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
                 <button type="submit" class="btn btn-primary">Sign in
                     <span class="signupSpinner d-none spinner-border spinner-border-sm" role="status"
                           aria-hidden="true"></span>
                 </button>
                 <!--<button onclick="runSignin()" type="button" class="btn btn-primary">
                     <span class="signinSpinner d-none spinner-border spinner-border-sm" role="status"
                           aria-hidden="true"></span>
                     Sign in
                 </button>-->
                 <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
             </div>
         </div>
     </div>
 </div>
</form>
<?php
}
}
/* {/block "modals"} */
/* {block "scripts"} */
class Block_2712115305dd47611f0cfd2_95334773 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'scripts' => 
  array (
    0 => 'Block_2712115305dd47611f0cfd2_95334773',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php echo '<script'; ?>
>

      $(function () {

          $('.modal').on('hidden.bs.modal', function (e) {
              $('.errorMessage').remove();
              $('.errorHighlight').removeClass('errorHighlight');
              $(':input', this).val('');
          });
          postAjax.init();

        });

      /*function runSignin() {
          if (validateForm($('#signinform')[0])) {
              $('.signinSpinner').toggleClass('d-none');
              setTimeout(function () {
                  $('.signinSpinner').toggleClass('d-none');
                  // Something you want delayed.
                  document.location.href = "./index.php?p=dashboard"
              }, 1000); // How long do you want the delay to be (in milliseconds)?
          }


      }

      function runSignup() {
          $('.signupSpinner').toggleClass('d-none');
          setTimeout(function () {
              $('.signupSpinner').toggleClass('d-none');
              // Something you want delayed.
              document.location.href = "./index.php?p=dashboard"
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
      }*/


  <?php echo '</script'; ?>
>

<?php
}
}
/* {/block "scripts"} */
}
