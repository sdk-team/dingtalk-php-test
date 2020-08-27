<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class GetOapiEduMainDataParams extends Model {
    protected $_name = [
        'statDate' => 'stat_date',
    ];
    public function validate() {
        Model::validateRequired('statDate', $this->statDate, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->statDate) {
            $res['stat_date'] = $this->statDate;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return GetOapiEduMainDataParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['stat_date'])){
            $model->statDate = $map['stat_date'];
        }
        return $model;
    }
    /**
     * @description 统计日期
     * @var string
     */
    public $statDate;

}
