<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ModifyOapiRelationRemarkParams\markees;

class ModifyOapiRelationRemarkParams extends Model {
    protected $_name = [
        'markers' => 'markers',
        'markees' => 'markees',
    ];
    public function validate() {
        Model::validateRequired('markers', $this->markers, true);
        Model::validateRequired('markees', $this->markees, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->markers) {
            $res['markers'] = $this->markers;
        }
        if (null !== $this->markees) {
            $res['markees'] = [];
            if(null !== $this->markees && is_array($this->markees)){
                $n = 0;
                foreach($this->markees as $item){
                    $res['markees'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return ModifyOapiRelationRemarkParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['markers'])){
            if(!empty($map['markers'])){
                $model->markers = $map['markers'];
            }
        }
        if(isset($map['markees'])){
            if(!empty($map['markees'])){
                $model->markees = [];
                $n = 0;
                foreach($map['markees'] as $item) {
                    $model->markees[$n++] = null !== $item ? markees::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description 修改者的userid
     * @var array
     */
    public $markers;

    /**
     * @description 系统自动生成
     * @var array
     */
    public $markees;

}
