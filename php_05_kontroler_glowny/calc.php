<?php
require_once 'init.php';

switch ($action) {
	default : 
		include_once $conf->root_path.'/app/controllers/CalcCtrl.class.php';
		include $conf->root_path.'/app/security/sprawdz.php';
		$ctrl = new CalcCtrl ();
		$ctrl->generateView ();
	break;
	case 'calcCompute' :
		include_once $conf->root_path.'/app/controllers/CalcCtrl.class.php';
		include $conf->root_path.'/app/security/sprawdz.php';
		$ctrl = new CalcCtrl ();
		$ctrl->process ();
	break;
	case 'action1' :
	print('Siemens');
	break;
	case 'action2' :
	print('Siemens');
	break;
}