<?php
namespace Hanoivip\GameContracts\Contracts;

use Hanoivip\GameContracts\ViewObjects\RechargeVO;
use Hanoivip\GameContracts\ViewObjects\ServerVO;
use Hanoivip\GameContracts\ViewObjects\UserVO;

interface IGameOperator
{

    /**
     *
     * @param UserVO $user
     * @param ServerVO $server
     */
    public function enter($user, $server);

    /**
     * Recharge with pre-defined package
     *
     * @param UserVO $user
     * @param ServerVO $server
     * @param string $order
     *            Order ID, Mapping id
     * @param RechargeVO $package
     * @param array $params
     * @return boolean
     */
    public function recharge($user, $server, $order, $package, $params = null);

    /**
     *
     * @param ServerVO $server
     * @return number
     */
    public function online($server);

    /**
     *
     * @param ServerVO $server
     * @return array
     */
    public function rank($server);

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
    public function sentItem($user, $server, $order, $itemId, $itemCount, $params = null);

    /**
     * List all of game character in a server
     *
     * @param UserVO $user
     * @param ServerVO $server
     */
    public function characters($user, $server);

    /**
     * Does this operator support multiple of chars
     */
    public function supportMultiChar();

    /**
     * Request open new order from game services
     *
     * @param UserVO $user
     * @param ServerVO $server
     * @param RechargeVO|string $package
     * @param array $params
     */
    public function order($user, $server, $package, $params = null);

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
    public function useCode($user, $server, $code, $params);
}