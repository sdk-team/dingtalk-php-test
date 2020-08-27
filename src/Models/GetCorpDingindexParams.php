<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class GetCorpDingindexParams extends Model {
    protected $_name = [
        'statDates' => 'stat_dates',
    ];
    public function validate() {
        Model::validateRequired('statDates', $this->statDates, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->statDates) {
            $res['stat_dates'] = $this->statDates;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return GetCorpDingindexParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['stat_dates'])){
            if(!empty($map['stat_dates'])){
                $model->statDates = $map['stat_dates'];
            }
        }
        return $model;
    }
    /**
     * @description 统计日期
     * @var array
     */
    public $statDates;

}
