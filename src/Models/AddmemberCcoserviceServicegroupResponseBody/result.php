<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\AddmemberCcoserviceServicegroupResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model {
    protected $_name = [
        'dingtalkId' => 'dingtalk_id',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->dingtalkId) {
            $res['dingtalk_id'] = $this->dingtalkId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return result
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['dingtalk_id'])){
            $model->dingtalkId = $map['dingtalk_id'];
        }
        return $model;
    }
    /**
     * @description dingtalkId
     * @var string
     */
    public $dingtalkId;

}
