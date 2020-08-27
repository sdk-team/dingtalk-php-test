<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\CalculateOapiAttendanceApproveDurationResponseBody;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\CalculateOapiAttendanceApproveDurationResponseBody\result\durationDetails;

class result extends Model {
    protected $_name = [
        'duration' => 'duration',
        'durationDetails' => 'duration_details',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->duration) {
            $res['duration'] = $this->duration;
        }
        if (null !== $this->durationDetails) {
            $res['duration_details'] = [];
            if(null !== $this->durationDetails && is_array($this->durationDetails)){
                $n = 0;
                foreach($this->durationDetails as $item){
                    $res['duration_details'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if(isset($map['duration_details'])){
            if(!empty($map['duration_details'])){
                $model->durationDetails = [];
                $n = 0;
                foreach($map['duration_details'] as $item) {
                    $model->durationDetails[$n++] = null !== $item ? durationDetails::fromMap($item) : $item;
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
    public $durationDetails;

}
