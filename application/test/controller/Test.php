<?php
namespace app\test\controller;

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

}
