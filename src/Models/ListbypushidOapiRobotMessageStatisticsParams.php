<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class ListbypushidOapiRobotMessageStatisticsParams extends Model {
    protected $_name = [
        'pageSize' => 'page_size',
        'page' => 'page',
        'pushId' => 'push_id',
        'conversationIds' => 'conversation_ids',
    ];
    public function validate() {
        Model::validateRequired('pageSize', $this->pageSize, true);
        Model::validateRequired('page', $this->page, true);
        Model::validateRequired('pushId', $this->pushId, true);
        Model::validateRequired('conversationIds', $this->conversationIds, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->pageSize) {
            $res['page_size'] = $this->pageSize;
        }
        if (null !== $this->page) {
            $res['page'] = $this->page;
        }
        if (null !== $this->pushId) {
            $res['push_id'] = $this->pushId;
        }
        if (null !== $this->conversationIds) {
            $res['conversation_ids'] = $this->conversationIds;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return ListbypushidOapiRobotMessageStatisticsParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['page_size'])){
            $model->pageSize = $map['page_size'];
        }
        if(isset($map['page'])){
            $model->page = $map['page'];
        }
        if(isset($map['push_id'])){
            $model->pushId = $map['push_id'];
        }
        if(isset($map['conversation_ids'])){
            if(!empty($map['conversation_ids'])){
                $model->conversationIds = $map['conversation_ids'];
            }
        }
        return $model;
    }
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

}
