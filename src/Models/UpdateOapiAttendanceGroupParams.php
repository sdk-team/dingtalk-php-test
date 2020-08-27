<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\UpdateOapiAttendanceGroupParams\group;

class UpdateOapiAttendanceGroupParams extends Model {
    protected $_name = [
        'group' => 'group',
        'opUserid' => 'op_userid',
    ];
    public function validate() {
        Model::validateRequired('group', $this->group, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->group) {
            $res['group'] = null !== $this->group ? $this->group->toMap() : null;
        }
        if (null !== $this->opUserid) {
            $res['op_userid'] = $this->opUserid;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return UpdateOapiAttendanceGroupParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['group'])){
            $model->group = group::fromMap($map['group']);
        }
        if(isset($map['op_userid'])){
            $model->opUserid = $map['op_userid'];
        }
        return $model;
    }
    /**
     * @description 考勤组
     * @var group
     */
    public $group;

    /**
     * @description 操作人userId
     * @var string
     */
    public $opUserid;

}
