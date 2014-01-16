<?php

/**
 * RecuperarForm class.
 * RecuperarForm is the data structure for keeping
 */
class RecuperarForm extends CFormModel
{
	public $rg;

	/**
	 * Declares the validation rules.
	 */
	public function rules()
	{
		return array(
			// name, email, subject and body are required
			array('rg', 'required'),
		);
	}

	/**
	 * Declares customized attribute labels.
	 * If not declared here, an attribute would have a label that is
	 * the same as its name with the first letter in upper case.
	 */
	public function attributeLabels()
	{
		return array(
			//'verifyCode'=>'Verification Code',
		);
	}
}