<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListidsOapiBlackboardParams\queryRequest;

class ListidsOapiBlackboardParams extends Model {
    protected $_name = [
        'queryRequest' => 'query_request',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->queryRequest) {
            $res['query_request'] = null !== $this->queryRequest ? $this->queryRequest->toMap() : null;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return ListidsOapiBlackboardParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['query_request'])){
            $model->queryRequest = queryRequest::fromMap($map['query_request']);
        }
        return $model;
    }
    /**
     * @description 请求入参
     * @var queryRequest
     */
    public $queryRequest;

}
