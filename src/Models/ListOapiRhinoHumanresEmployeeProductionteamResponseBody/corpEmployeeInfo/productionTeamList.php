<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListOapiRhinoHumanresEmployeeProductionteamResponseBody\corpEmployeeInfo;

use AlibabaCloud\Tea\Model;

class productionTeamList extends Model {
    protected $_name = [
        'capacityType' => 'capacity_type',
        'productionTeamName' => 'production_team_name',
        'modifier' => 'modifier',
        'deleted' => 'deleted',
        'empNum' => 'emp_num',
        'tenantId' => 'tenant_id',
        'bizId' => 'biz_id',
        'productionTeamCode' => 'production_team_code',
        'groupCode' => 'group_code',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->capacityType) {
            $res['capacity_type'] = $this->capacityType;
        }
        if (null !== $this->productionTeamName) {
            $res['production_team_name'] = $this->productionTeamName;
        }
        if (null !== $this->modifier) {
            $res['modifier'] = $this->modifier;
        }
        if (null !== $this->deleted) {
            $res['deleted'] = $this->deleted;
        }
        if (null !== $this->empNum) {
            $res['emp_num'] = $this->empNum;
        }
        if (null !== $this->tenantId) {
            $res['tenant_id'] = $this->tenantId;
        }
        if (null !== $this->bizId) {
            $res['biz_id'] = $this->bizId;
        }
        if (null !== $this->productionTeamCode) {
            $res['production_team_code'] = $this->productionTeamCode;
        }
        if (null !== $this->groupCode) {
            $res['group_code'] = $this->groupCode;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return productionTeamList
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['capacity_type'])){
            $model->capacityType = $map['capacity_type'];
        }
        if(isset($map['production_team_name'])){
            $model->productionTeamName = $map['production_team_name'];
        }
        if(isset($map['modifier'])){
            $model->modifier = $map['modifier'];
        }
        if(isset($map['deleted'])){
            $model->deleted = $map['deleted'];
        }
        if(isset($map['emp_num'])){
            $model->empNum = $map['emp_num'];
        }
        if(isset($map['tenant_id'])){
            $model->tenantId = $map['tenant_id'];
        }
        if(isset($map['biz_id'])){
            $model->bizId = $map['biz_id'];
        }
        if(isset($map['production_team_code'])){
            $model->productionTeamCode = $map['production_team_code'];
        }
        if(isset($map['group_code'])){
            $model->groupCode = $map['group_code'];
        }
        return $model;
    }
    /**
     * @description 产能类型
     * @var string
     */
    public $capacityType;

    /**
     * @description 生产组名称
     * @var string
     */
    public $productionTeamName;

    /**
     * @description modifier
     * @var string
     */
    public $modifier;

    /**
     * @description 是否删除
     * @var bool
     */
    public $deleted;

    /**
     * @description 员工数量
     * @var int
     */
    public $empNum;

    /**
     * @description 资产ID
     * @var string
     */
    public $tenantId;

    /**
     * @description 生产组业务ID
     * @var string
     */
    public $bizId;

    /**
     * @description 生产组code
     * @var string
     */
    public $productionTeamCode;

    /**
     * @description 分组code
     * @var string
     */
    public $groupCode;

}
