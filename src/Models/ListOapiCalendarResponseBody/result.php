<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListOapiCalendarResponseBody;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListOapiCalendarResponseBody\result\items;

class result extends Model {
    protected $_name = [
        'summary' => 'summary',
        'items' => 'items',
        'nextPageToken' => 'next_page_token',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->summary) {
            $res['summary'] = $this->summary;
        }
        if (null !== $this->items) {
            $res['items'] = [];
            if(null !== $this->items && is_array($this->items)){
                $n = 0;
                foreach($this->items as $item){
                    $res['items'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->nextPageToken) {
            $res['next_page_token'] = $this->nextPageToken;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return result
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['summary'])){
            $model->summary = $map['summary'];
        }
        if(isset($map['items'])){
            if(!empty($map['items'])){
                $model->items = [];
                $n = 0;
                foreach($map['items'] as $item) {
                    $model->items[$n++] = null !== $item ? items::fromMap($item) : $item;
                }
            }
        }
        if(isset($map['next_page_token'])){
            $model->nextPageToken = $map['next_page_token'];
        }
        return $model;
    }
    /**
     * @description 文件夹描述
     * @var string
     */
    public $summary;

    /**
     * @description 日程的实体
     * @var array
     */
    public $items;

    /**
     * @description 请求结果若还有更多，则返回下一页的token值
     * @var string
     */
    public $nextPageToken;

}
