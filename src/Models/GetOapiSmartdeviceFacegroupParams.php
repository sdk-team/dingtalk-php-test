<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class GetOapiSmartdeviceFacegroupParams extends Model {
    protected $_name = [
        'bizId' => 'biz_id',
    ];
    public function validate() {
        Model::validateRequired('bizId', $this->bizId, true);
        Model::validateMaxLength('bizId', $this->bizId, 23);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->bizId) {
            $res['biz_id'] = $this->bizId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return GetOapiSmartdeviceFacegroupParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['biz_id'])){
            $model->bizId = $map['biz_id'];
        }
        return $model;
    }
    /**
     * @description 业务id
     * @var string
     */
    public $bizId;

}
