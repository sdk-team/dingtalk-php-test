<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\SendOapiChatParams\msg;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\SendOapiChatParams\msg\actionCard\btnJsonList;

class actionCard extends Model {
    protected $_name = [
        'agentid' => 'agentid',
        'btnJsonList' => 'btn_json_list',
        'btnOrientation' => 'btn_orientation',
        'singleUrl' => 'single_url',
        'singleTitle' => 'single_title',
        'markdown' => 'markdown',
        'title' => 'title',
        'hideAvatar' => 'hide_avatar',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->agentid) {
            $res['agentid'] = $this->agentid;
        }
        if (null !== $this->btnJsonList) {
            $res['btn_json_list'] = [];
            if(null !== $this->btnJsonList && is_array($this->btnJsonList)){
                $n = 0;
                foreach($this->btnJsonList as $item){
                    $res['btn_json_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->btnOrientation) {
            $res['btn_orientation'] = $this->btnOrientation;
        }
        if (null !== $this->singleUrl) {
            $res['single_url'] = $this->singleUrl;
        }
        if (null !== $this->singleTitle) {
            $res['single_title'] = $this->singleTitle;
        }
        if (null !== $this->markdown) {
            $res['markdown'] = $this->markdown;
        }
        if (null !== $this->title) {
            $res['title'] = $this->title;
        }
        if (null !== $this->hideAvatar) {
            $res['hide_avatar'] = $this->hideAvatar;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return actionCard
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['agentid'])){
            $model->agentid = $map['agentid'];
        }
        if(isset($map['btn_json_list'])){
            if(!empty($map['btn_json_list'])){
                $model->btnJsonList = [];
                $n = 0;
                foreach($map['btn_json_list'] as $item) {
                    $model->btnJsonList[$n++] = null !== $item ? btnJsonList::fromMap($item) : $item;
                }
            }
        }
        if(isset($map['btn_orientation'])){
            $model->btnOrientation = $map['btn_orientation'];
        }
        if(isset($map['single_url'])){
            $model->singleUrl = $map['single_url'];
        }
        if(isset($map['single_title'])){
            $model->singleTitle = $map['single_title'];
        }
        if(isset($map['markdown'])){
            $model->markdown = $map['markdown'];
        }
        if(isset($map['title'])){
            $model->title = $map['title'];
        }
        if(isset($map['hide_avatar'])){
            $model->hideAvatar = $map['hide_avatar'];
        }
        return $model;
    }
    /**
     * @description agentid
     * @var string
     */
    public $agentid;

    /**
     * @description 使用独立跳转ActionCard样式时的按钮列表；必须与btn_orientation同时设置
     * @var array
     */
    public $btnJsonList;

    /**
     * @description 使用独立跳转ActionCard样式时的按钮排列方式，竖直排列(0)，横向排列(1)；必须与btn_json_list同时设置
     * @var string
     */
    public $btnOrientation;

    /**
     * @description 消息点击链接地址，当发送消息为小程序时支持小程序跳转链接，最长500个字符
     * @var string
     */
    public $singleUrl;

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
     * @description 透出到会话列表和通知的文案，最长64个字符
     * @var string
     */
    public $title;

    /**
     * @description 是否隐藏发送者头像
     * @var bool
     */
    public $hideAvatar;

}
