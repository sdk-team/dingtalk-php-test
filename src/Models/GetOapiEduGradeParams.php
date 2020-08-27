<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class GetOapiEduGradeParams extends Model {
    protected $_name = [
        'gradeId' => 'grade_id',
    ];
    public function validate() {
        Model::validateRequired('gradeId', $this->gradeId, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->gradeId) {
            $res['grade_id'] = $this->gradeId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return GetOapiEduGradeParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['grade_id'])){
            $model->gradeId = $map['grade_id'];
        }
        return $model;
    }
    /**
     * @description 年级ID
     * @var int
     */
    public $gradeId;

}
