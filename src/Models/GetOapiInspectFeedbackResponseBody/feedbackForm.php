<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetOapiInspectFeedbackResponseBody;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetOapiInspectFeedbackResponseBody\feedbackForm\content;

class feedbackForm extends Model {
    protected $_name = [
        'formInstId' => 'form_inst_id',
        'title' => 'title',
        'content' => 'content',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->formInstId) {
            $res['form_inst_id'] = $this->formInstId;
        }
        if (null !== $this->title) {
            $res['title'] = $this->title;
        }
        if (null !== $this->content) {
            $res['content'] = [];
            if(null !== $this->content && is_array($this->content)){
                $n = 0;
                foreach($this->content as $item){
                    $res['content'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return feedbackForm
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['form_inst_id'])){
            $model->formInstId = $map['form_inst_id'];
        }
        if(isset($map['title'])){
            $model->title = $map['title'];
        }
        if(isset($map['content'])){
            if(!empty($map['content'])){
                $model->content = [];
                $n = 0;
                foreach($map['content'] as $item) {
                    $model->content[$n++] = null !== $item ? content::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description 表单唯一标识
     * @var string
     */
    public $formInstId;

    /**
     * @description 表单标题
     * @var string
     */
    public $title;

    /**
     * @description 表单内容
     * @var array
     */
    public $content;

}
