<?php

namespace WonderWp\Component\ShortCode;

interface ShortcodeServiceInterface
{
    /**
     * Typically where you'll have all your add_shortcode calls
     * @return mixed
     */
    public function registerShortcodes();
}
