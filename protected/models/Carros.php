<?php

/**
 * This is the model class for table "carros".
 *
 * The followings are the available columns in table 'carros':
 * @property integer $id
 * @property string $ano
 * @property integer $modelo_id
 * @property string $foto
 * @property string $valor
 * @property integer $parcelas_id
 * @property string $valor_total
 * @property string $data
 * @property integer $user_id
 * @property integer $marca_id
 * @property integer $user_id_update
 *
 * The followings are the available model relations:
 * @property Marcas $marca
 * @property Modelos $modelo
 * @property Parcelas $parcelas
 * @property Users $user
 * @property Users $userIdUpdate
 */
class Carros extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'carros';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ano, modelo_id, parcelas_id, data, marca_id', 'required'),
			array('modelo_id, parcelas_id, user_id, marca_id, user_id_update', 'numerical', 'integerOnly'=>true),
			array('ano', 'length', 'max'=>4),
			array('foto', 'length', 'max'=>150),
			array('valor, valor_total', 'length', 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, ano, modelo_id, foto, valor, parcelas_id, valor_total, data, user_id, marca_id, user_id_update', 'safe', 'on'=>'search'),
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
			'marca' => array(self::BELONGS_TO, 'Marcas', 'marca_id'),
			'modelo' => array(self::BELONGS_TO, 'Modelos', 'modelo_id'),
			'parcelas' => array(self::BELONGS_TO, 'Parcelas', 'parcelas_id'),
			'user' => array(self::BELONGS_TO, 'Users', 'user_id'),
			'userIdUpdate' => array(self::BELONGS_TO, 'Users', 'user_id_update'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'ano' => 'Ano',
			'modelo_id' => 'Modelo',
			'foto' => 'Foto',
			'valor' => 'Valor',
			'parcelas_id' => 'Parcelas',
			'valor_total' => 'Valor Total',
			'data' => 'Data',
			'user_id' => 'User',
			'marca_id' => 'Marca',
			'user_id_update' => 'User Id Update',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('ano',$this->ano,true);
		$criteria->compare('modelo_id',$this->modelo_id);
		$criteria->compare('foto',$this->foto,true);
		$criteria->compare('valor',$this->valor,true);
		$criteria->compare('parcelas_id',$this->parcelas_id);
		$criteria->compare('valor_total',$this->valor_total,true);
		$criteria->compare('data',$this->data,true);
		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('marca_id',$this->marca_id);
		$criteria->compare('user_id_update',$this->user_id_update);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Carros the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
