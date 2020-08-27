<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GrouprobotOapiBipaasNotifyParams;

use AlibabaCloud\Tea\Model;

class robotNotify extends Model {
    protected $_name = [
        'messageBody' => 'message_body',
        'antcloudTenantId' => 'antcloud_tenant_id',
        'robotUrl' => 'robot_url',
        'messageType' => 'message_type',
        'antcloudOperatorIds' => 'antcloud_operator_ids',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->messageBody) {
            $res['message_body'] = $this->messageBody;
        }
        if (null !== $this->antcloudTenantId) {
            $res['antcloud_tenant_id'] = $this->antcloudTenantId;
        }
        if (null !== $this->robotUrl) {
            $res['robot_url'] = $this->robotUrl;
        }
        if (null !== $this->messageType) {
            $res['message_type'] = $this->messageType;
        }
        if (null !== $this->antcloudOperatorIds) {
            $res['antcloud_operator_ids'] = $this->antcloudOperatorIds;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return robotNotify
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['message_body'])){
            $model->messageBody = $map['message_body'];
        }
        if(isset($map['antcloud_tenant_id'])){
            $model->antcloudTenantId = $map['antcloud_tenant_id'];
        }
        if(isset($map['robot_url'])){
            $model->robotUrl = $map['robot_url'];
        }
        if(isset($map['message_type'])){
            $model->messageType = $map['message_type'];
        }
        if(isset($map['antcloud_operator_ids'])){
            if(!empty($map['antcloud_operator_ids'])){
                $model->antcloudOperatorIds = $map['antcloud_operator_ids'];
            }
        }
        return $model;
    }
    /**
     * @description 对应消息格式内容
     * @var string
     */
    public $messageBody;

    /**
     * @description 金融云租户 ID
     * @var string
     */
    public $antcloudTenantId;

    /**
     * @description 钉钉群机器人地址
     * @var string
     */
    public $robotUrl;

    /**
     * @description 消息格式
     * @var string
     */
    public $messageType;

    /**
     * @description 需要@到的金融云租户下操作员列表
     * @var array
     */
    public $antcloudOperatorIds;

}
