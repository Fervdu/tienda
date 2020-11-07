<?php
/* Smarty version 3.1.33, created on 2020-11-01 14:50:10
  from 'C:\xampp\htdocs\tienda\admin8200tvlzx\themes\default\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f9f11728b7430_86658824',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fd107b904fc728d02d6629e2dd278dab7e5b287e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tienda\\admin8200tvlzx\\themes\\default\\template\\content.tpl',
      1 => 1604259075,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f9f11728b7430_86658824 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }
}
