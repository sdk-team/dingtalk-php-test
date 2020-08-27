<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\QueryOapiRobotMessageOrggrouptaskResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model {
    protected $_name = [
        'sendStatus' => 'send_status',
        'readStaffIds' => 'read_staff_ids',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->sendStatus) {
            $res['send_status'] = $this->sendStatus;
        }
        if (null !== $this->readStaffIds) {
            $res['read_staff_ids'] = $this->readStaffIds;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return result
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['send_status'])){
            $model->sendStatus = $map['send_status'];
        }
        if(isset($map['read_staff_ids'])){
            if(!empty($map['read_staff_ids'])){
                $model->readStaffIds = $map['read_staff_ids'];
            }
        }
        return $model;
    }
    /**
     * @description 发送结果码，只有SUCCESS为成功
     * @var string
     */
    public $sendStatus;

    /**
     * @description 已读员工的userids
     * @var array
     */
    public $readStaffIds;

}
