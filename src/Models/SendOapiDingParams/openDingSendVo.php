<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\SendOapiDingParams;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\SendOapiDingParams\openDingSendVo\attachment;

class openDingSendVo extends Model {
    protected $_name = [
        'attachment' => 'attachment',
        'textContent' => 'text_content',
        'receiverUids' => 'receiver_uids',
        'remindType' => 'remind_type',
    ];
    public function validate() {
        Model::validateRequired('textContent', $this->textContent, true);
        Model::validateRequired('receiverUids', $this->receiverUids, true);
        Model::validateRequired('remindType', $this->remindType, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->attachment) {
            $res['attachment'] = null !== $this->attachment ? $this->attachment->toMap() : null;
        }
        if (null !== $this->textContent) {
            $res['text_content'] = $this->textContent;
        }
        if (null !== $this->receiverUids) {
            $res['receiver_uids'] = $this->receiverUids;
        }
        if (null !== $this->remindType) {
            $res['remind_type'] = $this->remindType;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return openDingSendVo
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['attachment'])){
            $model->attachment = attachment::fromMap($map['attachment']);
        }
        if(isset($map['text_content'])){
            $model->textContent = $map['text_content'];
        }
        if(isset($map['receiver_uids'])){
            if(!empty($map['receiver_uids'])){
                $model->receiverUids = $map['receiver_uids'];
            }
        }
        if(isset($map['remind_type'])){
            $model->remindType = $map['remind_type'];
        }
        return $model;
    }
    /**
     * @description 附件
     * @var attachment
     */
    public $attachment;

    /**
     * @description 通知内容
     * @var string
     */
    public $textContent;

    /**
     * @description 接收者工号列表
     * @var array
     */
    public $receiverUids;

    /**
     * @description 提醒类型:1-应用内;2-短信
     * @var int
     */
    public $remindType;

}
