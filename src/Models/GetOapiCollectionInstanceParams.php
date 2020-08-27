<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class GetOapiCollectionInstanceParams extends Model {
    protected $_name = [
        'formInstanceId' => 'formInstance_id',
        'bizType' => 'biz_type',
    ];
    public function validate() {
        Model::validateRequired('formInstanceId', $this->formInstanceId, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->formInstanceId) {
            $res['formInstance_id'] = $this->formInstanceId;
        }
        if (null !== $this->bizType) {
            $res['biz_type'] = $this->bizType;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return GetOapiCollectionInstanceParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['formInstance_id'])){
            $model->formInstanceId = $map['formInstance_id'];
        }
        if(isset($map['biz_type'])){
            $model->bizType = $map['biz_type'];
        }
        return $model;
    }
    /**
     * @description 实例id
     * @var string
     */
    public $formInstanceId;

    /**
     * @description 0表示通用填表，1表示教育版填表
     * @var int
     */
    public $bizType;

}
