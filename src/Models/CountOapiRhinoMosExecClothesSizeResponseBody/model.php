<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\CountOapiRhinoMosExecClothesSizeResponseBody;

use AlibabaCloud\Tea\Model;

class model extends Model {
    protected $_name = [
        'count' => 'count',
        'sizeCode' => 'size_code',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->count) {
            $res['count'] = $this->count;
        }
        if (null !== $this->sizeCode) {
            $res['size_code'] = $this->sizeCode;
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
        if(isset($map['size_code'])){
            $model->sizeCode = $map['size_code'];
        }
        return $model;
    }
    /**
     * @description 1
     * @var int
     */
    public $count;

    /**
     * @description 1
     * @var string
     */
    public $sizeCode;

}
