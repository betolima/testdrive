<?php

/**
 * Sobrecarga de CWebUser para definir alguns m�todos mais.
 */
class WebUser extends CWebUser{
    const ADMINISTRADORES = 1;
    const FUNCIONARIOS = 2;

   public function isAdmin(){
       return Yii::app()->user->getState("PAPELID") == self::ADMINISTRADORES ? true : false;
   }

   public function isFuncionario(){
       return Yii::app()->user->getState("PAPELID") == self::FUNCIONARIOS ? true : false;
   }

}