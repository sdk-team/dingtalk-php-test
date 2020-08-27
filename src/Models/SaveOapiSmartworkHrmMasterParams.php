<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\SaveOapiSmartworkHrmMasterParams\bizData;

class SaveOapiSmartworkHrmMasterParams extends Model {
    protected $_name = [
        'tenantId' => 'tenant_id',
        'bizData' => 'biz_data',
    ];
    public function validate() {
        Model::validateRequired('tenantId', $this->tenantId, true);
        Model::validateRequired('bizData', $this->bizData, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->tenantId) {
            $res['tenant_id'] = $this->tenantId;
        }
        if (null !== $this->bizData) {
            $res['biz_data'] = [];
            if(null !== $this->bizData && is_array($this->bizData)){
                $n = 0;
                foreach($this->bizData as $item){
                    $res['biz_data'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return SaveOapiSmartworkHrmMasterParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['tenant_id'])){
            $model->tenantId = $map['tenant_id'];
        }
        if(isset($map['biz_data'])){
            if(!empty($map['biz_data'])){
                $model->bizData = [];
                $n = 0;
                foreach($map['biz_data'] as $item) {
                    $model->bizData[$n++] = null !== $item ? bizData::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description 业务方id，接入前系统分配
     * @var int
     */
    public $tenantId;

    /**
     * @description 业务数据列表
     * @var array
     */
    public $bizData;

}
