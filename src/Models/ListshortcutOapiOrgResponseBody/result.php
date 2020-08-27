<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListshortcutOapiOrgResponseBody;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListshortcutOapiOrgResponseBody\result\shortcuts;

class result extends Model {
    protected $_name = [
        'shortcuts' => 'shortcuts',
        'errcode' => 'errcode',
        'errmsg' => 'errmsg',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->shortcuts) {
            $res['shortcuts'] = [];
            if(null !== $this->shortcuts && is_array($this->shortcuts)){
                $n = 0;
                foreach($this->shortcuts as $item){
                    $res['shortcuts'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->errcode) {
            $res['errcode'] = $this->errcode;
        }
        if (null !== $this->errmsg) {
            $res['errmsg'] = $this->errmsg;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return result
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['shortcuts'])){
            if(!empty($map['shortcuts'])){
                $model->shortcuts = [];
                $n = 0;
                foreach($map['shortcuts'] as $item) {
                    $model->shortcuts[$n++] = null !== $item ? shortcuts::fromMap($item) : $item;
                }
            }
        }
        if(isset($map['errcode'])){
            $model->errcode = $map['errcode'];
        }
        if(isset($map['errmsg'])){
            $model->errmsg = $map['errmsg'];
        }
        return $model;
    }
    /**
     * @description result
     * @var array
     */
    public $shortcuts;

    /**
     * @description dingOpenErrcode
     * @var int
     */
    public $errcode;

    /**
     * @description errorMsg
     * @var string
     */
    public $errmsg;

}
