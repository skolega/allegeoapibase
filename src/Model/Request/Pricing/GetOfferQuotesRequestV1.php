<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 09.07.19
 * Time: 15:22
 */

namespace Imper86\AllegroRestApiSdk\Model\Request\Pricing;


use GuzzleHttp\Psr7\Request;
use Imper86\AllegroRestApiSdk\Constants\ContentType;
use Imper86\AllegroRestApiSdk\Model\Request\RequestTrait;

class GetOfferQuotesRequestV1 extends Request
{
    use RequestTrait;

    public function __construct($token, array $offerIds, ?string $name = null)
    {
        $query = ['offer.id' => $offerIds];

        if ($name) {
            $query['name'] = $name;
        }

        parent::__construct(
            'GET',
            $this->prepareApiUri('/pricing/offer-quotes', $query),
            $this->prepareHeaders($token, ContentType::PUBLIC_V1)
        );
    }
}
