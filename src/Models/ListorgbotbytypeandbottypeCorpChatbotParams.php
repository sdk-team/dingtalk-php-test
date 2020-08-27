<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class ListorgbotbytypeandbottypeCorpChatbotParams extends Model {
    protected $_name = [
        'type' => 'type',
        'botType' => 'bot_type',
    ];
    public function validate() {
        Model::validateRequired('type', $this->type, true);
        Model::validateRequired('botType', $this->botType, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }
        if (null !== $this->botType) {
            $res['bot_type'] = $this->botType;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return ListorgbotbytypeandbottypeCorpChatbotParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['type'])){
            $model->type = $map['type'];
        }
        if(isset($map['bot_type'])){
            $model->botType = $map['bot_type'];
        }
        return $model;
    }
    /**
     * @description 机器人类型(钉钉分配)
     * @var string
     */
    public $type;

    /**
     * @description 2-企业对内机器人，3-企业对外机器人
     * @var int
     */
    public $botType;

}
