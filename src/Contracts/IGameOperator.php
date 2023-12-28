<?php
namespace Hanoivip\GameContracts\Contracts;

use Hanoivip\GameContracts\ViewObjects\ServerVO;
use Hanoivip\GameContracts\ViewObjects\UserVO;

interface IGameOperator
{
    /**
     * Buy game items with pre-defined package
     *
     * @param UserVO $user
     * @param ServerVO $server
     * @param string $order
     *            Order ID, Mapping id
     * @param string $package Recharge package code
     * @param string $role Receveing role id
     * @return boolean
     */
    public function buyPackage($user, $server, $order, $package, $role);
    /**
     * Buy game money (diamond/KNB..) with a mount of money
     *
     * @param UserVO $user
     * @param ServerVO $server
     * @param string $order
     *            Order ID, Mapping id
     * @param string $package Recharge package code
     * @param string $role
     * @return boolean
     */
    public function buyByMoney($user, $server, $order, $amount, $role);

    /**
     *
     * @param ServerVO $server
     * @return number
     */
    public function online($server);

    /**
     *
     * @param ServerVO $server
     * @param mixed Rank type, number, string..
     * @return array
     */
    public function rank($server, $type);

    /**
     *
     * @param UserVO $user
     * @param ServerVO $server
     * @param string $order
     *            Mapping ID
     * @param number $itemId
     * @param number $itemCount
     * @param array $params
     */
    public function sentItem($user, $server, $order, $itemId, $itemCount, $role);

    /**
     * List all of game character in a server
     *
     * @param UserVO $user
     * @param ServerVO $server
     */
    public function characters($user, $server);

    /**
     * Request open new order from game services
     *
     * @param UserVO $user
     * @param ServerVO|string $server
     * @param string $package Recharge package code
     * @param array $params
     */
    public function order($user, $server, $package, $role);

/**
 * Notify order paid
 *
 * @param Authenticatable|number $user
 * @param string $order
 *            Game order
 */
    // public function orderNotify($user, $order);
    
    /**
     * Player exchange/use code on target server..
     * @param UserVO $user
     * @param ServerVO $server
     * @param string $code
     * @param array $params
     * @return number|TRUE true if success, number error if fail
     */
    public function useCode($user, $server, $code, $role);
    
    /**
     * Broadcast message to server
     * @param ServerVO $server
     * @param string $message
     * @return boolean
     */
    public function broadcast($server, $message);
    
    /**
     * Transfer account from user to user
     * UC:
     * - Admin temporary access account
     * - Sell old account
     * - ...
     * @param number $oldId
     * @param number $newId
     */
    public function transfer($oldId, $newId);
}