<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class ListOapiLiveGroupliveParams extends Model {
    protected $_name = [
        'cid' => 'cid',
        'openId' => 'open_id',
        'toTime' => 'to_time',
        'fromTime' => 'from_time',
    ];
    public function validate() {
        Model::validateRequired('cid', $this->cid, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->cid) {
            $res['cid'] = $this->cid;
        }
        if (null !== $this->openId) {
            $res['open_id'] = $this->openId;
        }
        if (null !== $this->toTime) {
            $res['to_time'] = $this->toTime;
        }
        if (null !== $this->fromTime) {
            $res['from_time'] = $this->fromTime;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return ListOapiLiveGroupliveParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['cid'])){
            $model->cid = $map['cid'];
        }
        if(isset($map['open_id'])){
            $model->openId = $map['open_id'];
        }
        if(isset($map['to_time'])){
            $model->toTime = $map['to_time'];
        }
        if(isset($map['from_time'])){
            $model->fromTime = $map['from_time'];
        }
        return $model;
    }
    /**
     * @description 群id
     * @var int
     */
    public $cid;

    /**
     * @description 用户id
     * @var int
     */
    public $openId;

    /**
     * @description 开始时间ms
     * @var int
     */
    public $toTime;

    /**
     * @description 截止时间ms
     * @var int
     */
    public $fromTime;

}
