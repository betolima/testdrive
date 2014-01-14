<?php

/**
 * This is the model class for table "CARRO".
 *
 * The followings are the available columns in table 'CARRO':
 * @property integer $ID
 * @property string $ANO
 * @property integer $MODELOID
 * @property string $FOTO
 * @property string $VALOR
 * @property integer $PARCELASID
 * @property string $VALORTOTAL
 * @property integer $USERID
 *
 * The followings are the available model relations:
 * @property MODELO $mODELO
 * @property PARCELAS $pARCELAS
 * @property USER $uSER
 */
class CARRO extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'CARRO';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ANO, MODELOID, PARCELASID', 'required'),
			array('MODELOID, PARCELASID, USERID', 'numerical', 'integerOnly'=>true),
			array('ANO', 'length', 'max'=>4),
			array('FOTO', 'length', 'max'=>150),
			array('VALOR, VALORTOTAL', 'length', 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('ID, ANO, MODELOID, FOTO, VALOR, PARCELASID, VALORTOTAL, USERID', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'MODELO' => array(self::BELONGS_TO, 'MODELO', 'MODELOID'),
			'PARCELAS' => array(self::BELONGS_TO, 'PARCELAS', 'PARCELASID'),
			'USER' => array(self::BELONGS_TO, 'USER', 'USERID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ID' => 'ID',
			'ANO' => 'Ano',
			'MODELOID' => 'Modeloid',
			'FOTO' => 'Foto',
			'VALOR' => 'Valor',
			'PARCELASID' => 'Parcelasid',
			'VALORTOTAL' => 'Valortotal',
			'USERID' => 'Userid',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('ID',$this->ID);
		$criteria->compare('ANO',$this->ANO,true);
		$criteria->compare('MODELOID',$this->MODELOID);
		$criteria->compare('FOTO',$this->FOTO,true);
		$criteria->compare('VALOR',$this->VALOR,true);
		$criteria->compare('PARCELASID',$this->PARCELASID);
		$criteria->compare('VALORTOTAL',$this->VALORTOTAL,true);
		$criteria->compare('USERID',$this->USERID);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return CARRO the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
