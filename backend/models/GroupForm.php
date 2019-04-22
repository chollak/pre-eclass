<?php 

namespace backend\models;

use Yii;
use yii\base\Model;
use common\models\User;

class GroupForm extends Model{

    public $username;
    public $password;
    public $status;

    private $model;

    public function rules()
    {
        return [
            ['username', 'trim'],
            ['username', 'required'],
            ['username', 'match', 'pattern' => '#^[\w_-]+$#i'],
            ['username', 'unique',
                'targetClass' => User::class,
                'filter' => function ($query) {
                    if (!$this->getModel()->isNewRecord) {
                        $query->andWhere(['not', ['id' => $this->getModel()->id]]);
                    }
                }
            ],
            ['username', 'string', 'min' => 2, 'max' => 32],

            ['password', 'required', 'on' => 'create'],
            ['password', 'string', 'min' => 6, 'max' => 32],

            ['status', 'integer'],
            ['status', 'in', 'range' => array_keys(User::statuses())],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'username' => Yii::t('backend', 'Username'),
            'email' => Yii::t('backend', 'Email'),
            'password' => Yii::t('backend', 'Password'),
            'status' => Yii::t('backend', 'Status'),
            'roles' => Yii::t('backend', 'Roles'),
        ];
    }

    public function setModel(User $model){
        $this->model = $model;
        $this->username = $model->username;
        $this->status = $model->status;

        $this->model;
    }

    public function getModel(){
        if(!$this->model){
            $this->model = new User();
        }
        return $this->model;
    }

    public function save(){
        if ($this->validate()) {
            $model = $this->getModel();
            $isNewRecord = $model->getIsNewRecord();
            $model->username = $this->username;
            $model->status = $this->status;
            if ($this->password) {
                $model->setPassword($this->password);
            }
            $model->generateAuthKey();
            if ($model->save() && $isNewRecord) {
                $auth = Yii::$app->authManager;
                $auth->revokeAll($model->getId());
                $auth->assign($auth->getRole(User::ROLE_GROUP), $model->getId());
            }

            return !$model->hasErrors();
        }

        return;
    }

}

?>