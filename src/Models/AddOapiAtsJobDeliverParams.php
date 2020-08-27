<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class AddOapiAtsJobDeliverParams extends Model {
    protected $_name = [
        'bizCode' => 'biz_code',
        'deliverStatus' => 'deliver_status',
        'deliverChannel' => 'deliver_channel',
        'jobId' => 'job_id',
        'deliverOuterId' => 'deliver_outer_id',
        'deliverMsg' => 'deliver_msg',
    ];
    public function validate() {
        Model::validateRequired('bizCode', $this->bizCode, true);
        Model::validateRequired('deliverStatus', $this->deliverStatus, true);
        Model::validateRequired('deliverChannel', $this->deliverChannel, true);
        Model::validateRequired('jobId', $this->jobId, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->bizCode) {
            $res['biz_code'] = $this->bizCode;
        }
        if (null !== $this->deliverStatus) {
            $res['deliver_status'] = $this->deliverStatus;
        }
        if (null !== $this->deliverChannel) {
            $res['deliver_channel'] = $this->deliverChannel;
        }
        if (null !== $this->jobId) {
            $res['job_id'] = $this->jobId;
        }
        if (null !== $this->deliverOuterId) {
            $res['deliver_outer_id'] = $this->deliverOuterId;
        }
        if (null !== $this->deliverMsg) {
            $res['deliver_msg'] = $this->deliverMsg;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return AddOapiAtsJobDeliverParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['biz_code'])){
            $model->bizCode = $map['biz_code'];
        }
        if(isset($map['deliver_status'])){
            $model->deliverStatus = $map['deliver_status'];
        }
        if(isset($map['deliver_channel'])){
            $model->deliverChannel = $map['deliver_channel'];
        }
        if(isset($map['job_id'])){
            $model->jobId = $map['job_id'];
        }
        if(isset($map['deliver_outer_id'])){
            $model->deliverOuterId = $map['deliver_outer_id'];
        }
        if(isset($map['deliver_msg'])){
            $model->deliverMsg = $map['deliver_msg'];
        }
        return $model;
    }
    /**
     * @description 业务唯一标识，接入前请提前沟通
     * @var string
     */
    public $bizCode;

    /**
     * @description 投递中:created,投递失败:fail,投递成功:success,已下架:off_shelf
     * @var string
     */
    public $deliverStatus;

    /**
     * @description 投递渠道, 接入前请提前沟通
     * @var string
     */
    public $deliverChannel;

    /**
     * @description 智能招聘职位id
     * @var string
     */
    public $jobId;

    /**
     * @description 渠道中的一次职位外投的唯一id，如需要更新deliver_status该入参必传
     * @var string
     */
    public $deliverOuterId;

    /**
     * @description 失败原因
     * @var string
     */
    public $deliverMsg;

}
