<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\SendOapiMessageMassParams\msgBody;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\SendOapiMessageMassParams\msgBody\actionCard\buttonList;

class actionCard extends Model {
    protected $_name = [
        'btnOrientation' => 'btn_orientation',
        'singleTitle' => 'single_title',
        'markdown' => 'markdown',
        'buttonList' => 'button_list',
        'singleUrl' => 'single_url',
        'title' => 'title',
    ];
    public function validate() {
        Model::validateMaxLength('btnOrientation', $this->btnOrientation, 5);
        Model::validateMaxLength('singleTitle', $this->singleTitle, 20);
        Model::validateMaxLength('markdown', $this->markdown, 1000);
        Model::validateMaxLength('singleUrl', $this->singleUrl, 700);
        Model::validateMaxLength('title', $this->title, 64);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->btnOrientation) {
            $res['btn_orientation'] = $this->btnOrientation;
        }
        if (null !== $this->singleTitle) {
            $res['single_title'] = $this->singleTitle;
        }
        if (null !== $this->markdown) {
            $res['markdown'] = $this->markdown;
        }
        if (null !== $this->buttonList) {
            $res['button_list'] = [];
            if(null !== $this->buttonList && is_array($this->buttonList)){
                $n = 0;
                foreach($this->buttonList as $item){
                    $res['button_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->singleUrl) {
            $res['single_url'] = $this->singleUrl;
        }
        if (null !== $this->title) {
            $res['title'] = $this->title;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return actionCard
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['btn_orientation'])){
            $model->btnOrientation = $map['btn_orientation'];
        }
        if(isset($map['single_title'])){
            $model->singleTitle = $map['single_title'];
        }
        if(isset($map['markdown'])){
            $model->markdown = $map['markdown'];
        }
        if(isset($map['button_list'])){
            if(!empty($map['button_list'])){
                $model->buttonList = [];
                $n = 0;
                foreach($map['button_list'] as $item) {
                    $model->buttonList[$n++] = null !== $item ? buttonList::fromMap($item) : $item;
                }
            }
        }
        if(isset($map['single_url'])){
            $model->singleUrl = $map['single_url'];
        }
        if(isset($map['title'])){
            $model->title = $map['title'];
        }
        return $model;
    }
    /**
     * @description 使用独立跳转ActionCard样式时的按钮排列方式，竖直排列(0)，横向排列(1)；必须与button_list同时设置
     * @var string
     */
    public $btnOrientation;

    /**
     * @description 使用整体跳转ActionCard样式时的标题，必须与single_url同时设置，最长20个字符
     * @var string
     */
    public $singleTitle;

    /**
     * @description 消息内容，支持markdown，语法参考标准markdown语法。建议1000个字符以内
     * @var string
     */
    public $markdown;

    /**
     * @description 使用独立跳转ActionCard样式时的按钮列表；必须与btn_orientation同时设置
     * @var array
     */
    public $buttonList;

    /**
     * @description 消息点击链接地址，当发送消息为小程序时支持小程序跳转链接，最长500个字符
     * @var string
     */
    public $singleUrl;

    /**
     * @description 透出到会话列表和通知的文案，最长64个字符
     * @var string
     */
    public $title;

}
