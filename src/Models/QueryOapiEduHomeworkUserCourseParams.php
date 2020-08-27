<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class QueryOapiEduHomeworkUserCourseParams extends Model {
    protected $_name = [
        'bizCode' => 'biz_code',
        'userid' => 'userid',
    ];
    public function validate() {
        Model::validateRequired('bizCode', $this->bizCode, true);
        Model::validateRequired('userid', $this->userid, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->bizCode) {
            $res['biz_code'] = $this->bizCode;
        }
        if (null !== $this->userid) {
            $res['userid'] = $this->userid;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return QueryOapiEduHomeworkUserCourseParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['biz_code'])){
            $model->bizCode = $map['biz_code'];
        }
        if(isset($map['userid'])){
            $model->userid = $map['userid'];
        }
        return $model;
    }
    /**
     * @description 业务编码
     * @var string
     */
    public $bizCode;

    /**
     * @description 用户ID
     * @var string
     */
    public $userid;

}
