<?php

namespace app\controllers;
use app\forms\CalcForm;
use app\transfer\CalcResult;

class CalcCtrl {

	private $messages;
	private $form;
	private $wynik;
	private $hide_intro;

	public function __construct(){
		$this->form = new CalcForm();
		$this->wynik = new CalcResult();
	}
	
	public function getParams(){
		$this->form->kw = isset($_REQUEST ['kw']) ? $_REQUEST ['kw'] : null;
		$this->form->pr = isset($_REQUEST ['pr']) ? $_REQUEST ['pr'] : null;
		$this->form->lt = isset($_REQUEST ['lt']) ? $_REQUEST ['lt'] : null;
	}
	
	public function validate() {
		if (! (isset ( $this->form->kw ) && isset ( $this->form->pr ) && isset ( $this->form->lt ))) {
			return false; 
		} else { 
			$this->hide_intro = true; 
		}
		
		if ($this->form->kw == "") {
			$this->messages->addError('Nie podano kwoty pożyczki');
		}
		if ($this->form->pr == "") {
			$this->messages->addError('Nie podano oprocentowania');
		}
		if ($this->form->lt == "") {
			$this->messages->addError('Nie podano okresu pozyczki');
		}
		
		if (! $this->messages->isError()) {

			if (! is_numeric ( $this->form->kw )) {
				$this->messages->addError('Kwota pożyczki nie jest liczbą');
			}
			
			if (! is_numeric ( $this->form->pr )) {
				$this->messages->addError('Oprocentowanie nie jest liczbą');
			}
			if (! is_numeric ( $this->form->lt )) {
				$this->messages->addError('Ilość lat nie jest liczbą');
			}
		}
		
		return ! $this->messages->isError();
	}

	public function process(){

		$this->getparams();
		
		if ($this->validate()) {
				
			$this->form->kw = intval($this->form->kw);
			$this->form->pr = intval($this->form->pr);
			$this->form->lt = intval($this->form->lt);
			$this->messages->addInfo('Parametry poprawne.');
				
			$this->form->kw = intval($this->form->kw);
			$this->form->pr = intval($this->form->pr)/100;
			$this->form->lt = intval($this->form->lt);
			for($i=0;$i<$lt;$i++){
				$this->form->kw=$this->form->kw*(1+$this->form->pr);
			}
			$this->wynik->wynik = $this->form->kw/(12*$this->form->lt);
			$this->form->pr = $this->form->pr*100;
			}
			
			$this->messages->addInfo('Wynik jest twoją ratą miesięczną');
		
		
		$this->generateView();
	}
	
	public function generateView(){		
		getSmarty()->assign('page_title','Przykład 6');
		getSmarty()->assign('page_description','Aplikacja z jednym "punktem wejścia". Zmiana w postaci nowej struktury foderów, skryptu inicjalizacji oraz pomocniczych funkcji.');
		getSmarty()->assign('page_header','Kontroler główny');
					
		getSmarty()->assign('form',$this->form);
		getSmarty()->assign('wynik',$this->wynik);
		
		getSmarty()->display('calc_view.html');
	}
}
