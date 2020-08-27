<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\BatchaddOapiAtsJobResponseBody\result;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\BatchaddOapiAtsJobResponseBody\result\result\result;

class result extends Model {
    protected $_name = [
        'result' => 'result',
        'failedCount' => 'failed_count',
        'successCount' => 'success_count',
        'totalCount' => 'total_count',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->result) {
            $res['result'] = [];
            if(null !== $this->result && is_array($this->result)){
                $n = 0;
                foreach($this->result as $item){
                    $res['result'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->failedCount) {
            $res['failed_count'] = $this->failedCount;
        }
        if (null !== $this->successCount) {
            $res['success_count'] = $this->successCount;
        }
        if (null !== $this->totalCount) {
            $res['total_count'] = $this->totalCount;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return result
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['result'])){
            if(!empty($map['result'])){
                $model->result = [];
                $n = 0;
                foreach($map['result'] as $item) {
                    $model->result[$n++] = null !== $item ? result::fromMap($item) : $item;
                }
            }
        }
        if(isset($map['failed_count'])){
            $model->failedCount = $map['failed_count'];
        }
        if(isset($map['success_count'])){
            $model->successCount = $map['success_count'];
        }
        if(isset($map['total_count'])){
            $model->totalCount = $map['total_count'];
        }
        return $model;
    }
    /**
     * @description 职位列表
     * @var array
     */
    public $result;

    /**
     * @description 失败数量
     * @var int
     */
    public $failedCount;

    /**
     * @description 成功数量
     * @var int
     */
    public $successCount;

    /**
     * @description 总数量
     * @var int
     */
    public $totalCount;

}
