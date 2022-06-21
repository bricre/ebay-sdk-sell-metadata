<?php

namespace Ebay\Sell\Metadata\Api;

use Ebay\Sell\Metadata\Model\SalesTaxJurisdictions;
use OpenAPI\Runtime\UnexpectedResponse;

class Country extends AbstractAPI
{
    /**
     * This method retrieves all the sales tax jurisdictions for the country that you
     * specify in the <b>countryCode</b> path parameter. Countries with valid sales tax
     * jurisdictions are Canada and the US.  <br/><br/>The response from this call
     * tells you the jurisdictions for which a seller can configure tax tables.
     * Although setting up tax tables is optional, you can use the
     * <b>createOrReplaceSalesTax</b> in the <b>Account API</b> call to configure the
     * tax tables for the jurisdictions you sell to.
     *
     * @param string $countryCode This path parameter specifies the two-letter <a
     *                            href="https://www.iso.org/iso-3166-country-codes.html"
     *                            title="https://www.iso.org" target="_blank">ISO 3166</a> country code for the
     *                            country whose jurisdictions you want to retrieve. eBay provides sales tax
     *                            jurisdiction information for Canada and the United States.Valid values for this
     *                            path parameter are <code>CA</code> and <code>US</code>.
     *
     * @return SalesTaxJurisdictions|UnexpectedResponse
     */
    public function getSalesTaxJurisdictions(string $countryCode)
    {
        return $this->request(
        'getSalesTaxJurisdictions',
        'GET',
        "country/$countryCode/sales_tax_jurisdiction",
        null,
        [],
        []
        );
    }
}
