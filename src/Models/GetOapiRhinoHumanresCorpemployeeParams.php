<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetOapiRhinoHumanresCorpemployeeParams\queryCorpEmployeeParam;

class GetOapiRhinoHumanresCorpemployeeParams extends Model {
    protected $_name = [
        'queryCorpEmployeeParam' => 'query_corp_employee_param',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->queryCorpEmployeeParam) {
            $res['query_corp_employee_param'] = null !== $this->queryCorpEmployeeParam ? $this->queryCorpEmployeeParam->toMap() : null;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return GetOapiRhinoHumanresCorpemployeeParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['query_corp_employee_param'])){
            $model->queryCorpEmployeeParam = queryCorpEmployeeParam::fromMap($map['query_corp_employee_param']);
        }
        return $model;
    }
    /**
     * @description 查询员工入参
     * @var queryCorpEmployeeParam
     */
    public $queryCorpEmployeeParam;

}
