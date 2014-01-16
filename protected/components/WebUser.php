<?php

/**
 * Sobrecarga de CWebUser para definir alguns métodos mais.
 */
class WebUser extends CWebUser{
    const ADMINISTRADORES = 1;
    const FUNCIONARIOS = 2;

   public function isAdmin(){
       return Yii::app()->user->getState("papel_id") == self::ADMINISTRADORES ? true : false;
   }

   public function isFuncionario(){
       return Yii::app()->user->getState("papel_id") == self::FUNCIONARIOS ? true : false;
   }

}