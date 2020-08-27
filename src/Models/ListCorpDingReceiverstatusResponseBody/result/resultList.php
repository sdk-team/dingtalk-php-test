<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListCorpDingReceiverstatusResponseBody\result;

use AlibabaCloud\Tea\Model;

class resultList extends Model {
    protected $_name = [
        'confirmedStatus' => 'confirmed_status',
        'dingId' => 'ding_id',
        'confirmedTime' => 'confirmed_time',
        'userid' => 'userid',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->confirmedStatus) {
            $res['confirmed_status'] = $this->confirmedStatus;
        }
        if (null !== $this->dingId) {
            $res['ding_id'] = $this->dingId;
        }
        if (null !== $this->confirmedTime) {
            $res['confirmed_time'] = $this->confirmedTime;
        }
        if (null !== $this->userid) {
            $res['userid'] = $this->userid;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return resultList
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['confirmed_status'])){
            $model->confirmedStatus = $map['confirmed_status'];
        }
        if(isset($map['ding_id'])){
            $model->dingId = $map['ding_id'];
        }
        if(isset($map['confirmed_time'])){
            $model->confirmedTime = $map['confirmed_time'];
        }
        if(isset($map['userid'])){
            $model->userid = $map['userid'];
        }
        return $model;
    }
    /**
     * @description 确认状态。0-未确认；1-已确认；
     * @var int
     */
    public $confirmedStatus;

    /**
     * @description dingId
     * @var string
     */
    public $dingId;

    /**
     * @description 确认时间
     * @var int
     */
    public $confirmedTime;

    /**
     * @description 接收者id
     * @var string
     */
    public $userid;

}
