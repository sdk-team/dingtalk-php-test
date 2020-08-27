<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListOapiRhinoHumanresEmployeeProductionteamParams;

use AlibabaCloud\Tea\Model;

class queryEmployeeProductionTeamParam extends Model {
    protected $_name = [
        'uicIds' => 'uic_ids',
        'tenantId' => 'tenant_id',
        'userid' => 'userid',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->uicIds) {
            $res['uic_ids'] = $this->uicIds;
        }
        if (null !== $this->tenantId) {
            $res['tenant_id'] = $this->tenantId;
        }
        if (null !== $this->userid) {
            $res['userid'] = $this->userid;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return queryEmployeeProductionTeamParam
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['uic_ids'])){
            if(!empty($map['uic_ids'])){
                $model->uicIds = $map['uic_ids'];
            }
        }
        if(isset($map['tenant_id'])){
            $model->tenantId = $map['tenant_id'];
        }
        if(isset($map['userid'])){
            $model->userid = $map['userid'];
        }
        return $model;
    }
    /**
     * @description uicic 列表
     * @var array
     */
    public $uicIds;

    /**
     * @description 资产ID
     * @var string
     */
    public $tenantId;

    /**
     * @description userid
     * @var string
     */
    public $userid;

}
