<?php

/**
 * This is the model class for table "USER".
 *
 * The followings are the available columns in table 'USER':
 * @property integer $ID
 * @property string $NOME
 * @property string $username
 * @property string $password
 * @property integer $PAPELID
 *
 * The followings are the available model relations:
 * @property CARRO[] $CARROS
 * @property MARCA[] $MARCAS
 * @property PAPEIS $PAPEL
 * @property LOG[] $lOGS
 */
class USER extends CActiveRecord
{
    
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'USER';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('NOME, username, password, PAPELID', 'required'),
			array('PAPELID', 'numerical', 'integerOnly'=>true),
			array('NOME, username', 'length', 'max'=>50),
			array('password', 'length', 'max'=>50),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('ID, NOME, username, password, PAPELID', 'safe', 'on'=>'search'),
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
			'CARROS' => array(self::HAS_MANY, 'CARRO', 'USERID'),
			'MARCAS' => array(self::HAS_MANY, 'MARCA', 'USERID'),
			'PAPEL' => array(self::BELONGS_TO, 'PAPEIS', 'PAPELID'),
			'LOGS' => array(self::HAS_MANY, 'LOG', 'USERID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ID' => 'ID',
			'NOME' => 'Nome',
			'username' => 'Login',
			'password' => 'Senha',
			'PAPELID' => 'Perfil'
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
		$criteria->compare('NOME',$this->NOME,true);
		$criteria->compare('username',$this->username,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('PAPELID',$this->PAPELID);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return USER the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
