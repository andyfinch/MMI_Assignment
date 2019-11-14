<?php
/* Smarty version 3.1.33, created on 2019-11-13 17:14:31
  from 'C:\wamp64\www\MMI_Assignment\views\pages\profile.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dcc39f710a584_46673011',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f79ebb2320963d50a029af679b5febd34301793f' => 
    array (
      0 => 'C:\\wamp64\\www\\MMI_Assignment\\views\\pages\\profile.tpl',
      1 => 1573665270,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dcc39f710a584_46673011 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5363563855dcc39f70eb2b2_13246019', "body");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7453600065dcc39f71035e0_89212329', "scripts");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "layouts/main.tpl");
}
/* {block "body"} */
class Block_5363563855dcc39f70eb2b2_13246019 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_5363563855dcc39f70eb2b2_13246019',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="container">
        <div class="row mt-5">


            <div class="col-md-4">

                <div class="card border-secondary" style="width: 18rem;">
                    <img class="card-img-top"
                         src="https://robohash.org/<?php echo $_SESSION['user_data']['full_name'];?>
?size=150x150"
                         alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $_SESSION['user_data']['full_name'];?>
</h5>
                        <p class="card-text"><?php echo $_SESSION['user_data']['user_name'];?>
</p>
                    </div>
                </div>


            </div>

            <div class="col-md-8">
                <form id="form" class="needs-validation" novalidate="" action="index.php" method="post">
                    <input type="hidden" name="action" value="profile">

                    <!-- front content -->
                    <div class="card border-secondary">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-md-6">
                                    <h5>User Profile</h5>
                                </div>
                                <div class="col-md-6 text-right">
                                    <a class="text-secondary" onclick="editForm();" href="#"><i class="fas fa-edit"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="userName">User Name </label>
                                <input disabled type="text" class="form-control"
                                       value="<?php echo $_SESSION['user_data']['user_name'];?>
">
                                <input type="hidden" class="form-control" id="userName" name="userName"
                                       value="<?php echo $_SESSION['user_data']['user_name'];?>
">
                                <div class="invalid-feedback">
                                    Please enter a valid user name.
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="email">Email </label>
                                <input disabled type="email" class="form-control editable" name="email" id="email"
                                       value="<?php echo $_SESSION['user_data']['email'];?>
">
                                <div class="invalid-feedback">
                                    Please enter a valid email address for shipping updates.
                                </div>
                            </div>

                            
                            <div class="row">
                                <div class="col mb-3">
                                    <label for="fullName">Full name</label>
                                    <input disabled type="text" class="form-control editable" id="fullName"
                                           name="fullName"
                                           value="<?php echo $_SESSION['user_data']['full_name'];?>
" required="">
                                    <div class="invalid-feedback">
                                        Valid name is required.
                                    </div>
                                </div>
                            </div>


                            <div class="mb-3">
                                <label for="city">City</label>
                                <input disabled type="text" class="form-control editable" id="city" name="city"
                                       value="<?php echo $_SESSION['user_data']['city'];?>
" required="">
                                <div class="invalid-feedback">
                                    Please enter valid city.
                                </div>
                            </div>


                            <div class="modal-footer d-none">
                                <button type="submit" class="btn btn-primary">
                  <span class="signinSpinner d-none spinner-border spinner-border-sm" role="status"
                        aria-hidden="true"></span>
                                    Save
                                </button>
                                <button type="button" class="btn btn-secondary" onclick="cancelEdit()">Cancel</button>
                            </div>
                        </div>


                    </div>


                </form>
            </div>
        </div>
    </div>
<?php
}
}
/* {/block "body"} */
/* {block "scripts"} */
class Block_7453600065dcc39f71035e0_89212329 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'scripts' => 
  array (
    0 => 'Block_7453600065dcc39f71035e0_89212329',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
>
        postAjax.init();

        function editForm() {


            $('#form input.editable').removeAttr('disabled');
            $('#form .modal-footer.d-none').removeClass('d-none')
        }

        function cancelEdit() {

            $('#form')[0].reset();
            $('#form input.editable').prop('disabled', true);
            $('#form .modal-footer').toggleClass('d-none')
        }


    <?php echo '</script'; ?>
>
    <?php if ($_smarty_tpl->tpl_vars['message']->value) {?>
        <?php echo '<script'; ?>
>

            $(function () {
                var message = '<?php echo $_smarty_tpl->tpl_vars['message']->value;?>
';
                //$('.toast .toast-header .content').text(message);
                $('.toast .toast-body').text(message);
                $('.toast').toast('show');

            });
        <?php echo '</script'; ?>
>
    <?php }
}
}
/* {/block "scripts"} */
}
