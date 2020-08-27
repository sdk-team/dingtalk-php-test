<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class ListOapiEduPeriodParams extends Model {
    protected $_name = [
        'campusId' => 'campus_id',
    ];
    public function validate() {
        Model::validateRequired('campusId', $this->campusId, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->campusId) {
            $res['campus_id'] = $this->campusId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return ListOapiEduPeriodParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['campus_id'])){
            $model->campusId = $map['campus_id'];
        }
        return $model;
    }
    /**
     * @description 校区ID
     * @var int
     */
    public $campusId;

}
