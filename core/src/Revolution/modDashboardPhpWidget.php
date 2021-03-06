<?php
/*
 * This file is part of the MODX Revolution package.
 *
 * Copyright (c) MODX, LLC
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace MODX\Revolution;


/**
 * A widget that runs its content as PHP in Snippet-like format to get its content.
 *
 * @package MODX\Revolution
 */
class modDashboardPhpWidget extends modDashboardWidgetInterface
{
    public function render()
    {
        return $this->renderAsSnippet();
    }
}
