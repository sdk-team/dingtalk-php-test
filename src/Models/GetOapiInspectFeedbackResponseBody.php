<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetOapiInspectFeedbackResponseBody\feedbackForm;

class GetOapiInspectFeedbackResponseBody extends Model {
    protected $_name = [
        'errmsg' => 'errmsg',
        'errcode' => 'errcode',
        'feedbackForm' => 'feedback_form',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->errmsg) {
            $res['errmsg'] = $this->errmsg;
        }
        if (null !== $this->errcode) {
            $res['errcode'] = $this->errcode;
        }
        if (null !== $this->feedbackForm) {
            $res['feedback_form'] = null !== $this->feedbackForm ? $this->feedbackForm->toMap() : null;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return GetOapiInspectFeedbackResponseBody
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['errmsg'])){
            $model->errmsg = $map['errmsg'];
        }
        if(isset($map['errcode'])){
            $model->errcode = $map['errcode'];
        }
        if(isset($map['feedback_form'])){
            $model->feedbackForm = feedbackForm::fromMap($map['feedback_form']);
        }
        return $model;
    }
    /**
     * @description 错误描述
     * @var string
     */
    public $errmsg;

    /**
     * @description 错误码
     * @var int
     */
    public $errcode;

    /**
     * @description 反馈表单
     * @var feedbackForm
     */
    public $feedbackForm;

}
