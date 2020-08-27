<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\CreateOapiBlackboardParams\createRequest;

class CreateOapiBlackboardParams extends Model {
    protected $_name = [
        'createRequest' => 'create_request',
    ];
    public function validate() {
        Model::validateRequired('createRequest', $this->createRequest, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->createRequest) {
            $res['create_request'] = null !== $this->createRequest ? $this->createRequest->toMap() : null;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return CreateOapiBlackboardParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['create_request'])){
            $model->createRequest = createRequest::fromMap($map['create_request']);
        }
        return $model;
    }
    /**
     * @description 请求入参
     * @var createRequest
     */
    public $createRequest;

}
