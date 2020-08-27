<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\BatchupdateOapiProcessWorkrecordParams;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\BatchupdateOapiProcessWorkrecordParams\request\instances;

class request extends Model {
    protected $_name = [
        'instances' => 'instances',
        'agentid' => 'agentid',
    ];
    public function validate() {
        Model::validateRequired('instances', $this->instances, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->instances) {
            $res['instances'] = [];
            if(null !== $this->instances && is_array($this->instances)){
                $n = 0;
                foreach($this->instances as $item){
                    $res['instances'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->agentid) {
            $res['agentid'] = $this->agentid;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return request
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['instances'])){
            if(!empty($map['instances'])){
                $model->instances = [];
                $n = 0;
                foreach($map['instances'] as $item) {
                    $model->instances[$n++] = null !== $item ? instances::fromMap($item) : $item;
                }
            }
        }
        if(isset($map['agentid'])){
            $model->agentid = $map['agentid'];
        }
        return $model;
    }
    /**
     * @description 实例列表
     * @var array
     */
    public $instances;

    /**
     * @description 企业应用标识
     * @var int
     */
    public $agentid;

}
