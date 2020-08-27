<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListOapiCallbackFailrecordParams;

use AlibabaCloud\Tea\Model;

class req extends Model {
    protected $_name = [
        'tags' => 'tags',
        'cursor' => 'cursor',
        'status' => 'status',
        'pageSize' => 'page_size',
        'beginTime' => 'begin_time',
        'endTime' => 'end_time',
        'confirm' => 'confirm',
    ];
    public function validate() {
        Model::validateRequired('tags', $this->tags, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->tags) {
            $res['tags'] = $this->tags;
        }
        if (null !== $this->cursor) {
            $res['cursor'] = $this->cursor;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->pageSize) {
            $res['page_size'] = $this->pageSize;
        }
        if (null !== $this->beginTime) {
            $res['begin_time'] = $this->beginTime;
        }
        if (null !== $this->endTime) {
            $res['end_time'] = $this->endTime;
        }
        if (null !== $this->confirm) {
            $res['confirm'] = $this->confirm;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return req
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['tags'])){
            if(!empty($map['tags'])){
                $model->tags = $map['tags'];
            }
        }
        if(isset($map['cursor'])){
            $model->cursor = $map['cursor'];
        }
        if(isset($map['status'])){
            $model->status = $map['status'];
        }
        if(isset($map['page_size'])){
            $model->pageSize = $map['page_size'];
        }
        if(isset($map['begin_time'])){
            $model->beginTime = $map['begin_time'];
        }
        if(isset($map['end_time'])){
            $model->endTime = $map['end_time'];
        }
        if(isset($map['confirm'])){
            $model->confirm = $map['confirm'];
        }
        return $model;
    }
    /**
     * @description 回调事件类型
     * @var array
     */
    public $tags;

    /**
     * @description 分页查询，上次查询结果中的最后一个id
     * @var int
     */
    public $cursor;

    /**
     * @description 确认状态，0-已确认 1-未确认，不填表示不区分
     * @var int
     */
    public $status;

    /**
     * @description 分页大小，最大支持100
     * @var int
     */
    public $pageSize;

    /**
     * @description 开始时间(单位：秒)。空表示不限，左闭右开。PS：当前只保留了7天的记录
     * @var int
     */
    public $beginTime;

    /**
     * @description 结束时间(单位：秒)。空表示不限，左闭右开
     * @var int
     */
    public $endTime;

    /**
     * @description 此次查询成功后，是否立即将状态改为“已确认”。传空取默认值false
     * @var bool
     */
    public $confirm;

}
