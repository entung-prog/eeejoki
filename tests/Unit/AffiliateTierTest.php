<?php
use App\Enums\AffiliateTier;
it('maps affiliate tiers to commission rates', function(){ expect(AffiliateTier::Bronze->commissionRate())->toBe(0.05)->and(AffiliateTier::Silver->commissionRate())->toBe(0.07)->and(AffiliateTier::Gold->commissionRate())->toBe(0.10); });
