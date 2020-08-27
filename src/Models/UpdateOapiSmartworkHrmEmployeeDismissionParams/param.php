<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\UpdateOapiSmartworkHrmEmployeeDismissionParams;

use AlibabaCloud\Tea\Model;

class param extends Model {
    protected $_name = [
        'userid' => 'userid',
        'dismissionMemo' => 'dismission_memo',
        'lastWorkDate' => 'last_work_date',
        'partner' => 'partner',
        'terminationReasonVoluntary' => 'terminationReasonVoluntary',
        'terminationReasonPassive' => 'terminationReasonPassive',
    ];
    public function validate() {
        Model::validateRequired('userid', $this->userid, true);
        Model::validateRequired('lastWorkDate', $this->lastWorkDate, true);
        Model::validatePattern('lastWorkDate', $this->lastWorkDate, '\\d{4}[-]\\d{1,2}[-]\\d{1,2}[T]\\d{2}:\\d{2}:\\d{2}[Z]');
    }
    public function toMap() {
        $res = [];
        if (null !== $this->userid) {
            $res['userid'] = $this->userid;
        }
        if (null !== $this->dismissionMemo) {
            $res['dismission_memo'] = $this->dismissionMemo;
        }
        if (null !== $this->lastWorkDate) {
            $res['last_work_date'] = $this->lastWorkDate;
        }
        if (null !== $this->partner) {
            $res['partner'] = $this->partner;
        }
        if (null !== $this->terminationReasonVoluntary) {
            $res['terminationReasonVoluntary'] = $this->terminationReasonVoluntary;
        }
        if (null !== $this->terminationReasonPassive) {
            $res['terminationReasonPassive'] = $this->terminationReasonPassive;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return param
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['userid'])){
            $model->userid = $map['userid'];
        }
        if(isset($map['dismission_memo'])){
            $model->dismissionMemo = $map['dismission_memo'];
        }
        if(isset($map['last_work_date'])){
            $model->lastWorkDate = $map['last_work_date'];
        }
        if(isset($map['partner'])){
            $model->partner = $map['partner'];
        }
        if(isset($map['terminationReasonVoluntary'])){
            if(!empty($map['terminationReasonVoluntary'])){
                $model->terminationReasonVoluntary = $map['terminationReasonVoluntary'];
            }
        }
        if(isset($map['terminationReasonPassive'])){
            if(!empty($map['terminationReasonPassive'])){
                $model->terminationReasonPassive = $map['terminationReasonPassive'];
            }
        }
        return $model;
    }
    /**
     * @description 员工userId
     * @var string
     */
    public $userid;

    /**
     * @description 离职备注
     * @var string
     */
    public $dismissionMemo;

    /**
     * @description 最后工作日期
     * @var string
     */
    public $lastWorkDate;

    /**
     * @description 是否计入离职不统计
     * @var bool
     */
    public $partner;

    /**
     * @description 被动原因
     * @var array
     */
    public $terminationReasonVoluntary;

    /**
     * @description 主动原因
     * @var array
     */
    public $terminationReasonPassive;

}
