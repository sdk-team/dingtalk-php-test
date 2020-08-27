<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListOapiRhinoMosSpaceWorkerCheckInParams;

use AlibabaCloud\Tea\Model;

class request extends Model {
    protected $_name = [
        'prodWorkstationCode' => 'prod_workstation_code',
        'tenantId' => 'tenant_id',
        'userid' => 'userid',
    ];
    public function validate() {
        Model::validateRequired('prodWorkstationCode', $this->prodWorkstationCode, true);
        Model::validateRequired('tenantId', $this->tenantId, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->prodWorkstationCode) {
            $res['prod_workstation_code'] = $this->prodWorkstationCode;
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
        if(isset($map['prod_workstation_code'])){
            $model->prodWorkstationCode = $map['prod_workstation_code'];
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
     * @description 站位code
     * @var string
     */
    public $prodWorkstationCode;

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
