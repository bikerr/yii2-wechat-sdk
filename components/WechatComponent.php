<?php
namespace callmez\wechat\sdk\components;

use yii\base\Component;

/**
 * 微信
 * @package callmez\wechat\sdk\components
 */
class WechatComponent extends Component
{
    /**
     * @var BaseWechat
     */
    protected $wechat;

    /**
     * @param BaseWechat $wechat
     * @param array $config
     */
    public function __construct(BaseWechat $wechat, $config = [])
    {
        $this->wechat = $wechat;
        parent::__construct($config);
    }
}