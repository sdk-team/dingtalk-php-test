<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListOapiCalendarParams\timeMin;
use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListOapiCalendarParams\timeMax;

class ListOapiCalendarParams extends Model {
    protected $_name = [
        'calendarFolderId' => 'calendar_folder_id',
        'timeMin' => 'time_min',
        'userId' => 'user_id',
        'iCalUid' => 'i_cal_uid',
        'singleEvents' => 'single_events',
        'pageToken' => 'page_token',
        'maxResults' => 'max_results',
        'timeMax' => 'time_max',
    ];
    public function validate() {
        Model::validateRequired('userId', $this->userId, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->calendarFolderId) {
            $res['calendar_folder_id'] = $this->calendarFolderId;
        }
        if (null !== $this->timeMin) {
            $res['time_min'] = null !== $this->timeMin ? $this->timeMin->toMap() : null;
        }
        if (null !== $this->userId) {
            $res['user_id'] = $this->userId;
        }
        if (null !== $this->iCalUid) {
            $res['i_cal_uid'] = $this->iCalUid;
        }
        if (null !== $this->singleEvents) {
            $res['single_events'] = $this->singleEvents;
        }
        if (null !== $this->pageToken) {
            $res['page_token'] = $this->pageToken;
        }
        if (null !== $this->maxResults) {
            $res['max_results'] = $this->maxResults;
        }
        if (null !== $this->timeMax) {
            $res['time_max'] = null !== $this->timeMax ? $this->timeMax->toMap() : null;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return ListOapiCalendarParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['calendar_folder_id'])){
            $model->calendarFolderId = $map['calendar_folder_id'];
        }
        if(isset($map['time_min'])){
            $model->timeMin = timeMin::fromMap($map['time_min']);
        }
        if(isset($map['user_id'])){
            $model->userId = $map['user_id'];
        }
        if(isset($map['i_cal_uid'])){
            $model->iCalUid = $map['i_cal_uid'];
        }
        if(isset($map['single_events'])){
            $model->singleEvents = $map['single_events'];
        }
        if(isset($map['page_token'])){
            $model->pageToken = $map['page_token'];
        }
        if(isset($map['max_results'])){
            $model->maxResults = $map['max_results'];
        }
        if(isset($map['time_max'])){
            $model->timeMax = timeMax::fromMap($map['time_max']);
        }
        return $model;
    }
    /**
     * @description 钉钉日历文件夹的对外id，默认是自己的默认文件夹
     * @var string
     */
    public $calendarFolderId;

    /**
     * @description 查询时间下限
     * @var timeMin
     */
    public $timeMin;

    /**
     * @description 员工ID
     * @var string
     */
    public $userId;

    /**
     * @description 日程跨域唯一id，用于唯一标识一组关联日程事件
     * @var string
     */
    public $iCalUid;

    /**
     * @description 是否需要展开循环日程
     * @var bool
     */
    public $singleEvents;

    /**
     * @description 查询对应页，值有上一次请求返回的结果里对应nextPageToken
     * @var string
     */
    public $pageToken;

    /**
     * @description 结果返回的最多数量，默认250，最多返回2500
     * @var int
     */
    public $maxResults;

    /**
     * @description 查询时间上限
     * @var timeMax
     */
    public $timeMax;

}
