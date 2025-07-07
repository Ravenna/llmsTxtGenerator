<?php

namespace Ravenna\LlmsGenerator\Tests;

use Ravenna\LlmsGenerator\ServiceProvider;
use Statamic\Testing\AddonTestCase;

abstract class TestCase extends AddonTestCase
{
    protected string $addonServiceProvider = ServiceProvider::class;
}
