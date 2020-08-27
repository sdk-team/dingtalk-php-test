<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\MarkotherpayOapiDingpayOrderResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model {
    protected $_name = [
        'resultMap' => 'result_map',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->resultMap) {
            $res['result_map'] = $this->resultMap;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return result
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['result_map'])){
            $model->resultMap = $map['result_map'];
        }
        return $model;
    }
    /**
     * @description 标记结果
     * @var string
     */
    public $resultMap;

}
