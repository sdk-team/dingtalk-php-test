<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ApplyoutidOapiSmartdeviceResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model {
    protected $_name = [
        'outdid' => 'outdid',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->outdid) {
            $res['outdid'] = $this->outdid;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return result
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['outdid'])){
            $model->outdid = $map['outdid'];
        }
        return $model;
    }
    /**
     * @description 外部设备id
     * @var string
     */
    public $outdid;

}
