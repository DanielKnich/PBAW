<?php
/* Smarty version 3.1.30, created on 2023-04-23 23:55:56
  from "C:\Users\Daniel\Desktop\PBAW\xampp\htdocs\php_04_obiektowosc\app\calc_view.php" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_6445a96cd90689_35660763',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '09d1bedcc95e37b0d5bb184d7c829145fad1adc1' => 
    array (
      0 => 'C:\\Users\\Daniel\\Desktop\\PBAW\\xampp\\htdocs\\php_04_obiektowosc\\app\\calc_view.php',
      1 => 1682286805,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6445a96cd90689_35660763 (Smarty_Internal_Template $_smarty_tpl) {
echo '<?php ';?>require_once dirname(__FILE__) .'/../config.php';<?php echo '?>';?>
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
<meta charset="utf-8" />
<?php echo '<?php
';?>include $conf->root_path.'/templates/top.php';
<?php echo '?>';?>

<title>Kalkulator</title>
<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
</head>
<body>
<div style="width:90%; margin: 2em ;">
	<a href="<?php echo '<?php ';?>print($conf->app_root); <?php echo '?>';?>/app/security/wyloguj.php" class="pure-button pure-button-active">Wyloguj</a>
</div>

<form action="<?php echo '<?php ';?>print($conf->app_url);<?php echo '?>';?>/app/calc.php" method="post">
	<label for="id_x">Kwota kredytu: </label>
	<input id="id_x" type="text" name="kwota"/><br />
	<label for="id_x">Procent: </label>
	<input id="id_x" type="text" name="procent"/><br />
	<label for="id_y">Lata: </label>
	<input id="id_y" type="text" name="lata"/><br />
	<input type="submit" value="Oblicz" />
</form>	

<?php echo '<?php
';?>if (isset($messages)) {
	if (count ( $messages ) > 0) {
		echo '<ol style="margin: 20px; padding: 10px 10px 10px 30px; border-radius: 5px; background-color: #f88; width:300px;">';
		foreach ( $messages as $key => $msg ) {
			echo '<li>'.$msg.'</li>';
		}
		echo '</ol>';
	}
}
<?php echo '?>';?>

<?php echo '<?php ';?>if (isset($wynik)){ <?php echo '?>';?>
<div style="margin: 20px; padding: 10px; border-radius: 5px; background-color: #ff0; width:300px;">
<?php echo '<?php ';?>echo 'Wynik: '.$wynik; <?php echo '?>';?>
</div>
<?php echo '<?php ';?>} <?php echo '?>';?>

<?php echo '<?php 
';?>include $conf->root_path.'/templates/bottom.php';
<?php echo '?>';?>

</body>
</html><?php }
}
