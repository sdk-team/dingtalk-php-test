<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class Sync_activityOapiSnsParams extends Model {
    protected $_name = [
        'unionId' => 'unionId',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->unionId) {
            $res['unionId'] = $this->unionId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return Sync_activityOapiSnsParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['unionId'])){
            $model->unionId = $map['unionId'];
        }
        return $model;
    }
    /**
     * @description 11
     * @var string
     */
    public $unionId;

}
