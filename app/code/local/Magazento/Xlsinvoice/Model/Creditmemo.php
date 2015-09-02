<?php
/*
 *  Created on AUG 30, 2012
 *  Author Ivan Proskuryakov  - Magazento.com
 *  Copyright Proskuryakov Ivan. Magazento.com © 2012. All Rights Reserved.
 *  Single Use, Limited Licence and Single Use No Resale Licence ["Single Use"]
 */
Class Magazento_Xlsinvoice_Model_Creditmemo
{
    public function drawInvoice($invoice)
    {
            Mage::register('current_invoice', $invoice);
            Mage::register('current_order', $invoice->getOrder());
            $order = $invoice->getOrder();
            Mage::getModel('xlsinvoice/xls')->processXLS($invoice,$order,$block,'creditmemo');
    }    
    
    
}
