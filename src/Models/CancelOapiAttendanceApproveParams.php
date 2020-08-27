<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class CancelOapiAttendanceApproveParams extends Model {
    protected $_name = [
        'userid' => 'userid',
        'approveId' => 'approve_id',
    ];
    public function validate() {
        Model::validateMaxLength('approveId', $this->approveId, 100);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->userid) {
            $res['userid'] = $this->userid;
        }
        if (null !== $this->approveId) {
            $res['approve_id'] = $this->approveId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return CancelOapiAttendanceApproveParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['userid'])){
            $model->userid = $map['userid'];
        }
        if(isset($map['approve_id'])){
            $model->approveId = $map['approve_id'];
        }
        return $model;
    }
    /**
     * @description 员工的user_id
     * @var string
     */
    public $userid;

    /**
     * @description 审批单全局唯一id，最大长度100个字符
     * @var string
     */
    public $approveId;

}
