<?php 
namespace app\models;



use Yii;
use yii\base\Model;

class Registry extends Model 
{
    public $name;
    public $email;
    public $password;

    public function rules() {
        return [
            [['email', 'password', 'name'], 'required', 'message'=>'Не заполнено поле'],
            ['email','email', 'message'=>'Некорректный email'],
            ['email', 'unique', 'targetClass'=>'app\models\User'],
            ['password', 'string', 'min'=>8, 'max'=>16, 'message'=>'Некорректный пароль']
        ];
    }

    public function registry() {
        $user = new User();
        $user->name = $this->name;
        $user->email = $this->email;
        $user->generatePass($this->password);
        return  $user->save();
    }
}