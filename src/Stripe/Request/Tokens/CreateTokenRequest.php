<?php
/**
 * User: Joe Linn
 * Date: 3/20/2014
 * Time: 2:39 PM
 */

namespace Stripe\Request\Tokens;


class CreateTokenRequest
{
    
    protected $card;

    /**
     * @param array $card
     */
    public function __construct(array $card)
    {
        $this->card = $card;
    }
}
