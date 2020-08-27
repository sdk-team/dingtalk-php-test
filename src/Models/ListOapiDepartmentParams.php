<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class ListOapiDepartmentParams extends Model {
    protected $_name = [
        'lang' => 'lang',
        'fetchChild' => 'fetch_child',
        'id' => 'id',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->lang) {
            $res['lang'] = $this->lang;
        }
        if (null !== $this->fetchChild) {
            $res['fetch_child'] = $this->fetchChild;
        }
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return ListOapiDepartmentParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['lang'])){
            $model->lang = $map['lang'];
        }
        if(isset($map['fetch_child'])){
            $model->fetchChild = $map['fetch_child'];
        }
        if(isset($map['id'])){
            $model->id = $map['id'];
        }
        return $model;
    }
    /**
     * @description 通讯录语言(默认zh_CN，未来会支持en_US)
     * @var string
     */
    public $lang;

    /**
     * @description 是否递归部门的全部子部门，ISV微应用固定传递false。
     * @var bool
     */
    public $fetchChild;

    /**
     * @description 父部门id(如果不传，默认部门为根部门，根部门ID为1)
     * @var string
     */
    public $id;

}
