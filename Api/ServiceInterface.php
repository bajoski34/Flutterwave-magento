<?php 

namespace Flutterwave\Payments\Api;

interface ServiceInterface 
{
    /**
     * Returns Verify Url
     *
     * @api
     * @return string Verify Url
     */
    public function verifyPayment();
    
    /**
     * Returns Payment Link
     *
     * @api
     * @return string Payment Link
     */
    public function generatePaymentLink();
}