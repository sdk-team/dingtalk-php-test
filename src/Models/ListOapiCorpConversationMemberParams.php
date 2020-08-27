<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class ListOapiCorpConversationMemberParams extends Model {
    protected $_name = [
        'chatId' => 'chat_id',
        'offset' => 'offset',
        'size' => 'size',
    ];
    public function validate() {
        Model::validateRequired('chatId', $this->chatId, true);
        Model::validateRequired('offset', $this->offset, true);
        Model::validateRequired('size', $this->size, true);
        Model::validateMaximum('size', $this->size, 200);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->chatId) {
            $res['chat_id'] = $this->chatId;
        }
        if (null !== $this->offset) {
            $res['offset'] = $this->offset;
        }
        if (null !== $this->size) {
            $res['size'] = $this->size;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return ListOapiCorpConversationMemberParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['chat_id'])){
            $model->chatId = $map['chat_id'];
        }
        if(isset($map['offset'])){
            $model->offset = $map['offset'];
        }
        if(isset($map['size'])){
            $model->size = $map['size'];
        }
        return $model;
    }
    /**
     * @description 会话ID
     * @var string
     */
    public $chatId;

    /**
     * @description 偏移位置，从0开始，后续传offset+size的值。member_list返回为空表示结束了。
     * @var int
     */
    public $offset;

    /**
     * @description 请求数量
     * @var int
     */
    public $size;

}
