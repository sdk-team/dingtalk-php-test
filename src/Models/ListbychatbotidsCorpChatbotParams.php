<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class ListbychatbotidsCorpChatbotParams extends Model {
    protected $_name = [
        'chatbotIds' => 'chatbot_ids',
    ];
    public function validate() {
        Model::validateRequired('chatbotIds', $this->chatbotIds, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->chatbotIds) {
            $res['chatbot_ids'] = $this->chatbotIds;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return ListbychatbotidsCorpChatbotParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['chatbot_ids'])){
            if(!empty($map['chatbot_ids'])){
                $model->chatbotIds = $map['chatbot_ids'];
            }
        }
        return $model;
    }
    /**
     * @description chatbotId列表
     * @var array
     */
    public $chatbotIds;

}
