<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\QueryOapiRhinoHumanresProductionteamResponseBody\model;

use AlibabaCloud\Tea\Model;

class weekdayConfigList extends Model {
    protected $_name = [
        'weekDay' => 'week_day',
        'startTime' => 'start_time',
        'endTime' => 'end_time',
        'type' => 'type',
        'productionTeamCode' => 'production_team_code',
        'day' => 'day',
    ];
    public function validate() {
        Model::validatePattern('startTime', $this->startTime, '\\d{4}[-]\\d{1,2}[-]\\d{1,2}[T]\\d{2}:\\d{2}:\\d{2}[Z]');
        Model::validatePattern('endTime', $this->endTime, '\\d{4}[-]\\d{1,2}[-]\\d{1,2}[T]\\d{2}:\\d{2}:\\d{2}[Z]');
    }
    public function toMap() {
        $res = [];
        if (null !== $this->weekDay) {
            $res['week_day'] = $this->weekDay;
        }
        if (null !== $this->startTime) {
            $res['start_time'] = $this->startTime;
        }
        if (null !== $this->endTime) {
            $res['end_time'] = $this->endTime;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }
        if (null !== $this->productionTeamCode) {
            $res['production_team_code'] = $this->productionTeamCode;
        }
        if (null !== $this->day) {
            $res['day'] = $this->day;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return weekdayConfigList
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['week_day'])){
            $model->weekDay = $map['week_day'];
        }
        if(isset($map['start_time'])){
            $model->startTime = $map['start_time'];
        }
        if(isset($map['end_time'])){
            $model->endTime = $map['end_time'];
        }
        if(isset($map['type'])){
            $model->type = $map['type'];
        }
        if(isset($map['production_team_code'])){
            $model->productionTeamCode = $map['production_team_code'];
        }
        if(isset($map['day'])){
            $model->day = $map['day'];
        }
        return $model;
    }
    /**
     * @description 工作日
     * @var string
     */
    public $weekDay;

    /**
     * @description 开始时间
     * @var string
     */
    public $startTime;

    /**
     * @description 结束时间
     * @var string
     */
    public $endTime;

    /**
     * @description 类型
     * @var int
     */
    public $type;

    /**
     * @description 生产组code
     * @var string
     */
    public $productionTeamCode;

    /**
     * @description 星期
     * @var int
     */
    public $day;

}
