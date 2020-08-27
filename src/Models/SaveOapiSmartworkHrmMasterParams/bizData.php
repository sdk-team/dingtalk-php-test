<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\SaveOapiSmartworkHrmMasterParams;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\SaveOapiSmartworkHrmMasterParams\bizData\scope;
use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\SaveOapiSmartworkHrmMasterParams\bizData\fields;

class bizData extends Model {
    protected $_name = [
        'userid' => 'userid',
        'bizUk' => 'biz_uk',
        'bizTime' => 'biz_time',
        'scope' => 'scope',
        'fields' => 'fields',
    ];
    public function validate() {
        Model::validateRequired('userid', $this->userid, true);
        Model::validateRequired('bizUk', $this->bizUk, true);
        Model::validateRequired('bizTime', $this->bizTime, true);
        Model::validateRequired('scope', $this->scope, true);
        Model::validateRequired('fields', $this->fields, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->userid) {
            $res['userid'] = $this->userid;
        }
        if (null !== $this->bizUk) {
            $res['biz_uk'] = $this->bizUk;
        }
        if (null !== $this->bizTime) {
            $res['biz_time'] = $this->bizTime;
        }
        if (null !== $this->scope) {
            $res['scope'] = null !== $this->scope ? $this->scope->toMap() : null;
        }
        if (null !== $this->fields) {
            $res['fields'] = [];
            if(null !== $this->fields && is_array($this->fields)){
                $n = 0;
                foreach($this->fields as $item){
                    $res['fields'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return bizData
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['userid'])){
            $model->userid = $map['userid'];
        }
        if(isset($map['biz_uk'])){
            $model->bizUk = $map['biz_uk'];
        }
        if(isset($map['biz_time'])){
            $model->bizTime = $map['biz_time'];
        }
        if(isset($map['scope'])){
            $model->scope = scope::fromMap($map['scope']);
        }
        if(isset($map['fields'])){
            if(!empty($map['fields'])){
                $model->fields = [];
                $n = 0;
                foreach($map['fields'] as $item) {
                    $model->fields[$n++] = null !== $item ? fields::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description 员工id
     * @var string
     */
    public $userid;

    /**
     * @description 数据流水唯一标识，如流水号，用以唯一确认一条写入数据
     * @var string
     */
    public $bizUk;

    /**
     * @description 数据变更时间戳，用以保证更新操作的顺序性
     * @var int
     */
    public $bizTime;

    /**
     * @description 业务域描述，系统分配，枚举见文档
     * @var scope
     */
    public $scope;

    /**
     * @description 数据字段列表
     * @var array
     */
    public $fields;

}
