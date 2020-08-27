<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class ListOapiBlackboardCategoryParams extends Model {
    protected $_name = [
        'operationUserid' => 'operation_userid',
    ];
    public function validate() {
        Model::validateRequired('operationUserid', $this->operationUserid, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->operationUserid) {
            $res['operation_userid'] = $this->operationUserid;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return ListOapiBlackboardCategoryParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['operation_userid'])){
            $model->operationUserid = $map['operation_userid'];
        }
        return $model;
    }
    /**
     * @description 操作人userId(必须是公告管理员)
     * @var string
     */
    public $operationUserid;

}
