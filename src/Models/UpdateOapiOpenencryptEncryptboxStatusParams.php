<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\UpdateOapiOpenencryptEncryptboxStatusParams\topEncryptBoxStatus;

class UpdateOapiOpenencryptEncryptboxStatusParams extends Model {
    protected $_name = [
        'topEncryptBoxStatus' => 'top_encrypt_box_status',
    ];
    public function validate() {
        Model::validateRequired('topEncryptBoxStatus', $this->topEncryptBoxStatus, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->topEncryptBoxStatus) {
            $res['top_encrypt_box_status'] = null !== $this->topEncryptBoxStatus ? $this->topEncryptBoxStatus->toMap() : null;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return UpdateOapiOpenencryptEncryptboxStatusParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['top_encrypt_box_status'])){
            $model->topEncryptBoxStatus = topEncryptBoxStatus::fromMap($map['top_encrypt_box_status']);
        }
        return $model;
    }
    /**
     * @description 请求参数
     * @var topEncryptBoxStatus
     */
    public $topEncryptBoxStatus;

}
