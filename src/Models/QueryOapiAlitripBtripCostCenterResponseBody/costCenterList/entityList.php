<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\QueryOapiAlitripBtripCostCenterResponseBody\costCenterList;

use AlibabaCloud\Tea\Model;

class entityList extends Model {
    protected $_name = [
        'entityType' => 'entity_type',
        'entityId' => 'entity_id',
        'corpid' => 'corpid',
        'name' => 'name',
        'userNum' => 'user_num',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->entityType) {
            $res['entity_type'] = $this->entityType;
        }
        if (null !== $this->entityId) {
            $res['entity_id'] = $this->entityId;
        }
        if (null !== $this->corpid) {
            $res['corpid'] = $this->corpid;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->userNum) {
            $res['user_num'] = $this->userNum;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return entityList
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['entity_type'])){
            $model->entityType = $map['entity_type'];
        }
        if(isset($map['entity_id'])){
            $model->entityId = $map['entity_id'];
        }
        if(isset($map['corpid'])){
            $model->corpid = $map['corpid'];
        }
        if(isset($map['name'])){
            $model->name = $map['name'];
        }
        if(isset($map['user_num'])){
            $model->userNum = $map['user_num'];
        }
        return $model;
    }
    /**
     * @description 人员类型：1用户，2部门，3角色
     * @var string
     */
    public $entityType;

    /**
     * @description 用户/部门/角色id
     * @var string
     */
    public $entityId;

    /**
     * @description 企业id
     * @var string
     */
    public $corpid;

    /**
     * @description 用户/部门/角色名称
     * @var string
     */
    public $name;

    /**
     * @description 角色/部门下面员工人数
     * @var int
     */
    public $userNum;

}
