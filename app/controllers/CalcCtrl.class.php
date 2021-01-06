<?php namespace app\controllers;

use app\forms\CalcForm;
use app\transfer\CalcResult;

class CalcCtrl
{
    private $form;
    private $result;

    public function __construct(){
        $this->form = new CalcForm();
        $this->result = new CalcResult();
    }

    function getParams(){
        $this->form->value = getFromRequest('value');
        $this->form->time = getFromRequest('time');
        $this->form->interest = getFromRequest('interest');
    }

    function validate(){
        if (!(isset($this->form->value) && isset($this->form->time) && isset($this->form->interest))) {
            return false;
        }

        if ( $this->form->value == "") {
            getMessages()->addError('Nie podano kwoty kredytu');
        }
        if ( $this->form->time == "") {
            getMessages()->addError('Nie podano czasu kredytowania');
        }
        if ( $this->form->interest == "") {
            getMessages()->addError('Nie podano oprocentowania');
        }


        if (!is_numeric($this->form->value)) {
            getMessages()->addError('Kwota kredytu nie jest liczbą');
        }
        if (!is_numeric($this->form->time)) {
            getMessages()->addError('Okres kredytowania nie jest liczbą');
        }
        if (!is_numeric($this->form->interest)) {
            getMessages()->addError('Oprocentowanie nie jest liczbą');
        }

        return ! getMessages()->isError();
    }

    function action_CalcCompute(){
        $this->getParams();

        if ($this->validate()) {
            //konwersja parametrów na float
            $this->form->value = floatval($this->form->value);
            $this->form->time = floatval($this->form->time);
            $this->form->interest = floatval($this->form->interest);

            $this->result->result = (($this->form->value * (100 + $this->form->interest)) / 100) / ($this->form->time * 12);
        }
        $this->generateView();
    }

    public function action_calcShow(){
        $this->generateView();
    }

    public function generateView()
    {
        getSmarty()->assign('user',unserialize($_SESSION['user']));
        getSmarty()->assign('page_title','Kalkulator kredytowy');
        getSmarty()->assign('page_description','Darmowy kalkulator kredytowy, dzięki któremu w szybki i łatwy sposób obliczysz ratę swojego kredytu');
        getSmarty()->assign('page_logo','Kalkulator kredytowy');


        //pozostałe zmienne niekoniecznie muszą istnieć, dlatego sprawdzamy aby nie otrzymać ostrzeżenia
        getSmarty()->assign('frm',$this->form);
        getSmarty()->assign('res',$this->result);

        getSmarty()->display('CalcView.tpl');

    }
}