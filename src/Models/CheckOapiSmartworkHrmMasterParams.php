<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class CheckOapiSmartworkHrmMasterParams extends Model {
    protected $_name = [
        'tenantid' => 'tenantid',
        'bizUk' => 'biz_uk',
    ];
    public function validate() {
        Model::validateRequired('tenantid', $this->tenantid, true);
        Model::validateRequired('bizUk', $this->bizUk, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->tenantid) {
            $res['tenantid'] = $this->tenantid;
        }
        if (null !== $this->bizUk) {
            $res['biz_uk'] = $this->bizUk;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return CheckOapiSmartworkHrmMasterParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['tenantid'])){
            $model->tenantid = $map['tenantid'];
        }
        if(isset($map['biz_uk'])){
            if(!empty($map['biz_uk'])){
                $model->bizUk = $map['biz_uk'];
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
     * @description 业务UK唯一确定一条流水
     * @var array
     */
    public $bizUk;

}
