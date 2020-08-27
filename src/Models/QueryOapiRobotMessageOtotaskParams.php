<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class QueryOapiRobotMessageOtotaskParams extends Model {
    protected $_name = [
        'chatbotId' => 'chatbot_id',
        'processQueryKey' => 'process_query_key',
    ];
    public function validate() {
        Model::validateRequired('chatbotId', $this->chatbotId, true);
        Model::validateRequired('processQueryKey', $this->processQueryKey, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->chatbotId) {
            $res['chatbot_id'] = $this->chatbotId;
        }
        if (null !== $this->processQueryKey) {
            $res['process_query_key'] = $this->processQueryKey;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return QueryOapiRobotMessageOtotaskParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['chatbot_id'])){
            $model->chatbotId = $map['chatbot_id'];
        }
        if(isset($map['process_query_key'])){
            $model->processQueryKey = $map['process_query_key'];
        }
        return $model;
    }
    /**
     * @description 申请到的企业机器人唯一标识符
     * @var string
     */
    public $chatbotId;

    /**
     * @description 用于查询发送进度的唯一标识
     * @var string
     */
    public $processQueryKey;

}
