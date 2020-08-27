<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListlabelgroupsOapiExtcontactResponseBody\results;

use AlibabaCloud\Tea\Model;

class labels extends Model {
    protected $_name = [
        'name' => 'name',
        'id' => 'id',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return labels
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['name'])){
            $model->name = $map['name'];
        }
        if(isset($map['id'])){
            $model->id = $map['id'];
        }
        return $model;
    }
    /**
     * @description 标签名字
     * @var string
     */
    public $name;

    /**
     * @description 标签id
     * @var int
     */
    public $id;

}
