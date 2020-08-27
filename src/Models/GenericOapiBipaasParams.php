<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class GenericOapiBipaasParams extends Model {
    protected $_name = [
        'request' => 'request',
    ];
    public function validate() {
        Model::validateRequired('request', $this->request, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->request) {
            $res['request'] = $this->request;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return GenericOapiBipaasParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['request'])){
            $model->request = $map['request'];
        }
        return $model;
    }
    /**
     * @description 调用请求
     * @var string
     */
    public $request;

}
