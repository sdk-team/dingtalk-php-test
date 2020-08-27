<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class GetOapiBlackboardParams extends Model {
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
     * @return GetOapiBlackboardParams
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
     * @description 公告id
     * @var string
     */
    public $blackboardId;

    /**
     * @description 操作人userId
     * @var string
     */
    public $operationUserid;

}
