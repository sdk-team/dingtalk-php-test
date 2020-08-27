<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListOapiCalendarResponseBody\result;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListOapiCalendarResponseBody\result\items\attendees;
use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListOapiCalendarResponseBody\result\items\organizer;
use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListOapiCalendarResponseBody\result\items\end;
use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListOapiCalendarResponseBody\result\items\start;
use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListOapiCalendarResponseBody\result\items\updated;
use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListOapiCalendarResponseBody\result\items\created;

class items extends Model {
    protected $_name = [
        'attendees' => 'attendees',
        'organizer' => 'organizer',
        'recurrence' => 'recurrence',
        'end' => 'end',
        'start' => 'start',
        'location' => 'location',
        'description' => 'description',
        'summary' => 'summary',
        'updated' => 'updated',
        'created' => 'created',
        'status' => 'status',
        'id' => 'id',
        'iCalUid' => 'i_cal_uid',
        'responseStatus' => 'response_status',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->attendees) {
            $res['attendees'] = [];
            if(null !== $this->attendees && is_array($this->attendees)){
                $n = 0;
                foreach($this->attendees as $item){
                    $res['attendees'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->organizer) {
            $res['organizer'] = null !== $this->organizer ? $this->organizer->toMap() : null;
        }
        if (null !== $this->recurrence) {
            $res['recurrence'] = $this->recurrence;
        }
        if (null !== $this->end) {
            $res['end'] = null !== $this->end ? $this->end->toMap() : null;
        }
        if (null !== $this->start) {
            $res['start'] = null !== $this->start ? $this->start->toMap() : null;
        }
        if (null !== $this->location) {
            $res['location'] = $this->location;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->summary) {
            $res['summary'] = $this->summary;
        }
        if (null !== $this->updated) {
            $res['updated'] = null !== $this->updated ? $this->updated->toMap() : null;
        }
        if (null !== $this->created) {
            $res['created'] = null !== $this->created ? $this->created->toMap() : null;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        if (null !== $this->iCalUid) {
            $res['i_cal_uid'] = $this->iCalUid;
        }
        if (null !== $this->responseStatus) {
            $res['response_status'] = $this->responseStatus;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return items
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['attendees'])){
            if(!empty($map['attendees'])){
                $model->attendees = [];
                $n = 0;
                foreach($map['attendees'] as $item) {
                    $model->attendees[$n++] = null !== $item ? attendees::fromMap($item) : $item;
                }
            }
        }
        if(isset($map['organizer'])){
            $model->organizer = organizer::fromMap($map['organizer']);
        }
        if(isset($map['recurrence'])){
            if(!empty($map['recurrence'])){
                $model->recurrence = $map['recurrence'];
            }
        }
        if(isset($map['end'])){
            $model->end = end::fromMap($map['end']);
        }
        if(isset($map['start'])){
            $model->start = start::fromMap($map['start']);
        }
        if(isset($map['location'])){
            $model->location = $map['location'];
        }
        if(isset($map['description'])){
            $model->description = $map['description'];
        }
        if(isset($map['summary'])){
            $model->summary = $map['summary'];
        }
        if(isset($map['updated'])){
            $model->updated = updated::fromMap($map['updated']);
        }
        if(isset($map['created'])){
            $model->created = created::fromMap($map['created']);
        }
        if(isset($map['status'])){
            $model->status = $map['status'];
        }
        if(isset($map['id'])){
            $model->id = $map['id'];
        }
        if(isset($map['i_cal_uid'])){
            $model->iCalUid = $map['i_cal_uid'];
        }
        if(isset($map['response_status'])){
            $model->responseStatus = $map['response_status'];
        }
        return $model;
    }
    /**
     * @description 参与者,考虑性能问题，该字段不向外透出
     * @var array
     */
    public $attendees;

    /**
     * @description 组织者
     * @var organizer
     */
    public $organizer;

    /**
     * @description 循环的规则
     * @var array
     */
    public $recurrence;

    /**
     * @description 结束时间
     * @var end
     */
    public $end;

    /**
     * @description 开始时间
     * @var start
     */
    public $start;

    /**
     * @description 地点
     * @var string
     */
    public $location;

    /**
     * @description 内容描述
     * @var string
     */
    public $description;

    /**
     * @description 标题简述
     * @var string
     */
    public $summary;

    /**
     * @description 最后一次更新时间
     * @var updated
     */
    public $updated;

    /**
     * @description 创建时间
     * @var created
     */
    public $created;

    /**
     * @description 状态（confirmed、cancelled）
     * @var string
     */
    public $status;

    /**
     * @description 日程事件id
     * @var string
     */
    public $id;

    /**
     * @description 日程跨域唯一id，用于唯一标识一组关联日程事件
     * @var string
     */
    public $iCalUid;

    /**
     * @description 响应状态（accepted, declined, needsAction）
     * @var string
     */
    public $responseStatus;

}
