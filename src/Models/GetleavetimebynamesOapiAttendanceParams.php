<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class GetleavetimebynamesOapiAttendanceParams extends Model {
    protected $_name = [
        'userid' => 'userid',
        'leaveNames' => 'leave_names',
        'fromDate' => 'from_date',
        'toDate' => 'to_date',
    ];
    public function validate() {
        Model::validatePattern('fromDate', $this->fromDate, '\\d{4}[-]\\d{1,2}[-]\\d{1,2}[T]\\d{2}:\\d{2}:\\d{2}[Z]');
        Model::validatePattern('toDate', $this->toDate, '\\d{4}[-]\\d{1,2}[-]\\d{1,2}[T]\\d{2}:\\d{2}:\\d{2}[Z]');
    }
    public function toMap() {
        $res = [];
        if (null !== $this->userid) {
            $res['userid'] = $this->userid;
        }
        if (null !== $this->leaveNames) {
            $res['leave_names'] = $this->leaveNames;
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
     * @return GetleavetimebynamesOapiAttendanceParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['userid'])){
            $model->userid = $map['userid'];
        }
        if(isset($map['leave_names'])){
            if(!empty($map['leave_names'])){
                $model->leaveNames = $map['leave_names'];
            }
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
     * @description 用户的userId
     * @var string
     */
    public $userid;

    /**
     * @description 假期名称
     * @var array
     */
    public $leaveNames;

    /**
     * @description 开始时间
     * @var string
     */
    public $fromDate;

    /**
     * @description 结束时间
     * @var string
     */
    public $toDate;

}
