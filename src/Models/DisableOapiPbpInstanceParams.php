<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class DisableOapiPbpInstanceParams extends Model {
    protected $_name = [
        'bizInstId' => 'biz_inst_id',
        'bizId' => 'biz_id',
    ];
    public function validate() {
        Model::validateRequired('bizInstId', $this->bizInstId, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->bizInstId) {
            $res['biz_inst_id'] = $this->bizInstId;
        }
        if (null !== $this->bizId) {
            $res['biz_id'] = $this->bizId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return DisableOapiPbpInstanceParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['biz_inst_id'])){
            $model->bizInstId = $map['biz_inst_id'];
        }
        if(isset($map['biz_id'])){
            $model->bizId = $map['biz_id'];
        }
        return $model;
    }
    /**
     * @description 业务实例唯一标识
     * @var string
     */
    public $bizInstId;

    /**
     * @description 业务唯一标识
     * @var string
     */
    public $bizId;

}
