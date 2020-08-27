<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListOapiEduCampusResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model {
    protected $_name = [
        'campusId' => 'campus_id',
        'name' => 'name',
        'nick' => 'nick',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->campusId) {
            $res['campus_id'] = $this->campusId;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->nick) {
            $res['nick'] = $this->nick;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return result
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['campus_id'])){
            $model->campusId = $map['campus_id'];
        }
        if(isset($map['name'])){
            $model->name = $map['name'];
        }
        if(isset($map['nick'])){
            $model->nick = $map['nick'];
        }
        return $model;
    }
    /**
     * @description 校区ID
     * @var int
     */
    public $campusId;

    /**
     * @description 校区名称
     * @var string
     */
    public $name;

    /**
     * @description 校区别名
     * @var string
     */
    public $nick;

}
