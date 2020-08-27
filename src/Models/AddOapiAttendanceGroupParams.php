<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\AddOapiAttendanceGroupParams\topGroup;

class AddOapiAttendanceGroupParams extends Model {
    protected $_name = [
        'opUserId' => 'op_user_id',
        'topGroup' => 'top_group',
    ];
    public function validate() {
        Model::validateRequired('opUserId', $this->opUserId, true);
        Model::validateRequired('topGroup', $this->topGroup, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->opUserId) {
            $res['op_user_id'] = $this->opUserId;
        }
        if (null !== $this->topGroup) {
            $res['top_group'] = null !== $this->topGroup ? $this->topGroup->toMap() : null;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return AddOapiAttendanceGroupParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['op_user_id'])){
            $model->opUserId = $map['op_user_id'];
        }
        if(isset($map['top_group'])){
            $model->topGroup = topGroup::fromMap($map['top_group']);
        }
        return $model;
    }
    /**
     * @description 操作人id
     * @var string
     */
    public $opUserId;

    /**
     * @description 考勤组信息
     * @var topGroup
     */
    public $topGroup;

}
