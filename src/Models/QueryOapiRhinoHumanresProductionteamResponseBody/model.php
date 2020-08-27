<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\QueryOapiRhinoHumanresProductionteamResponseBody;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\QueryOapiRhinoHumanresProductionteamResponseBody\model\empList;
use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\QueryOapiRhinoHumanresProductionteamResponseBody\model\weekdayConfigList;

class model extends Model {
    protected $_name = [
        'workshopSectionCodeList' => 'workshop_section_code_list',
        'empList' => 'empList',
        'empNum' => 'emp_num',
        'weekdayConfigList' => 'weekday_config_list',
        'capacityType' => 'capacity_type',
        'productionTeamName' => 'production_team_name',
        'tenantId' => 'tenant_id',
        'bizId' => 'biz_id',
        'id' => 'id',
        'productionTeamCode' => 'production_team_code',
        'groupCode' => 'group_code',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->workshopSectionCodeList) {
            $res['workshop_section_code_list'] = $this->workshopSectionCodeList;
        }
        if (null !== $this->empList) {
            $res['empList'] = [];
            if(null !== $this->empList && is_array($this->empList)){
                $n = 0;
                foreach($this->empList as $item){
                    $res['empList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->empNum) {
            $res['emp_num'] = $this->empNum;
        }
        if (null !== $this->weekdayConfigList) {
            $res['weekday_config_list'] = [];
            if(null !== $this->weekdayConfigList && is_array($this->weekdayConfigList)){
                $n = 0;
                foreach($this->weekdayConfigList as $item){
                    $res['weekday_config_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->capacityType) {
            $res['capacity_type'] = $this->capacityType;
        }
        if (null !== $this->productionTeamName) {
            $res['production_team_name'] = $this->productionTeamName;
        }
        if (null !== $this->tenantId) {
            $res['tenant_id'] = $this->tenantId;
        }
        if (null !== $this->bizId) {
            $res['biz_id'] = $this->bizId;
        }
        if (null !== $this->id) {
            $res['id'] = $this->id;
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
     * @return model
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['workshop_section_code_list'])){
            if(!empty($map['workshop_section_code_list'])){
                $model->workshopSectionCodeList = $map['workshop_section_code_list'];
            }
        }
        if(isset($map['empList'])){
            if(!empty($map['empList'])){
                $model->empList = [];
                $n = 0;
                foreach($map['empList'] as $item) {
                    $model->empList[$n++] = null !== $item ? empList::fromMap($item) : $item;
                }
            }
        }
        if(isset($map['emp_num'])){
            $model->empNum = $map['emp_num'];
        }
        if(isset($map['weekday_config_list'])){
            if(!empty($map['weekday_config_list'])){
                $model->weekdayConfigList = [];
                $n = 0;
                foreach($map['weekday_config_list'] as $item) {
                    $model->weekdayConfigList[$n++] = null !== $item ? weekdayConfigList::fromMap($item) : $item;
                }
            }
        }
        if(isset($map['capacity_type'])){
            $model->capacityType = $map['capacity_type'];
        }
        if(isset($map['production_team_name'])){
            $model->productionTeamName = $map['production_team_name'];
        }
        if(isset($map['tenant_id'])){
            $model->tenantId = $map['tenant_id'];
        }
        if(isset($map['biz_id'])){
            $model->bizId = $map['biz_id'];
        }
        if(isset($map['id'])){
            $model->id = $map['id'];
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
     * @description 工段列表
     * @var array
     */
    public $workshopSectionCodeList;

    /**
     * @description 员工列表
     * @var array
     */
    public $empList;

    /**
     * @description 拥有的员工数量
     * @var int
     */
    public $empNum;

    /**
     * @description 工作日配置
     * @var array
     */
    public $weekdayConfigList;

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
     * @description 资产ID
     * @var string
     */
    public $tenantId;

    /**
     * @description 业务ID
     * @var string
     */
    public $bizId;

    /**
     * @description 系统自动生成
     * @var int
     */
    public $id;

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
