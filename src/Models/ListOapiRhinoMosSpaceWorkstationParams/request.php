<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListOapiRhinoMosSpaceWorkstationParams;

use AlibabaCloud\Tea\Model;

class request extends Model {
    protected $_name = [
        'prodWorkstationCodeList' => 'prod_workstation_code_list',
        'tenantId' => 'tenant_id',
        'userid' => 'userid',
    ];
    public function validate() {
        Model::validateRequired('tenantId', $this->tenantId, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->prodWorkstationCodeList) {
            $res['prod_workstation_code_list'] = $this->prodWorkstationCodeList;
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
     * @return request
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['prod_workstation_code_list'])){
            if(!empty($map['prod_workstation_code_list'])){
                $model->prodWorkstationCodeList = $map['prod_workstation_code_list'];
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
     * @description 站位code列表
     * @var array
     */
    public $prodWorkstationCodeList;

    /**
     * @description 租户ID
     * @var string
     */
    public $tenantId;

    /**
     * @description userid
     * @var string
     */
    public $userid;

}
