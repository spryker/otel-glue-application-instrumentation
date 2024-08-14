<?php

declare(strict_types=1);

use Spryker\Service\OtelGlueApplicationInstrumentation\OpenTelemetry\GlueApplicationInstrumentation;
use Spryker\Shared\Opentelemetry\Instrumentation\CachedInstrumentation;
use Spryker\Shared\Opentelemetry\Request\RequestProcessor;

if (extension_loaded('opentelemetry') === false) {
    return;
}

GlueApplicationInstrumentation::register(new CachedInstrumentation(), new RequestProcessor());

