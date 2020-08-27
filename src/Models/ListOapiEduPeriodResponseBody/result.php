<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListOapiEduPeriodResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model {
    protected $_name = [
        'periodType' => 'period_type',
        'periodId' => 'period_id',
        'name' => 'name',
        'nick' => 'nick',
        'nameMode' => 'name_mode',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->periodType) {
            $res['period_type'] = $this->periodType;
        }
        if (null !== $this->periodId) {
            $res['period_id'] = $this->periodId;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->nick) {
            $res['nick'] = $this->nick;
        }
        if (null !== $this->nameMode) {
            $res['name_mode'] = $this->nameMode;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return result
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['period_type'])){
            $model->periodType = $map['period_type'];
        }
        if(isset($map['period_id'])){
            $model->periodId = $map['period_id'];
        }
        if(isset($map['name'])){
            $model->name = $map['name'];
        }
        if(isset($map['nick'])){
            $model->nick = $map['nick'];
        }
        if(isset($map['name_mode'])){
            $model->nameMode = $map['name_mode'];
        }
        return $model;
    }
    /**
     * @description 学段类型：（幼儿园：kindergarten、小学：primary_school，初中：middle_school，高中：high_school）
     * @var string
     */
    public $periodType;

    /**
     * @description 学段ID
     * @var int
     */
    public $periodId;

    /**
     * @description 学段名称
     * @var string
     */
    public $name;

    /**
     * @description 学段别名
     * @var string
     */
    public $nick;

    /**
     * @description 学段名称类型，text表示文本型，如中学为七年级，八年级，九年级，number表示数字型，如初中一年级1班，二年级1班等
     * @var string
     */
    public $nameMode;

}
