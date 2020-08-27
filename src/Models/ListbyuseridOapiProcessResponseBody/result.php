<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListbyuseridOapiProcessResponseBody;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListbyuseridOapiProcessResponseBody\result\processList;

class result extends Model {
    protected $_name = [
        'processList' => 'process_list',
        'nextCursor' => 'next_cursor',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->processList) {
            $res['process_list'] = [];
            if(null !== $this->processList && is_array($this->processList)){
                $n = 0;
                foreach($this->processList as $item){
                    $res['process_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->nextCursor) {
            $res['next_cursor'] = $this->nextCursor;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return result
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['process_list'])){
            if(!empty($map['process_list'])){
                $model->processList = [];
                $n = 0;
                foreach($map['process_list'] as $item) {
                    $model->processList[$n++] = null !== $item ? processList::fromMap($item) : $item;
                }
            }
        }
        if(isset($map['next_cursor'])){
            $model->nextCursor = $map['next_cursor'];
        }
        return $model;
    }
    /**
     * @description list
     * @var array
     */
    public $processList;

    /**
     * @description 下一次分页调用的offset值，当返回结果里没有nextCursor时，表示分页结束
     * @var int
     */
    public $nextCursor;

}
