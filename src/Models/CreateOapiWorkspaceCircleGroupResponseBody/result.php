<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\CreateOapiWorkspaceCircleGroupResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model {
    protected $_name = [
        'conversationId' => 'conversation_id',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->conversationId) {
            $res['conversation_id'] = $this->conversationId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return result
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['conversation_id'])){
            $model->conversationId = $map['conversation_id'];
        }
        return $model;
    }
    /**
     * @description 群id
     * @var string
     */
    public $conversationId;

}
