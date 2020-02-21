<?php
/*
 * Pipedrive
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace Pipedrive\Models;

use JsonSerializable;

/**
 *Open and won Deals grouped into periods by defined interval, amount and date-type dealField
 * (field_key)
 */
class Data25 implements JsonSerializable
{
    /**
     * The start date and time of the period
     * @maps period_start
     * @var string|null $periodStart public property
     */
    public $periodStart;

    /**
     * The end date and time of the period
     * @maps period_end
     * @var string|null $periodEnd public property
     */
    public $periodEnd;

    /**
     * @todo Write general description for this property
     * @var \Pipedrive\Models\Deal[]|null $deals public property
     */
    public $deals;

    /**
     * The total values of Deals for the given period
     * @var \Pipedrive\Models\Totals|null $totals public property
     */
    public $totals;

    /**
     * Constructor to set initial or default values of member properties
     * @param string $periodStart Initialization value for $this->periodStart
     * @param string $periodEnd   Initialization value for $this->periodEnd
     * @param array  $deals       Initialization value for $this->deals
     * @param Totals $totals      Initialization value for $this->totals
     */
    public function __construct()
    {
        if (4 == func_num_args()) {
            $this->periodStart = func_get_arg(0);
            $this->periodEnd   = func_get_arg(1);
            $this->deals       = func_get_arg(2);
            $this->totals      = func_get_arg(3);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['period_start'] = $this->periodStart;
        $json['period_end']   = $this->periodEnd;
        $json['deals']        = $this->deals;
        $json['totals']       = $this->totals;

        return $json;
    }
}