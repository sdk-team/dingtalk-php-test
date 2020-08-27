<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\QueryOapiEduHomeworkUserCourseResponseBody;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\QueryOapiEduHomeworkUserCourseResponseBody\result\contents;

class result extends Model {
    protected $_name = [
        'contents' => 'contents',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->contents) {
            $res['contents'] = [];
            if(null !== $this->contents && is_array($this->contents)){
                $n = 0;
                foreach($this->contents as $item){
                    $res['contents'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if(isset($map['contents'])){
            if(!empty($map['contents'])){
                $model->contents = [];
                $n = 0;
                foreach($map['contents'] as $item) {
                    $model->contents[$n++] = null !== $item ? contents::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description 科目内容详情
     * @var array
     */
    public $contents;

}
