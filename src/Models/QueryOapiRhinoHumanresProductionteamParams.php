<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\QueryOapiRhinoHumanresProductionteamParams\queryProductionTeamParam;

class QueryOapiRhinoHumanresProductionteamParams extends Model {
    protected $_name = [
        'queryProductionTeamParam' => 'query_production_team_param',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->queryProductionTeamParam) {
            $res['query_production_team_param'] = null !== $this->queryProductionTeamParam ? $this->queryProductionTeamParam->toMap() : null;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return QueryOapiRhinoHumanresProductionteamParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['query_production_team_param'])){
            $model->queryProductionTeamParam = queryProductionTeamParam::fromMap($map['query_production_team_param']);
        }
        return $model;
    }
    /**
     * @description 查询生产组入参
     * @var queryProductionTeamParam
     */
    public $queryProductionTeamParam;

}
