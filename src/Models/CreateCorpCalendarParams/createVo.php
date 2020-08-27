<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\CreateCorpCalendarParams;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\CreateCorpCalendarParams\createVo\reminder;
use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\CreateCorpCalendarParams\createVo\endTime;
use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\CreateCorpCalendarParams\createVo\startTime;
use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\CreateCorpCalendarParams\createVo\source;

class createVo extends Model {
    protected $_name = [
        'summary' => 'summary',
        'reminder' => 'reminder',
        'location' => 'location',
        'receiverUserids' => 'receiver_userids',
        'endTime' => 'end_time',
        'calendarType' => 'calendar_type',
        'startTime' => 'start_time',
        'source' => 'source',
        'description' => 'description',
        'creatorUserid' => 'creator_userid',
        'uuid' => 'uuid',
        'bizId' => 'biz_id',
    ];
    public function validate() {
        Model::validateRequired('summary', $this->summary, true);
        Model::validateRequired('receiverUserids', $this->receiverUserids, true);
        Model::validateRequired('endTime', $this->endTime, true);
        Model::validateRequired('calendarType', $this->calendarType, true);
        Model::validateRequired('startTime', $this->startTime, true);
        Model::validateRequired('creatorUserid', $this->creatorUserid, true);
        Model::validateRequired('uuid', $this->uuid, true);
        Model::validateRequired('bizId', $this->bizId, true);
        Model::validateMaxLength('summary', $this->summary, 5000);
        Model::validateMaxLength('location', $this->location, 512);
        Model::validateMaxLength('description', $this->description, 1024);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->summary) {
            $res['summary'] = $this->summary;
        }
        if (null !== $this->reminder) {
            $res['reminder'] = null !== $this->reminder ? $this->reminder->toMap() : null;
        }
        if (null !== $this->location) {
            $res['location'] = $this->location;
        }
        if (null !== $this->receiverUserids) {
            $res['receiver_userids'] = $this->receiverUserids;
        }
        if (null !== $this->endTime) {
            $res['end_time'] = null !== $this->endTime ? $this->endTime->toMap() : null;
        }
        if (null !== $this->calendarType) {
            $res['calendar_type'] = $this->calendarType;
        }
        if (null !== $this->startTime) {
            $res['start_time'] = null !== $this->startTime ? $this->startTime->toMap() : null;
        }
        if (null !== $this->source) {
            $res['source'] = null !== $this->source ? $this->source->toMap() : null;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->creatorUserid) {
            $res['creator_userid'] = $this->creatorUserid;
        }
        if (null !== $this->uuid) {
            $res['uuid'] = $this->uuid;
        }
        if (null !== $this->bizId) {
            $res['biz_id'] = $this->bizId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return createVo
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['summary'])){
            $model->summary = $map['summary'];
        }
        if(isset($map['reminder'])){
            $model->reminder = reminder::fromMap($map['reminder']);
        }
        if(isset($map['location'])){
            $model->location = $map['location'];
        }
        if(isset($map['receiver_userids'])){
            if(!empty($map['receiver_userids'])){
                $model->receiverUserids = $map['receiver_userids'];
            }
        }
        if(isset($map['end_time'])){
            $model->endTime = endTime::fromMap($map['end_time']);
        }
        if(isset($map['calendar_type'])){
            $model->calendarType = $map['calendar_type'];
        }
        if(isset($map['start_time'])){
            $model->startTime = startTime::fromMap($map['start_time']);
        }
        if(isset($map['source'])){
            $model->source = source::fromMap($map['source']);
        }
        if(isset($map['description'])){
            $model->description = $map['description'];
        }
        if(isset($map['creator_userid'])){
            $model->creatorUserid = $map['creator_userid'];
        }
        if(isset($map['uuid'])){
            $model->uuid = $map['uuid'];
        }
        if(isset($map['biz_id'])){
            $model->bizId = $map['biz_id'];
        }
        return $model;
    }
    /**
     * @description 主题
     * @var string
     */
    public $summary;

    /**
     * @description 事项开始前提醒
     * @var reminder
     */
    public $reminder;

    /**
     * @description 地点
     * @var string
     */
    public $location;

    /**
     * @description 接收者工号
     * @var array
     */
    public $receiverUserids;

    /**
     * @description 结束时间
     * @var endTime
     */
    public $endTime;

    /**
     * @description 日程类型:task-任务;meeting-会议;notification-提醒
     * @var string
     */
    public $calendarType;

    /**
     * @description 开始时间
     * @var startTime
     */
    public $startTime;

    /**
     * @description 显示日程来源
     * @var source
     */
    public $source;

    /**
     * @description 备注
     * @var string
     */
    public $description;

    /**
     * @description 创建者工号
     * @var string
     */
    public $creatorUserid;

    /**
     * @description 请求的唯一标识, 保证请求唯一性
     * @var string
     */
    public $uuid;

    /**
     * @description 业务方自己的主键
     * @var string
     */
    public $bizId;

}
