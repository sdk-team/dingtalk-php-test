<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class GetcolumnvalOapiAttendanceParams extends Model {
    protected $_name = [
        'userid' => 'userid',
        'columnIdList' => 'column_id_list',
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
        if (null !== $this->columnIdList) {
            $res['column_id_list'] = $this->columnIdList;
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
     * @return GetcolumnvalOapiAttendanceParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['userid'])){
            $model->userid = $map['userid'];
        }
        if(isset($map['column_id_list'])){
            if(!empty($map['column_id_list'])){
                $model->columnIdList = $map['column_id_list'];
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
     * @description 列id，多值用英文逗号分隔
     * @var array
     */
    public $columnIdList;

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
