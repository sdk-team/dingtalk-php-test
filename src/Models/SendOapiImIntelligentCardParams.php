<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class SendOapiImIntelligentCardParams extends Model {
    protected $_name = [
        'openConversationId' => 'open_conversation_id',
        'templateData' => 'template_data',
        'bizType' => 'biz_type',
    ];
    public function validate() {
        Model::validateRequired('openConversationId', $this->openConversationId, true);
        Model::validateRequired('templateData', $this->templateData, true);
        Model::validateRequired('bizType', $this->bizType, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->openConversationId) {
            $res['open_conversation_id'] = $this->openConversationId;
        }
        if (null !== $this->templateData) {
            $res['template_data'] = $this->templateData;
        }
        if (null !== $this->bizType) {
            $res['biz_type'] = $this->bizType;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return SendOapiImIntelligentCardParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['open_conversation_id'])){
            $model->openConversationId = $map['open_conversation_id'];
        }
        if(isset($map['template_data'])){
            $model->templateData = $map['template_data'];
        }
        if(isset($map['biz_type'])){
            $model->bizType = $map['biz_type'];
        }
        return $model;
    }
    /**
     * @description 加密的群id
     * @var string
     */
    public $openConversationId;

    /**
     * @description 动态卡片的json格式模板
     * @var string
     */
    public $templateData;

    /**
     * @description 群助理的biz类型
     * @var int
     */
    public $bizType;

}
