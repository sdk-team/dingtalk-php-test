<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\SetuserworkdataCorpHrmEmployeeParams;

use AlibabaCloud\Tea\Model;

class hrmApiUserDataModel extends Model {
    protected $_name = [
        'dataDesc' => 'data_desc',
        'userid' => 'userid',
        'dataValue' => 'data_value',
    ];
    public function validate() {
        Model::validateRequired('userid', $this->userid, true);
        Model::validateRequired('dataValue', $this->dataValue, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->dataDesc) {
            $res['data_desc'] = $this->dataDesc;
        }
        if (null !== $this->userid) {
            $res['userid'] = $this->userid;
        }
        if (null !== $this->dataValue) {
            $res['data_value'] = $this->dataValue;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return hrmApiUserDataModel
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['data_desc'])){
            $model->dataDesc = $map['data_desc'];
        }
        if(isset($map['userid'])){
            $model->userid = $map['userid'];
        }
        if(isset($map['data_value'])){
            $model->dataValue = $map['data_value'];
        }
        return $model;
    }
    /**
     * @description 数据项描述信息
     * @var string
     */
    public $dataDesc;

    /**
     * @description 被操作人userid
     * @var string
     */
    public $userid;

    /**
     * @description 数据值,可以为数值或者字符串
     * @var string
     */
    public $dataValue;

}
