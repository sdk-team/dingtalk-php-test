<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class Can_access_microappOapiUserParams extends Model {
    protected $_name = [
        'appId' => 'appId',
        'userId' => 'userId',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->appId) {
            $res['appId'] = $this->appId;
        }
        if (null !== $this->userId) {
            $res['userId'] = $this->userId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return Can_access_microappOapiUserParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['appId'])){
            $model->appId = $map['appId'];
        }
        if(isset($map['userId'])){
            $model->userId = $map['userId'];
        }
        return $model;
    }
    /**
     * @description 微应用id
     * @var int
     */
    public $appId;

    /**
     * @description 员工唯一标识ID
     * @var string
     */
    public $userId;

}
