<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\UpdateOapiBlackboardParams\updateRequest;

class UpdateOapiBlackboardParams extends Model {
    protected $_name = [
        'updateRequest' => 'update_request',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->updateRequest) {
            $res['update_request'] = null !== $this->updateRequest ? $this->updateRequest->toMap() : null;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return UpdateOapiBlackboardParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['update_request'])){
            $model->updateRequest = updateRequest::fromMap($map['update_request']);
        }
        return $model;
    }
    /**
     * @description 请求入参
     * @var updateRequest
     */
    public $updateRequest;

}
