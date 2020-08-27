<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class DeleteOapiBlackboardParams extends Model {
    protected $_name = [
        'blackboardId' => 'blackboard_id',
        'operationUserid' => 'operation_userid',
    ];
    public function validate() {
        Model::validateRequired('blackboardId', $this->blackboardId, true);
        Model::validateRequired('operationUserid', $this->operationUserid, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->blackboardId) {
            $res['blackboard_id'] = $this->blackboardId;
        }
        if (null !== $this->operationUserid) {
            $res['operation_userid'] = $this->operationUserid;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return DeleteOapiBlackboardParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['blackboard_id'])){
            $model->blackboardId = $map['blackboard_id'];
        }
        if(isset($map['operation_userid'])){
            $model->operationUserid = $map['operation_userid'];
        }
        return $model;
    }
    /**
     * @description 公告id,可以通过https://oapi.dingtalk.com/blackboard/listids获取有效值
     * @var string
     */
    public $blackboardId;

    /**
     * @description 操作人userId(必须是公告管理员)
     * @var string
     */
    public $operationUserid;

}
