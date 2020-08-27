<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class QueryOapiImChatServicegroupMemberParams extends Model {
    protected $_name = [
        'chatId' => 'chat_id',
        'pageSize' => 'page_size',
        'pageNum' => 'page_num',
        'includeOwner' => 'include_owner',
    ];
    public function validate() {
        Model::validateRequired('chatId', $this->chatId, true);
        Model::validateRequired('pageSize', $this->pageSize, true);
        Model::validateRequired('pageNum', $this->pageNum, true);
        Model::validateMaxLength('chatId', $this->chatId, 128);
        Model::validateMaximum('pageSize', $this->pageSize, 100);
        Model::validateMinimum('pageSize', $this->pageSize, 1);
        Model::validateMinimum('pageNum', $this->pageNum, 1);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->chatId) {
            $res['chat_id'] = $this->chatId;
        }
        if (null !== $this->pageSize) {
            $res['page_size'] = $this->pageSize;
        }
        if (null !== $this->pageNum) {
            $res['page_num'] = $this->pageNum;
        }
        if (null !== $this->includeOwner) {
            $res['include_owner'] = $this->includeOwner;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return QueryOapiImChatServicegroupMemberParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['chat_id'])){
            $model->chatId = $map['chat_id'];
        }
        if(isset($map['page_size'])){
            $model->pageSize = $map['page_size'];
        }
        if(isset($map['page_num'])){
            $model->pageNum = $map['page_num'];
        }
        if(isset($map['include_owner'])){
            $model->includeOwner = $map['include_owner'];
        }
        return $model;
    }
    /**
     * @description 开放的chatId
     * @var string
     */
    public $chatId;

    /**
     * @description 每页大小，最大100
     * @var int
     */
    public $pageSize;

    /**
     * @description 页码，从1开始
     * @var int
     */
    public $pageNum;

    /**
     * @description 0- 不包含群主，1-包含群主
     * @var int
     */
    public $includeOwner;

}
