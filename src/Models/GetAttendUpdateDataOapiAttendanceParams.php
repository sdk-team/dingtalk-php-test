<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class GetAttendUpdateDataOapiAttendanceParams extends Model {
    protected $_name = [
        'userid' => 'userid',
        'workDate' => 'work_date',
    ];
    public function validate() {
        Model::validateRequired('userid', $this->userid, true);
        Model::validateRequired('workDate', $this->workDate, true);
        Model::validatePattern('workDate', $this->workDate, '\\d{4}[-]\\d{1,2}[-]\\d{1,2}[T]\\d{2}:\\d{2}:\\d{2}[Z]');
    }
    public function toMap() {
        $res = [];
        if (null !== $this->userid) {
            $res['userid'] = $this->userid;
        }
        if (null !== $this->workDate) {
            $res['work_date'] = $this->workDate;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return GetAttendUpdateDataOapiAttendanceParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['userid'])){
            $model->userid = $map['userid'];
        }
        if(isset($map['work_date'])){
            $model->workDate = $map['work_date'];
        }
        return $model;
    }
    /**
     * @description 用户id
     * @var string
     */
    public $userid;

    /**
     * @description 工作日
     * @var string
     */
    public $workDate;

}
