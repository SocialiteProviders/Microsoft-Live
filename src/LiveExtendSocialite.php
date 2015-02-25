<?php
namespace SocialiteProviders\Live;

use SocialiteProviders\Manager\SocialiteWasCalled;

class LiveExtendSocialite
{
    /**
     * Execute the provider.
     */
    public function handle(SocialiteWasCalled $socialiteWasCalled)
    {
        $socialiteWasCalled->extendSocialite(
            'live', __NAMESPACE__.'\Provider'
        );
    }
}
