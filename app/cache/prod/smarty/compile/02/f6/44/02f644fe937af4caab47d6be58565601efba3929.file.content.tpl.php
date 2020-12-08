<?php /* Smarty version Smarty-3.1.19, created on 2020-12-04 10:50:46
         compiled from "/var/www/html/admin697fcvkls/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6098819935fca0676778a96-41721041%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '02f644fe937af4caab47d6be58565601efba3929' => 
    array (
      0 => '/var/www/html/admin697fcvkls/themes/default/template/content.tpl',
      1 => 1606990876,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6098819935fca0676778a96-41721041',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5fca067677d725_62107761',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fca067677d725_62107761')) {function content_5fca067677d725_62107761($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }} ?>
