<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\Get_auth_infoOapiServiceResponseBody;

use AlibabaCloud\Tea\Model;

class authUserInfo extends Model {
    protected $_name = [
        'userId' => 'userId',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->userId) {
            $res['userId'] = $this->userId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return authUserInfo
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['userId'])){
            $model->userId = $map['userId'];
        }
        return $model;
    }
    /**
     * @description userId
     * @var string
     */
    public $userId;

}
