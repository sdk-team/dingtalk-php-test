<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class AddOapiAttendanceGroupUsersParams extends Model {
    protected $_name = [
        'opUserid' => 'op_userid',
        'groupKey' => 'group_key',
        'userIdList' => 'user_id_list',
    ];
    public function validate() {
        Model::validateRequired('groupKey', $this->groupKey, true);
        Model::validateRequired('userIdList', $this->userIdList, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->opUserid) {
            $res['op_userid'] = $this->opUserid;
        }
        if (null !== $this->groupKey) {
            $res['group_key'] = $this->groupKey;
        }
        if (null !== $this->userIdList) {
            $res['user_id_list'] = $this->userIdList;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return AddOapiAttendanceGroupUsersParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['op_userid'])){
            $model->opUserid = $map['op_userid'];
        }
        if(isset($map['group_key'])){
            $model->groupKey = $map['group_key'];
        }
        if(isset($map['user_id_list'])){
            if(!empty($map['user_id_list'])){
                $model->userIdList = $map['user_id_list'];
            }
        }
        return $model;
    }
    /**
     * @description 操作人userId
     * @var string
     */
    public $opUserid;

    /**
     * @description 考勤组id
     * @var string
     */
    public $groupKey;

    /**
     * @description 用户列表
     * @var array
     */
    public $userIdList;

}
