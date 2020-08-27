<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class ListOapiEduGradeParams extends Model {
    protected $_name = [
        'periodId' => 'period_id',
    ];
    public function validate() {
        Model::validateRequired('periodId', $this->periodId, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->periodId) {
            $res['period_id'] = $this->periodId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return ListOapiEduGradeParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['period_id'])){
            $model->periodId = $map['period_id'];
        }
        return $model;
    }
    /**
     * @description 学段ID
     * @var int
     */
    public $periodId;

}
