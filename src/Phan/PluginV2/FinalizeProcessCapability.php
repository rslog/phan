<?php declare(strict_types=1);
namespace Phan\PluginV2;

use Phan\CodeBase;

interface FinalizeProcessCapability {
    /**
     * This is called after the other forms of analysis are finished running.
     * Useful if a PluginV2 needs to aggregate results of analysis.
     * This may be used to emit additional issues.
     *
     * This is run once per forked analysis process.
     * Some plugins using this, such as UnusedSuppressionPlugin,
     * will not work as expected with more than one process.
     * If possible, write plugins to emit issues immediately.
     *
     * @return void
     */
    public function finalizeProcess(CodeBase $code_base);
}
