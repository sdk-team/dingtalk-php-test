<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListOapiAttendanceGroupMemberResponseBody\result;

use AlibabaCloud\Tea\Model;

class result extends Model {
    protected $_name = [
        'atcFlag' => 'atc_flag',
        'type' => 'type',
        'memberId' => 'member_id',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->atcFlag) {
            $res['atc_flag'] = $this->atcFlag;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }
        if (null !== $this->memberId) {
            $res['member_id'] = $this->memberId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return result
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['atc_flag'])){
            $model->atcFlag = $map['atc_flag'];
        }
        if(isset($map['type'])){
            $model->type = $map['type'];
        }
        if(isset($map['member_id'])){
            $model->memberId = $map['member_id'];
        }
        return $model;
    }
    /**
     * @description 0表示需要考勤，1表示无需考勤人员
     * @var string
     */
    public $atcFlag;

    /**
     * @description 0表示员工，1表示部门
     * @var string
     */
    public $type;

    /**
     * @description 成员id，可以是userId或deptId
     * @var string
     */
    public $memberId;

}
