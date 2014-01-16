<?php

/**
 * This is the model class for table "marcas".
 *
 * The followings are the available columns in table 'marcas':
 * @property integer $id
 * @property string $nome
 * @property string $data
 * @property integer $user_id
 * @property integer $user_id_update
 *
 * The followings are the available model relations:
 * @property Users $user
 * @property Users $userIdUpdate
 */
class Marcas extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'marcas';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nome, data, user_id', 'required'),
			array('user_id, user_id_update', 'numerical', 'integerOnly'=>true),
			array('nome', 'length', 'max'=>50),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, nome, data, user_id, user_id_update', 'safe', 'on'=>'search'),
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
			'nome' => 'Nome',
			'data' => 'Data',
			'user_id' => 'User',
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
		$criteria->compare('nome',$this->nome,true);
		$criteria->compare('data',$this->data,true);
		$criteria->compare('user_id',$this->user_id);
        $criteria->compare('user_id_update',$this->user_id_update);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Marcas the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
