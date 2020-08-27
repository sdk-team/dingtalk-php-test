<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListOapiRhinoHumanresEmployeeProductionteamParams\queryEmployeeProductionTeamParam;

class ListOapiRhinoHumanresEmployeeProductionteamParams extends Model {
    protected $_name = [
        'queryEmployeeProductionTeamParam' => 'query_employee_production_team_param',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->queryEmployeeProductionTeamParam) {
            $res['query_employee_production_team_param'] = null !== $this->queryEmployeeProductionTeamParam ? $this->queryEmployeeProductionTeamParam->toMap() : null;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return ListOapiRhinoHumanresEmployeeProductionteamParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['query_employee_production_team_param'])){
            $model->queryEmployeeProductionTeamParam = queryEmployeeProductionTeamParam::fromMap($map['query_employee_production_team_param']);
        }
        return $model;
    }
    /**
     * @description 查询参数
     * @var queryEmployeeProductionTeamParam
     */
    public $queryEmployeeProductionTeamParam;

}
