<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\QueryOapiRhinoHumanresProductionteamParams;

use AlibabaCloud\Tea\Model;

class queryProductionTeamParam extends Model {
    protected $_name = [
        'workshopSectionCode' => 'workshop_section_code',
        'tenantId' => 'tenant_id',
        'startTime' => 'start_time',
        'endTime' => 'end_time',
        'userid' => 'userid',
    ];
    public function validate() {
        Model::validatePattern('startTime', $this->startTime, '\\d{4}[-]\\d{1,2}[-]\\d{1,2}[T]\\d{2}:\\d{2}:\\d{2}[Z]');
        Model::validatePattern('endTime', $this->endTime, '\\d{4}[-]\\d{1,2}[-]\\d{1,2}[T]\\d{2}:\\d{2}:\\d{2}[Z]');
    }
    public function toMap() {
        $res = [];
        if (null !== $this->workshopSectionCode) {
            $res['workshop_section_code'] = $this->workshopSectionCode;
        }
        if (null !== $this->tenantId) {
            $res['tenant_id'] = $this->tenantId;
        }
        if (null !== $this->startTime) {
            $res['start_time'] = $this->startTime;
        }
        if (null !== $this->endTime) {
            $res['end_time'] = $this->endTime;
        }
        if (null !== $this->userid) {
            $res['userid'] = $this->userid;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return queryProductionTeamParam
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['workshop_section_code'])){
            $model->workshopSectionCode = $map['workshop_section_code'];
        }
        if(isset($map['tenant_id'])){
            $model->tenantId = $map['tenant_id'];
        }
        if(isset($map['start_time'])){
            $model->startTime = $map['start_time'];
        }
        if(isset($map['end_time'])){
            $model->endTime = $map['end_time'];
        }
        if(isset($map['userid'])){
            $model->userid = $map['userid'];
        }
        return $model;
    }
    /**
     * @description 工段CODE
     * @var string
     */
    public $workshopSectionCode;

    /**
     * @description 资产ID
     * @var string
     */
    public $tenantId;

    /**
     * @description 开始时间
     * @var string
     */
    public $startTime;

    /**
     * @description 结束时间
     * @var string
     */
    public $endTime;

    /**
     * @description 预业务参数[这里先预留],这里是用户ID,比如钉钉用户ID
     * @var string
     */
    public $userid;

}
