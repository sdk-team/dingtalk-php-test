<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListbypushidOapiRobotMessageStatisticsResponseBody;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListbypushidOapiRobotMessageStatisticsResponseBody\result\pagination;
use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListbypushidOapiRobotMessageStatisticsResponseBody\result\list_;

class result extends Model {
    protected $_name = [
        'pagination' => 'pagination',
        'list' => 'list',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->pagination) {
            $res['pagination'] = null !== $this->pagination ? $this->pagination->toMap() : null;
        }
        if (null !== $this->list) {
            $res['list'] = [];
            if(null !== $this->list && is_array($this->list)){
                $n = 0;
                foreach($this->list as $item){
                    $res['list'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if(isset($map['pagination'])){
            $model->pagination = pagination::fromMap($map['pagination']);
        }
        if(isset($map['list'])){
            if(!empty($map['list'])){
                $model->list = [];
                $n = 0;
                foreach($map['list'] as $item) {
                    $model->list[$n++] = null !== $item ? list_::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description pagination
     * @var pagination
     */
    public $pagination;

    /**
     * @description list
     * @var array
     */
    public $list;

}
