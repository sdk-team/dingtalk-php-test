<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class GetReadListOapiChatParams extends Model {
    protected $_name = [
        'messageId' => 'messageId',
        'cursor' => 'cursor',
        'size' => 'size',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->messageId) {
            $res['messageId'] = $this->messageId;
        }
        if (null !== $this->cursor) {
            $res['cursor'] = $this->cursor;
        }
        if (null !== $this->size) {
            $res['size'] = $this->size;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return GetReadListOapiChatParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['messageId'])){
            $model->messageId = $map['messageId'];
        }
        if(isset($map['cursor'])){
            $model->cursor = $map['cursor'];
        }
        if(isset($map['size'])){
            $model->size = $map['size'];
        }
        return $model;
    }
    /**
     * @description 发送群消息接口返回的加密消息id
     * @var string
     */
    public $messageId;

    /**
     * @description 分页查询的游标，第一次可以传0，后续传返回结果中的next_cursor的值。当返回结果中，没有next_cursor时，表示没有后续的数据了，可以结束调用
     * @var int
     */
    public $cursor;

    /**
     * @description 分页查询的大小，最大可以传100
     * @var int
     */
    public $size;

}
