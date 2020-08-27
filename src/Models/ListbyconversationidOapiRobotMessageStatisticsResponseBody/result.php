<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListbyconversationidOapiRobotMessageStatisticsResponseBody;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListbyconversationidOapiRobotMessageStatisticsResponseBody\result\list_;
use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListbyconversationidOapiRobotMessageStatisticsResponseBody\result\pagination;

class result extends Model {
    protected $_name = [
        'list' => 'list',
        'pagination' => 'pagination',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->list) {
            $res['list'] = [];
            if(null !== $this->list && is_array($this->list)){
                $n = 0;
                foreach($this->list as $item){
                    $res['list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->pagination) {
            $res['pagination'] = null !== $this->pagination ? $this->pagination->toMap() : null;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return result
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['list'])){
            if(!empty($map['list'])){
                $model->list = [];
                $n = 0;
                foreach($map['list'] as $item) {
                    $model->list[$n++] = null !== $item ? list_::fromMap($item) : $item;
                }
            }
        }
        if(isset($map['pagination'])){
            $model->pagination = pagination::fromMap($map['pagination']);
        }
        return $model;
    }
    /**
     * @description list
     * @var array
     */
    public $list;

    /**
     * @description pagination
     * @var pagination
     */
    public $pagination;

}
