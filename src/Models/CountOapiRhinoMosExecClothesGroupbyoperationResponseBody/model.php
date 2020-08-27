<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\CountOapiRhinoMosExecClothesGroupbyoperationResponseBody;

use AlibabaCloud\Tea\Model;

class model extends Model {
    protected $_name = [
        'count' => 'count',
        'id' => 'id',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->count) {
            $res['count'] = $this->count;
        }
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return model
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['count'])){
            $model->count = $map['count'];
        }
        if(isset($map['id'])){
            $model->id = $map['id'];
        }
        return $model;
    }
    /**
     * @description 完成数量
     * @var int
     */
    public $count;

    /**
     * @description 工序uid
     * @var int
     */
    public $id;

}
