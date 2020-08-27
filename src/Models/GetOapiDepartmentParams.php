<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class GetOapiDepartmentParams extends Model {
    protected $_name = [
        'id' => 'id',
        'lang' => 'lang',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        if (null !== $this->lang) {
            $res['lang'] = $this->lang;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return GetOapiDepartmentParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['id'])){
            $model->id = $map['id'];
        }
        if(isset($map['lang'])){
            $model->lang = $map['lang'];
        }
        return $model;
    }
    /**
     * @description 部门id
     * @var string
     */
    public $id;

    /**
     * @description 通讯录语言(默认zh_CN，未来会支持en_US)
     * @var string
     */
    public $lang;

}
