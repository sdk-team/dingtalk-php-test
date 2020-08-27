<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListOapiRhinoMosExecTrackTrackconditionResponseBody;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListOapiRhinoMosExecTrackTrackconditionResponseBody\model\result;

class model extends Model {
    protected $_name = [
        'currentStart' => 'current_start',
        'pageSize' => 'page_size',
        'result' => 'result',
        'total' => 'total',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->currentStart) {
            $res['current_start'] = $this->currentStart;
        }
        if (null !== $this->pageSize) {
            $res['page_size'] = $this->pageSize;
        }
        if (null !== $this->result) {
            $res['result'] = [];
            if(null !== $this->result && is_array($this->result)){
                $n = 0;
                foreach($this->result as $item){
                    $res['result'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->total) {
            $res['total'] = $this->total;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return model
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['current_start'])){
            $model->currentStart = $map['current_start'];
        }
        if(isset($map['page_size'])){
            $model->pageSize = $map['page_size'];
        }
        if(isset($map['result'])){
            if(!empty($map['result'])){
                $model->result = [];
                $n = 0;
                foreach($map['result'] as $item) {
                    $model->result[$n++] = null !== $item ? result::fromMap($item) : $item;
                }
            }
        }
        if(isset($map['total'])){
            $model->total = $map['total'];
        }
        return $model;
    }
    /**
     * @description 当前起始位置
     * @var int
     */
    public $currentStart;

    /**
     * @description 每页大小
     * @var int
     */
    public $pageSize;

    /**
     * @description 追踪记录
     * @var array
     */
    public $result;

    /**
     * @description 总数
     * @var int
     */
    public $total;

}
