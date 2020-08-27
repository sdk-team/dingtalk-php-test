<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\SendOapiDingResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model {
    protected $_name = [
        'openDingId' => 'open_ding_id',
        'invalidUsers' => 'invalid_users',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->openDingId) {
            $res['open_ding_id'] = $this->openDingId;
        }
        if (null !== $this->invalidUsers) {
            $res['invalid_users'] = $this->invalidUsers;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return result
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['open_ding_id'])){
            $model->openDingId = $map['open_ding_id'];
        }
        if(isset($map['invalid_users'])){
            if(!empty($map['invalid_users'])){
                $model->invalidUsers = $map['invalid_users'];
            }
        }
        return $model;
    }
    /**
     * @description 发送成功的DING_ID
     * @var string
     */
    public $openDingId;

    /**
     * @description 不能接收DING的用户列表
     * @var array
     */
    public $invalidUsers;

}
