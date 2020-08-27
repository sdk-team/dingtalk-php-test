<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\Send_to_conversationOapiMessageParams;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\Send_to_conversationOapiMessageParams\actionCard\btnJsonList;

class actionCard extends Model {
    protected $_name = [
        'markdown' => 'markdown',
        'title' => 'title',
        'singleTitle' => 'single_title',
        'singleUrl' => 'single_url',
        'btnOrientation' => 'btn_orientation',
        'btnJsonList' => 'btn_json_list',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->markdown) {
            $res['markdown'] = $this->markdown;
        }
        if (null !== $this->title) {
            $res['title'] = $this->title;
        }
        if (null !== $this->singleTitle) {
            $res['single_title'] = $this->singleTitle;
        }
        if (null !== $this->singleUrl) {
            $res['single_url'] = $this->singleUrl;
        }
        if (null !== $this->btnOrientation) {
            $res['btn_orientation'] = $this->btnOrientation;
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
        return $res;
    }
    /**
     * @param array $map
     * @return actionCard
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['markdown'])){
            $model->markdown = $map['markdown'];
        }
        if(isset($map['title'])){
            $model->title = $map['title'];
        }
        if(isset($map['single_title'])){
            $model->singleTitle = $map['single_title'];
        }
        if(isset($map['single_url'])){
            $model->singleUrl = $map['single_url'];
        }
        if(isset($map['btn_orientation'])){
            $model->btnOrientation = $map['btn_orientation'];
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
        return $model;
    }
    /**
     * @description 消息内容，支持markdown，语法参考标准markdown语法。图片举例：![alt text](mediaId)
     * @var string
     */
    public $markdown;

    /**
     * @description 透出到会话列表和通知的文案
     * @var string
     */
    public $title;

    /**
     * @description 使用整体跳转ActionCard样式时的标题，必须与single_url同时设置
     * @var string
     */
    public $singleTitle;

    /**
     * @description 使用整体跳转ActionCard样式时的链接url，必须与single_title同时设置
     * @var string
     */
    public $singleUrl;

    /**
     * @description 使用独立跳转ActionCard样式时的按钮排列方式，竖直排列(0)，横向排列(1)；必须与btn_json_list同时设置
     * @var string
     */
    public $btnOrientation;

    /**
     * @description 使用独立跳转ActionCard样式时的按钮列表；必须与btn_orientation同时设置
     * @var array
     */
    public $btnJsonList;

}
