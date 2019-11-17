<?php
namespace Understand\UnderstandLaravel5\Contracts;

/**
 * Interface TokenProviderContract
 * @package Understand\UnderstandLaravel5\Contracts
 */
interface TokenProviderContract
{
    /**
     * Return Token
     *
     * @return string
     */
    public function getToken();

    /**
     * Generate new token
     *
     * @return void
     */
    public function generate();
}