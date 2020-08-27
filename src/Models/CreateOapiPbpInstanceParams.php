<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class CreateOapiPbpInstanceParams extends Model {
    protected $_name = [
        'startTime' => 'start_time',
        'outerId' => 'outer_id',
        'bizId' => 'biz_id',
        'endTime' => 'end_time',
        'active' => 'active',
    ];
    public function validate() {
        Model::validateRequired('outerId', $this->outerId, true);
        Model::validateRequired('bizId', $this->bizId, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->startTime) {
            $res['start_time'] = $this->startTime;
        }
        if (null !== $this->outerId) {
            $res['outer_id'] = $this->outerId;
        }
        if (null !== $this->bizId) {
            $res['biz_id'] = $this->bizId;
        }
        if (null !== $this->endTime) {
            $res['end_time'] = $this->endTime;
        }
        if (null !== $this->active) {
            $res['active'] = $this->active;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return CreateOapiPbpInstanceParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['start_time'])){
            $model->startTime = $map['start_time'];
        }
        if(isset($map['outer_id'])){
            $model->outerId = $map['outer_id'];
        }
        if(isset($map['biz_id'])){
            $model->bizId = $map['biz_id'];
        }
        if(isset($map['end_time'])){
            $model->endTime = $map['end_time'];
        }
        if(isset($map['active'])){
            $model->active = $map['active'];
        }
        return $model;
    }
    /**
     * @description 实例开始时间，时间戳
     * @var int
     */
    public $startTime;

    /**
     * @description 外部id，唯一对应一次业务实例，如一次会议的meeting_id
     * @var string
     */
    public $outerId;

    /**
     * @description 业务id，接入时由系统分配
     * @var string
     */
    public $bizId;

    /**
     * @description 实例结束时间，时间戳
     * @var int
     */
    public $endTime;

    /**
     * @description 是否启用，建议传入该参数，只有启用状态的实例才允许打卡。如果不传入该参数，则实例默认为“已创建”状态而非“启用”状态。
     * @var bool
     */
    public $active;

}
