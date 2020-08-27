<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class ListbyconversationidOapiRobotMessageStatisticsParams extends Model {
    protected $_name = [
        'readStatus' => 'read_status',
        'pushId' => 'push_id',
        'conversationIds' => 'conversation_ids',
        'pageSize' => 'page_size',
        'page' => 'page',
    ];
    public function validate() {
        Model::validateRequired('pushId', $this->pushId, true);
        Model::validateRequired('conversationIds', $this->conversationIds, true);
        Model::validateRequired('pageSize', $this->pageSize, true);
        Model::validateRequired('page', $this->page, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->readStatus) {
            $res['read_status'] = $this->readStatus;
        }
        if (null !== $this->pushId) {
            $res['push_id'] = $this->pushId;
        }
        if (null !== $this->conversationIds) {
            $res['conversation_ids'] = $this->conversationIds;
        }
        if (null !== $this->pageSize) {
            $res['page_size'] = $this->pageSize;
        }
        if (null !== $this->page) {
            $res['page'] = $this->page;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return ListbyconversationidOapiRobotMessageStatisticsParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['read_status'])){
            $model->readStatus = $map['read_status'];
        }
        if(isset($map['push_id'])){
            $model->pushId = $map['push_id'];
        }
        if(isset($map['conversation_ids'])){
            if(!empty($map['conversation_ids'])){
                $model->conversationIds = $map['conversation_ids'];
            }
        }
        if(isset($map['page_size'])){
            $model->pageSize = $map['page_size'];
        }
        if(isset($map['page'])){
            $model->page = $map['page'];
        }
        return $model;
    }
    /**
     * @description 已读状态
     * @var bool
     */
    public $readStatus;

    /**
     * @description 机器人消息推送Id
     * @var string
     */
    public $pushId;

    /**
     * @description 群Id列表
     * @var array
     */
    public $conversationIds;

    /**
     * @description 分页大小
     * @var int
     */
    public $pageSize;

    /**
     * @description 当前页码
     * @var int
     */
    public $page;

}
