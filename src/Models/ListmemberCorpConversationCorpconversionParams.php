<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class ListmemberCorpConversationCorpconversionParams extends Model {
    protected $_name = [
        'openConversationId' => 'open_conversation_id',
        'offset' => 'offset',
        'count' => 'count',
    ];
    public function validate() {
        Model::validateRequired('openConversationId', $this->openConversationId, true);
        Model::validateRequired('offset', $this->offset, true);
        Model::validateRequired('count', $this->count, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->openConversationId) {
            $res['open_conversation_id'] = $this->openConversationId;
        }
        if (null !== $this->offset) {
            $res['offset'] = $this->offset;
        }
        if (null !== $this->count) {
            $res['count'] = $this->count;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return ListmemberCorpConversationCorpconversionParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['open_conversation_id'])){
            $model->openConversationId = $map['open_conversation_id'];
        }
        if(isset($map['offset'])){
            $model->offset = $map['offset'];
        }
        if(isset($map['count'])){
            $model->count = $map['count'];
        }
        return $model;
    }
    /**
     * @description 群组id
     * @var string
     */
    public $openConversationId;

    /**
     * @description 群成员列表偏移量
     * @var int
     */
    public $offset;

    /**
     * @description 本次请求获取群成员的大小，最大为100
     * @var int
     */
    public $count;

}
