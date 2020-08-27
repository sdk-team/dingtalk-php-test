<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\FinishOapiAttendanceApproveResponseBody;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\FinishOapiAttendanceApproveResponseBody\result\durationDetail;

class result extends Model {
    protected $_name = [
        'duration' => 'duration',
        'durationDetail' => 'durationDetail',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->duration) {
            $res['duration'] = $this->duration;
        }
        if (null !== $this->durationDetail) {
            $res['durationDetail'] = [];
            if(null !== $this->durationDetail && is_array($this->durationDetail)){
                $n = 0;
                foreach($this->durationDetail as $item){
                    $res['durationDetail'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return result
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['duration'])){
            $model->duration = $map['duration'];
        }
        if(isset($map['durationDetail'])){
            if(!empty($map['durationDetail'])){
                $model->durationDetail = [];
                $n = 0;
                foreach($map['durationDetail'] as $item) {
                    $model->durationDetail[$n++] = null !== $item ? durationDetail::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description 总时长
     * @var string
     */
    public $duration;

    /**
     * @description demo
     * @var array
     */
    public $durationDetail;

}
