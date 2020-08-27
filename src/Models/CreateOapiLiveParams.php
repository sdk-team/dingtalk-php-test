<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\CreateOapiLiveParams\request;

class CreateOapiLiveParams extends Model {
    protected $_name = [
        'request' => 'request',
    ];
    public function validate() {
        Model::validateRequired('request', $this->request, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->request) {
            $res['request'] = null !== $this->request ? $this->request->toMap() : null;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return CreateOapiLiveParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['request'])){
            $model->request = request::fromMap($map['request']);
        }
        return $model;
    }
    /**
     * @description 直播创建请求model
     * @var request
     */
    public $request;

}
