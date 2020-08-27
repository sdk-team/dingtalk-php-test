<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListOapiProcessTemplateResponseBody;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListOapiProcessTemplateResponseBody\result\templateList;

class result extends Model {
    protected $_name = [
        'templateList' => 'template_list',
        'nextCursor' => 'next_cursor',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->templateList) {
            $res['template_list'] = [];
            if(null !== $this->templateList && is_array($this->templateList)){
                $n = 0;
                foreach($this->templateList as $item){
                    $res['template_list'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if(isset($map['template_list'])){
            if(!empty($map['template_list'])){
                $model->templateList = [];
                $n = 0;
                foreach($map['template_list'] as $item) {
                    $model->templateList[$n++] = null !== $item ? templateList::fromMap($item) : $item;
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
    public $templateList;

    /**
     * @description 下次调用时的offset入参
     * @var string
     */
    public $nextCursor;

}
