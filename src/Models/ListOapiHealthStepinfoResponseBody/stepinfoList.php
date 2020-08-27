<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListOapiHealthStepinfoResponseBody;

use AlibabaCloud\Tea\Model;

class stepinfoList extends Model {
    protected $_name = [
        'statDate' => 'stat_date',
        'stepCount' => 'step_count',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->statDate) {
            $res['stat_date'] = $this->statDate;
        }
        if (null !== $this->stepCount) {
            $res['step_count'] = $this->stepCount;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return stepinfoList
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['stat_date'])){
            $model->statDate = $map['stat_date'];
        }
        if(isset($map['step_count'])){
            $model->stepCount = $map['step_count'];
        }
        return $model;
    }
    /**
     * @description 统计的时间
     * @var int
     */
    public $statDate;

    /**
     * @description 步数
     * @var int
     */
    public $stepCount;

}
