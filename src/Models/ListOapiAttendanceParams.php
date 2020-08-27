<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class ListOapiAttendanceParams extends Model {
    protected $_name = [
        'workDateFrom' => 'workDateFrom',
        'workDateTo' => 'workDateTo',
        'userIdList' => 'userIdList',
        'offset' => 'offset',
        'limit' => 'limit',
        'isI18n' => 'isI18n',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->workDateFrom) {
            $res['workDateFrom'] = $this->workDateFrom;
        }
        if (null !== $this->workDateTo) {
            $res['workDateTo'] = $this->workDateTo;
        }
        if (null !== $this->userIdList) {
            $res['userIdList'] = $this->userIdList;
        }
        if (null !== $this->offset) {
            $res['offset'] = $this->offset;
        }
        if (null !== $this->limit) {
            $res['limit'] = $this->limit;
        }
        if (null !== $this->isI18n) {
            $res['isI18n'] = $this->isI18n;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return ListOapiAttendanceParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['workDateFrom'])){
            $model->workDateFrom = $map['workDateFrom'];
        }
        if(isset($map['workDateTo'])){
            $model->workDateTo = $map['workDateTo'];
        }
        if(isset($map['userIdList'])){
            if(!empty($map['userIdList'])){
                $model->userIdList = $map['userIdList'];
            }
        }
        if(isset($map['offset'])){
            $model->offset = $map['offset'];
        }
        if(isset($map['limit'])){
            $model->limit = $map['limit'];
        }
        if(isset($map['isI18n'])){
            $model->isI18n = $map['isI18n'];
        }
        return $model;
    }
    /**
     * @description 查询考勤打卡记录的起始工作日
     * @var string
     */
    public $workDateFrom;

    /**
     * @description 查询考勤打卡记录的结束工作日
     * @var string
     */
    public $workDateTo;

    /**
     * @description 员工在企业内的UserID列表，企业用来唯一标识用户的字段
     * @var array
     */
    public $userIdList;

    /**
     * @description 表示获取考勤数据的起始点，第一次传0，如果还有多余数据，下次获取传的offset值为之前的offset+limit
     * @var int
     */
    public $offset;

    /**
     * @description 表示获取考勤数据的条数，最大不能超过50条
     * @var int
     */
    public $limit;

    /**
     * @description 是否国际化
     * @var bool
     */
    public $isI18n;

}
