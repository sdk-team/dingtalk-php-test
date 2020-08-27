<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class ListOapiRobotMessageStatisticsParams extends Model {
    protected $_name = [
        'pageSize' => 'page_size',
        'page' => 'page',
        'pushIds' => 'push_ids',
    ];
    public function validate() {
        Model::validateRequired('pageSize', $this->pageSize, true);
        Model::validateRequired('page', $this->page, true);
        Model::validateRequired('pushIds', $this->pushIds, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->pageSize) {
            $res['page_size'] = $this->pageSize;
        }
        if (null !== $this->page) {
            $res['page'] = $this->page;
        }
        if (null !== $this->pushIds) {
            $res['push_ids'] = $this->pushIds;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return ListOapiRobotMessageStatisticsParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['page_size'])){
            $model->pageSize = $map['page_size'];
        }
        if(isset($map['page'])){
            $model->page = $map['page'];
        }
        if(isset($map['push_ids'])){
            if(!empty($map['push_ids'])){
                $model->pushIds = $map['push_ids'];
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
     * @description 机器人消息推送Id列表
     * @var array
     */
    public $pushIds;

}
