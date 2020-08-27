<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class DeleteOapiExtcontactParams extends Model {
    protected $_name = [
        'userId' => 'user_id',
    ];
    public function validate() {
        Model::validateRequired('userId', $this->userId, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->userId) {
            $res['user_id'] = $this->userId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return DeleteOapiExtcontactParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['user_id'])){
            $model->userId = $map['user_id'];
        }
        return $model;
    }
    /**
     * @description userId
     * @var string
     */
    public $userId;

}
