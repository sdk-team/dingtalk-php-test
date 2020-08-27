<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\Send_to_single_conversationOapiMessageParams;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\Send_to_single_conversationOapiMessageParams\msg\markdown;

class msg extends Model {
    protected $_name = [
        'msgtype' => 'msgtype',
        'markdown' => 'markdown',
    ];
    public function validate() {
        Model::validateRequired('msgtype', $this->msgtype, true);
        Model::validateRequired('markdown', $this->markdown, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->msgtype) {
            $res['msgtype'] = $this->msgtype;
        }
        if (null !== $this->markdown) {
            $res['markdown'] = null !== $this->markdown ? $this->markdown->toMap() : null;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return msg
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['msgtype'])){
            $model->msgtype = $map['msgtype'];
        }
        if(isset($map['markdown'])){
            $model->markdown = markdown::fromMap($map['markdown']);
        }
        return $model;
    }
    /**
     * @description 消息内容类型,目前只支持markdown
     * @var string
     */
    public $msgtype;

    /**
     * @description markdown消息内容
     * @var markdown
     */
    public $markdown;

}
