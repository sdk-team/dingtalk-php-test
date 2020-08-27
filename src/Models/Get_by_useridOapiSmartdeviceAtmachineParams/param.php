<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\Get_by_useridOapiSmartdeviceAtmachineParams;

use AlibabaCloud\Tea\Model;

class param extends Model {
    protected $_name = [
        'offset' => 'offset',
        'size' => 'size',
        'userid' => 'userid',
    ];
    public function validate() {
        Model::validateRequired('offset', $this->offset, true);
        Model::validateRequired('size', $this->size, true);
        Model::validateRequired('userid', $this->userid, true);
        Model::validateMaximum('size', $this->size, 50);
        Model::validateMinimum('size', $this->size, 1);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->offset) {
            $res['offset'] = $this->offset;
        }
        if (null !== $this->size) {
            $res['size'] = $this->size;
        }
        if (null !== $this->userid) {
            $res['userid'] = $this->userid;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return param
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['offset'])){
            $model->offset = $map['offset'];
        }
        if(isset($map['size'])){
            $model->size = $map['size'];
        }
        if(isset($map['userid'])){
            $model->userid = $map['userid'];
        }
        return $model;
    }
    /**
     * @description 偏移值
     * @var int
     */
    public $offset;

    /**
     * @description 每页大小
     * @var int
     */
    public $size;

    /**
     * @description 员工id
     * @var string
     */
    public $userid;

}
