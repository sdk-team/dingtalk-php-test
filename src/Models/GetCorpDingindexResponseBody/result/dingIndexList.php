<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetCorpDingindexResponseBody\result;

use AlibabaCloud\Tea\Model;

class dingIndexList extends Model {
    protected $_name = [
        'statDate' => 'stat_date',
        'dayIndex' => 'day_index',
        'avarageMonthIndex' => 'avarage_month_index',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->statDate) {
            $res['stat_date'] = $this->statDate;
        }
        if (null !== $this->dayIndex) {
            $res['day_index'] = $this->dayIndex;
        }
        if (null !== $this->avarageMonthIndex) {
            $res['avarage_month_index'] = $this->avarageMonthIndex;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return dingIndexList
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['stat_date'])){
            $model->statDate = $map['stat_date'];
        }
        if(isset($map['day_index'])){
            $model->dayIndex = $map['day_index'];
        }
        if(isset($map['avarage_month_index'])){
            $model->avarageMonthIndex = $map['avarage_month_index'];
        }
        return $model;
    }
    /**
     * @description 统计时间
     * @var string
     */
    public $statDate;

    /**
     * @description 日钉钉指数
     * @var string
     */
    public $dayIndex;

    /**
     * @description 月平均钉钉指数
     * @var string
     */
    public $avarageMonthIndex;

}
