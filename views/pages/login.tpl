{extends file="layouts/main.tpl"}
{block name="body"}
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
{/block}
{block name="modals"}
<form class="needs-validation" novalidate="" method="post" action="index.php">
 <div class="modal fade" id="signupModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
      aria-hidden="true">
     <div class="modal-dialog modal-dialog-centered" role="document">
         <div class="modal-content">
             <div class="modal-body">
                 <div class="container">
                     {if $error}
                     <div class="alert alert-danger" role="alert">
                         {$error}
                     </div>
                     {/if}

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
                                 <label for="email">Email </label>
                                 <input type="email" class="form-control" id="email" placeholder="you@example.com" name="email">
                                 <div class="invalid-feedback">
                                     Please enter a valid email address for shipping updates.
                                 </div>
                             </div>

                             <div class="mb-3">
                                 <label for="password">Password </label>
                                 <input type="email" class="form-control" id="password" name="password">
                                 <div class="invalid-feedback">
                                     Please enter a valid password.
                                 </div>
                             </div>

                             <div class="mb-3">
                                 <label for="confirmPassword">Confirm Password </label>
                                 <input type="email" class="form-control" id="confirmPassword" name="confirmPassword">
                                 <div class="invalid-feedback">
                                     Please enter a valid password.
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



                         </div>
                     </div>
                 </div>
             </div>
             <div class="modal-footer">
                 <button type="submit" class="btn btn-primary">Sign up</button>
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
{/block}
{block name="scripts"}
  <script>
      function runSignin() {
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
      }


  </script>

{if $error}
{literal}
<script>
    console.log("hello");
    $(function() {
        $("#signupModal").modal("show");
    });
</script>
{/literal}
{/if}
{/block}