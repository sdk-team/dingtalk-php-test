<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetOapiRhinoHumanresCorpemployeeParams;

use AlibabaCloud\Tea\Model;

class queryCorpEmployeeParam extends Model {
    protected $_name = [
        'workNo' => 'work_no',
        'tenantId' => 'tenant_id',
        'userid' => 'userid',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->workNo) {
            $res['work_no'] = $this->workNo;
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
     * @return queryCorpEmployeeParam
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['work_no'])){
            $model->workNo = $map['work_no'];
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
     * @description 工号
     * @var string
     */
    public $workNo;

    /**
     * @description 资产ID
     * @var string
     */
    public $tenantId;

    /**
     * @description 员工ID
     * @var string
     */
    public $userid;

}
