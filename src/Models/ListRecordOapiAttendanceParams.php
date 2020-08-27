<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class ListRecordOapiAttendanceParams extends Model {
    protected $_name = [
        'userIds' => 'userIds',
        'checkDateFrom' => 'checkDateFrom',
        'checkDateTo' => 'checkDateTo',
        'isI18n' => 'isI18n',
    ];
    public function validate() {
        Model::validateRequired('userIds', $this->userIds, true);
        Model::validateRequired('checkDateFrom', $this->checkDateFrom, true);
        Model::validateRequired('checkDateTo', $this->checkDateTo, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->userIds) {
            $res['userIds'] = $this->userIds;
        }
        if (null !== $this->checkDateFrom) {
            $res['checkDateFrom'] = $this->checkDateFrom;
        }
        if (null !== $this->checkDateTo) {
            $res['checkDateTo'] = $this->checkDateTo;
        }
        if (null !== $this->isI18n) {
            $res['isI18n'] = $this->isI18n;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return ListRecordOapiAttendanceParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['userIds'])){
            if(!empty($map['userIds'])){
                $model->userIds = $map['userIds'];
            }
        }
        if(isset($map['checkDateFrom'])){
            $model->checkDateFrom = $map['checkDateFrom'];
        }
        if(isset($map['checkDateTo'])){
            $model->checkDateTo = $map['checkDateTo'];
        }
        if(isset($map['isI18n'])){
            $model->isI18n = $map['isI18n'];
        }
        return $model;
    }
    /**
     * @description 企业内的员工id列表，最多不能超过50个
     * @var array
     */
    public $userIds;

    /**
     * @description 查询考勤打卡记录的结束工作日。注意，起始与结束工作日最多相隔7天
     * @var string
     */
    public $checkDateFrom;

    /**
     * @description 查询考勤打卡记录的结束工作日。注意，起始与结束工作日最多相隔7天
     * @var string
     */
    public $checkDateTo;

    /**
     * @description 是否国际化
     * @var bool
     */
    public $isI18n;

}
