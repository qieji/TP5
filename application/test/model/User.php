<?php
namespace app\test\model;

use think\Model;

class User extends Model
{
    public function model1()
    {
        var_dump(phpinfo());
    }

    public function model2($name)
    {
        return 'Hello,'.$name;
    }

}
