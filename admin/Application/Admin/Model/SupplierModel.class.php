<?php
namespace Admin\Model;


use Think\Model;


class SupplierModel extends BaseModel{

    protected $_validate = array(
        array('name','require','供货商名称不能为空!',self::EXISTS_VALIDATE,'',self::MODEL_BOTH),
        array('status','require','状态不能为空!',self::EXISTS_VALIDATE,'',self::MODEL_BOTH),
        array('sort','require','排序不能为空!',self::EXISTS_VALIDATE,'',self::MODEL_BOTH),
    );
}