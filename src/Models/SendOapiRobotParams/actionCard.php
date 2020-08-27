<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\SendOapiRobotParams;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\SendOapiRobotParams\actionCard\btns;

class actionCard extends Model {
    protected $_name = [
        'hideAvatar' => 'hideAvatar',
        'btnOrientation' => 'btnOrientation',
        'singleURL' => 'singleURL',
        'singleTitle' => 'singleTitle',
        'text' => 'text',
        'title' => 'title',
        'btns' => 'btns',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->hideAvatar) {
            $res['hideAvatar'] = $this->hideAvatar;
        }
        if (null !== $this->btnOrientation) {
            $res['btnOrientation'] = $this->btnOrientation;
        }
        if (null !== $this->singleURL) {
            $res['singleURL'] = $this->singleURL;
        }
        if (null !== $this->singleTitle) {
            $res['singleTitle'] = $this->singleTitle;
        }
        if (null !== $this->text) {
            $res['text'] = $this->text;
        }
        if (null !== $this->title) {
            $res['title'] = $this->title;
        }
        if (null !== $this->btns) {
            $res['btns'] = [];
            if(null !== $this->btns && is_array($this->btns)){
                $n = 0;
                foreach($this->btns as $item){
                    $res['btns'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return actionCard
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['hideAvatar'])){
            $model->hideAvatar = $map['hideAvatar'];
        }
        if(isset($map['btnOrientation'])){
            $model->btnOrientation = $map['btnOrientation'];
        }
        if(isset($map['singleURL'])){
            $model->singleURL = $map['singleURL'];
        }
        if(isset($map['singleTitle'])){
            $model->singleTitle = $map['singleTitle'];
        }
        if(isset($map['text'])){
            $model->text = $map['text'];
        }
        if(isset($map['title'])){
            $model->title = $map['title'];
        }
        if(isset($map['btns'])){
            if(!empty($map['btns'])){
                $model->btns = [];
                $n = 0;
                foreach($map['btns'] as $item) {
                    $model->btns[$n++] = null !== $item ? btns::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description 0-正常发消息者头像,1-隐藏发消息者头像
     * @var string
     */
    public $hideAvatar;

    /**
     * @description 0-按钮竖直排列，1-按钮横向排列
     * @var string
     */
    public $btnOrientation;

    /**
     * @description 点击singleTitle按钮触发的URL
     * @var string
     */
    public $singleURL;

    /**
     * @description 单个按钮的方案。(设置此项和singleURL后btns无效。)
     * @var string
     */
    public $singleTitle;

    /**
     * @description markdown格式的消息
     * @var string
     */
    public $text;

    /**
     * @description 首屏会话透出的展示内容
     * @var string
     */
    public $title;

    /**
     * @description 按钮的信息
     * @var array
     */
    public $btns;

}
