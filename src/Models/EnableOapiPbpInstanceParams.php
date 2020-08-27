<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class EnableOapiPbpInstanceParams extends Model {
    protected $_name = [
        'bizId' => 'biz_id',
        'bizInstId' => 'biz_inst_id',
    ];
    public function validate() {
        Model::validateRequired('bizId', $this->bizId, true);
        Model::validateRequired('bizInstId', $this->bizInstId, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->bizId) {
            $res['biz_id'] = $this->bizId;
        }
        if (null !== $this->bizInstId) {
            $res['biz_inst_id'] = $this->bizInstId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return EnableOapiPbpInstanceParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['biz_id'])){
            $model->bizId = $map['biz_id'];
        }
        if(isset($map['biz_inst_id'])){
            $model->bizInstId = $map['biz_inst_id'];
        }
        return $model;
    }
    /**
     * @description 业务唯一标识
     * @var string
     */
    public $bizId;

    /**
     * @description 业务实例唯一标识
     * @var string
     */
    public $bizInstId;

}
