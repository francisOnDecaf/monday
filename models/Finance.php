<?php

namespace app\models;

use yii\db\ActiveRecord;

class Finance extends ActiveRecord
{
    public function rules()
    {
        return [
        	['id', 'unique'],
            [['description'], 'required'],
            [['income','expense'], 'integer'],
        ];
    }

    public static function tableName()
	{
	    return 'finance';
	}

	public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'description' => 'Description',
            'income' => 'Income',
            'expense' => 'Expense',
            'created_on' => 'Created On'            
        ];
    }
}