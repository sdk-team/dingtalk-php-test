<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class GetleaveapprovedurationOapiAttendanceParams extends Model {
    protected $_name = [
        'userid' => 'userid',
        'fromDate' => 'from_date',
        'toDate' => 'to_date',
    ];
    public function validate() {
        Model::validateRequired('userid', $this->userid, true);
        Model::validateRequired('fromDate', $this->fromDate, true);
        Model::validateRequired('toDate', $this->toDate, true);
        Model::validatePattern('fromDate', $this->fromDate, '\\d{4}[-]\\d{1,2}[-]\\d{1,2}[T]\\d{2}:\\d{2}:\\d{2}[Z]');
        Model::validatePattern('toDate', $this->toDate, '\\d{4}[-]\\d{1,2}[-]\\d{1,2}[T]\\d{2}:\\d{2}:\\d{2}[Z]');
    }
    public function toMap() {
        $res = [];
        if (null !== $this->userid) {
            $res['userid'] = $this->userid;
        }
        if (null !== $this->fromDate) {
            $res['from_date'] = $this->fromDate;
        }
        if (null !== $this->toDate) {
            $res['to_date'] = $this->toDate;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return GetleaveapprovedurationOapiAttendanceParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['userid'])){
            $model->userid = $map['userid'];
        }
        if(isset($map['from_date'])){
            $model->fromDate = $map['from_date'];
        }
        if(isset($map['to_date'])){
            $model->toDate = $map['to_date'];
        }
        return $model;
    }
    /**
     * @description 员工在企业内的UserID，企业用来唯一标识用户的字段。
     * @var string
     */
    public $userid;

    /**
     * @description 请假开始时间
     * @var string
     */
    public $fromDate;

    /**
     * @description 请假结束时间
     * @var string
     */
    public $toDate;

}
