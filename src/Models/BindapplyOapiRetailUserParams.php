<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\BindapplyOapiRetailUserParams\request;

class BindapplyOapiRetailUserParams extends Model {
    protected $_name = [
        'channel' => 'channel',
        'request' => 'request',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->channel) {
            $res['channel'] = $this->channel;
        }
        if (null !== $this->request) {
            $res['request'] = null !== $this->request ? $this->request->toMap() : null;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return BindapplyOapiRetailUserParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['channel'])){
            $model->channel = $map['channel'];
        }
        if(isset($map['request'])){
            $model->request = request::fromMap($map['request']);
        }
        return $model;
    }
    /**
     * @description 业务身份
     * @var string
     */
    public $channel;

    /**
     * @description 请求业务对象
     * @var request
     */
    public $request;

}
