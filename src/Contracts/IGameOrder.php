<?php
namespace Hanoivip\GameContracts\Contracts;

use Hanoivip\GameContracts\ViewObjects\ServerVO;
use Hanoivip\GameContracts\ViewObjects\UserVO;

/**
 * @author GameOH
 *
 */
interface IGameOrder
{
    /**
     * Request open new order from game services
     *
     * @param UserVO $user
     * @param ServerVO|string $server
     * @param string $package Recharge package code
     * @param string $role
     */
    public function order($user, $server, $package, $role);

    /**
     * Notify game about an order get paid
     *
     * @param UserVO $user
     * @param string $order Game order
     */
    public function orderNotify($user, $order);
    
    /**
     * Get order detail: items, owner info...
     * 
     * @param UserVO $user
     * @param string $order
     */
    public function orderDetail($user, $order);
    
}