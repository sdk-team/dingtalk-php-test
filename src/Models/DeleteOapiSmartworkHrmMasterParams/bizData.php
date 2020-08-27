<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\DeleteOapiSmartworkHrmMasterParams;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\DeleteOapiSmartworkHrmMasterParams\bizData\fields;
use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\DeleteOapiSmartworkHrmMasterParams\bizData\scope;

class bizData extends Model {
    protected $_name = [
        'fields' => 'fields',
        'scope' => 'scope',
        'bizTime' => 'biz_time',
        'bizUk' => 'biz_uk',
        'userid' => 'userid',
    ];
    public function validate() {
        Model::validateRequired('fields', $this->fields, true);
        Model::validateRequired('scope', $this->scope, true);
        Model::validateRequired('bizTime', $this->bizTime, true);
        Model::validateRequired('bizUk', $this->bizUk, true);
        Model::validateRequired('userid', $this->userid, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->fields) {
            $res['fields'] = [];
            if(null !== $this->fields && is_array($this->fields)){
                $n = 0;
                foreach($this->fields as $item){
                    $res['fields'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->scope) {
            $res['scope'] = null !== $this->scope ? $this->scope->toMap() : null;
        }
        if (null !== $this->bizTime) {
            $res['biz_time'] = $this->bizTime;
        }
        if (null !== $this->bizUk) {
            $res['biz_uk'] = $this->bizUk;
        }
        if (null !== $this->userid) {
            $res['userid'] = $this->userid;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return bizData
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['fields'])){
            if(!empty($map['fields'])){
                $model->fields = [];
                $n = 0;
                foreach($map['fields'] as $item) {
                    $model->fields[$n++] = null !== $item ? fields::fromMap($item) : $item;
                }
            }
        }
        if(isset($map['scope'])){
            $model->scope = scope::fromMap($map['scope']);
        }
        if(isset($map['biz_time'])){
            $model->bizTime = $map['biz_time'];
        }
        if(isset($map['biz_uk'])){
            $model->bizUk = $map['biz_uk'];
        }
        if(isset($map['userid'])){
            $model->userid = $map['userid'];
        }
        return $model;
    }
    /**
     * @description 字段列表
     * @var array
     */
    public $fields;

    /**
     * @description 数据所属业务域
     * @var scope
     */
    public $scope;

    /**
     * @description 数据业务时间戳
     * @var int
     */
    public $bizTime;

    /**
     * @description 业务uk，唯一标识一条流水
     * @var string
     */
    public $bizUk;

    /**
     * @description 员工id
     * @var string
     */
    public $userid;

}
