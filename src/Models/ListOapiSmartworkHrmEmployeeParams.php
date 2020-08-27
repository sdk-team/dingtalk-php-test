<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class ListOapiSmartworkHrmEmployeeParams extends Model {
    protected $_name = [
        'useridList' => 'userid_list',
        'fieldFilterList' => 'field_filter_list',
        'agentid' => 'agentid',
    ];
    public function validate() {
        Model::validateRequired('useridList', $this->useridList, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->useridList) {
            $res['userid_list'] = $this->useridList;
        }
        if (null !== $this->fieldFilterList) {
            $res['field_filter_list'] = $this->fieldFilterList;
        }
        if (null !== $this->agentid) {
            $res['agentid'] = $this->agentid;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return ListOapiSmartworkHrmEmployeeParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['userid_list'])){
            if(!empty($map['userid_list'])){
                $model->useridList = $map['userid_list'];
            }
        }
        if(isset($map['field_filter_list'])){
            if(!empty($map['field_filter_list'])){
                $model->fieldFilterList = $map['field_filter_list'];
            }
        }
        if(isset($map['agentid'])){
            $model->agentid = $map['agentid'];
        }
        return $model;
    }
    /**
     * @description 员工id列表
     * @var array
     */
    public $useridList;

    /**
     * @description 需要获取的花名册字段信息
     * @var array
     */
    public $fieldFilterList;

    /**
     * @description 微应用在企业的agentId
     * @var int
     */
    public $agentid;

}
