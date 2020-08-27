<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class SearchOapiAttendanceGroupParams extends Model {
    protected $_name = [
        'opUserId' => 'op_user_id',
        'groupName' => 'group_name',
    ];
    public function validate() {
        Model::validateRequired('opUserId', $this->opUserId, true);
        Model::validateRequired('groupName', $this->groupName, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->opUserId) {
            $res['op_user_id'] = $this->opUserId;
        }
        if (null !== $this->groupName) {
            $res['group_name'] = $this->groupName;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return SearchOapiAttendanceGroupParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['op_user_id'])){
            $model->opUserId = $map['op_user_id'];
        }
        if(isset($map['group_name'])){
            $model->groupName = $map['group_name'];
        }
        return $model;
    }
    /**
     * @description 操作者userId
     * @var string
     */
    public $opUserId;

    /**
     * @description 考勤组名称
     * @var string
     */
    public $groupName;

}
