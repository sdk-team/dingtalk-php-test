<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListidsOapiProcessinstanceResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model {
    protected $_name = [
        'list' => 'list',
        'nextCursor' => 'next_cursor',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->list) {
            $res['list'] = $this->list;
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
        if(isset($map['list'])){
            if(!empty($map['list'])){
                $model->list = $map['list'];
            }
        }
        if(isset($map['next_cursor'])){
            $model->nextCursor = $map['next_cursor'];
        }
        return $model;
    }
    /**
     * @description id列表
     * @var array
     */
    public $list;

    /**
     * @description 表示下次查询的游标，当返回结果没有该字段时表示没有更多数据了
     * @var int
     */
    public $nextCursor;

}
