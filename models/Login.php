<?php 

namespace app\models;

use Yii;
use yii\base\Model;

class Login extends Model 
{
    public $password;
    public $email;


    public function rules()
    {
        return [
            [['email', 'password'],'required'],
            ['email', 'email'],
            ['password', 'validatePassword'] //функция для валидации пароля
        ];
    }

    public function validatePassword($attribute,$params) {
       if(!$this->hasErrors()) //если нет ошибок
       {
            $user = $this->getUser(); //получаем пользователя

            if(!$user || !$user->validatePassword($this->password)) //если не нашли пользователя или что-то введено неверно
            {
                $this->addError($attribute, 'Пароль или пользователь введены неверно');
            }
       }

    }

    public function getUser() //получаем пользователя по введенной почте
    {
        return User::findOne(['email'=>$this->email]);
    }

}