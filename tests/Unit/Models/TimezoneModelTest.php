<?php

declare(strict_types=1);

namespace Tipoff\Addresses\Tests\Unit\Models;

use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tipoff\Addresses\Models\Timezone;
use Tipoff\Addresses\Tests\TestCase;

class TimezoneModelTest extends TestCase
{
    use DatabaseTransactions;

    /** @test */
    public function create()
    {
        $model = Timezone::factory()->create();
        $this->assertNotNull($model);
    }
}
