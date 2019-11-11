<?php

namespace app\models;
use yii\db\ActiveRecord;

class Comment extends ActiveRecord
{
  

  public function rules()
    {
        return [
            [['text'], 'string'],
            [['id_subject', 'id_user'], 'required', 'message' => 'Обязательное поле'],
            
        ];
    }


	public static function tableName()
	{
		return 'comment';
	}

   	public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'id_user']);
    }
    

    public function getSubject()
    {
        return $this->hasOne(Subject::className(), ['id' => 'id_subject']);
    }  	
}