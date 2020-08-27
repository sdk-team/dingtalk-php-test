<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\QueryOapiRhinoHumanresProcessStructuralClusterResponseBody\model;

use AlibabaCloud\Tea\Model;

class processStructuralCluster extends Model {
    protected $_name = [
        'stitch' => 'stitch',
        'part' => 'part',
        'action' => 'action',
        'position' => 'position',
        'id' => 'id',
        'accessory' => 'accessory',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->stitch) {
            $res['stitch'] = $this->stitch;
        }
        if (null !== $this->part) {
            $res['part'] = $this->part;
        }
        if (null !== $this->action) {
            $res['action'] = $this->action;
        }
        if (null !== $this->position) {
            $res['position'] = $this->position;
        }
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        if (null !== $this->accessory) {
            $res['accessory'] = $this->accessory;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return processStructuralCluster
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['stitch'])){
            $model->stitch = $map['stitch'];
        }
        if(isset($map['part'])){
            $model->part = $map['part'];
        }
        if(isset($map['action'])){
            $model->action = $map['action'];
        }
        if(isset($map['position'])){
            $model->position = $map['position'];
        }
        if(isset($map['id'])){
            $model->id = $map['id'];
        }
        if(isset($map['accessory'])){
            $model->accessory = $map['accessory'];
        }
        return $model;
    }
    /**
     * @description 线迹
     * @var string
     */
    public $stitch;

    /**
     * @description 部件
     * @var string
     */
    public $part;

    /**
     * @description 动作
     * @var string
     */
    public $action;

    /**
     * @description 部位
     * @var string
     */
    public $position;

    /**
     * @description 主键
     * @var int
     */
    public $id;

    /**
     * @description 辅料
     * @var string
     */
    public $accessory;

}
