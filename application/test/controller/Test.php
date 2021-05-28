<?php
namespace app\test\controller;

use app\test\model\User;

class Test
{
    public function test()
    {
        var_dump(phpinfo());
    }

    public function hello($name)
    {
        return 'Hello,'.$name;
    }

    public function test1($aaa)
    {
        $user = new User();

        return $user->model2($aaa);

    }

}
