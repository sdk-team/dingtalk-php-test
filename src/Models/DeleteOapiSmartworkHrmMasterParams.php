<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\DeleteOapiSmartworkHrmMasterParams\bizData;

class DeleteOapiSmartworkHrmMasterParams extends Model {
    protected $_name = [
        'tenantid' => 'tenantid',
        'bizData' => 'biz_data',
    ];
    public function validate() {
        Model::validateRequired('tenantid', $this->tenantid, true);
        Model::validateRequired('bizData', $this->bizData, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->tenantid) {
            $res['tenantid'] = $this->tenantid;
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
     * @return DeleteOapiSmartworkHrmMasterParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['tenantid'])){
            $model->tenantid = $map['tenantid'];
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
     * @description 业务方id(由系统统一分配)
     * @var int
     */
    public $tenantid;

    /**
     * @description 业务数据
     * @var array
     */
    public $bizData;

}
