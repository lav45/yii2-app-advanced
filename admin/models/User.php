<?php

namespace admin\models;

use yii\web\IdentityInterface;
use yii\base\NotSupportedException;

/**
 * User model
 */
class User extends \common\models\User implements IdentityInterface
{
    /**
     * @var string
     */
    private $password;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['login'], 'required'],
            [['login'], 'string', 'max' => 32],
            [['login'], 'unique'],

            [['password'], 'required'],
            [['password'], 'string', 'max' => 16],

            [['is_active'], 'boolean'],
        ];
    }

    /**
     * @inheritdoc
     */
    public static function findIdentity($id)
    {
        return static::find()
            ->where(['login' => $id, 'is_active' => true])
            ->cache(3600)
            ->one();
    }

    /**
     * @inheritdoc
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
        throw new NotSupportedException('"findIdentityByAccessToken" is not implemented.');
    }

    /**
     * @inheritdoc
     */
    public function getId()
    {
        return $this->getPrimaryKey();
    }

    /**
     * @inheritdoc
     */
    public function getAuthKey()
    {
        return $this->auth_key;
    }

    /**
     * @inheritdoc
     */
    public function validateAuthKey($authKey)
    {
        return $this->getAuthKey() === $authKey;
    }

    /**
     * Generates password hash from password and sets it to the model
     *
     * @param string $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
        parent::setPassword($password);
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }
}
