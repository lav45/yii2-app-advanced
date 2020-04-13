<?php

namespace console\controllers;

use yii\helpers\Console;
use yii\console\Controller;
use yii\console\Exception;
use console\models\User;

/**
 * Users CRUD controller
 *
 * Class UserController
 * @package console\controllers
 */
class UserController extends Controller
{
    /**
     * Show User list
     */
    public function actionIndex()
    {
        $query = User::find()
            ->select(['login'])
            ->asArray();

        $this->stdout("The following users were found in the system:\n\n", Console::FG_YELLOW);

        foreach ($query->each() as $user) {
            $this->stdout("\t* {$user['login']}\n", Console::FG_GREEN);
        }

        $this->stdout("\n");
    }

    /**
     * Delete user {login}
     *
     * @throws Exception
     * @throws \Throwable
     * @throws \yii\db\StaleObjectException
     */
    public function actionDelete()
    {
        $login = @func_get_arg(0) ? : $this->getStdIn('Enter login: ');
        $user = $this->findUser($login);
        $user->delete();
        $this->stdout("* {$user->login} was deleted\n", Console::FG_GREEN);
    }

    /**
     * Create new user {login} {password}
     */
    public function actionCreate()
    {
        $user = new User();
        $user->login = @func_get_arg(0) ? : $this->getStdIn('Enter login: ');
        $user->password = @func_get_arg(1) ? : $this->getStdIn('Enter password: ');
        $user->generateAuthKey();

        if (!$user->save()) {
            $this->showErrors($user);
        } else {
            $this->stdout("* {$user->login} was added\n", Console::FG_GREEN);
        }
    }

    /**
     * @param string $message
     * @return string
     */
    protected function getStdIn($message)
    {
        do {
            $this->stdout($message, Console::FG_YELLOW);
            $data = Console::stdin();
        } while (!$data) ;
        return $data;
    }

    /**
     * @param User $user
     */
    protected function showErrors($user)
    {
        $errors = $user->getFirstErrors();
        $errors = implode("\n* ", $errors);
        $this->stderr("{$errors}\n", Console::FG_RED);
    }

    /**
     * @param $login
     * @return User
     * @throws Exception
     */
    protected function findUser($login)
    {
        $login = trim($login);
        $user = User::findOne($login);
        if ($user === null) {
            throw new Exception('User not found');
        }
        return $user;
    }
}