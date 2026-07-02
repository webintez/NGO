<?php

namespace App\Helpers;

use App\Models\ContentBlock;

class ContentHelper
{
    protected static $blocks = null;

    public static function get($page, $section, $key, $default = '')
    {
        if (self::$blocks === null) {
            try {
                self::$blocks = ContentBlock::all()->groupBy('page')->map(function ($pageBlocks) {
                    return $pageBlocks->groupBy('section')->map(function ($sectionBlocks) {
                        return $sectionBlocks->pluck('value', 'element_key');
                    });
                });
            } catch (\Exception $e) {
                self::$blocks = collect();
            }
        }

        return self::$blocks->get($page)?->get($section)?->get($key) ?? $default;
    }

    /**
     * Helper to output HTML editable attributes when authenticated as admin.
     */
    public static function editable($page, $section, $key, $type = 'text', $label = '')
    {
        if (auth()->check()) {
            return ' data-editable="true" data-page="' . e($page) . '" data-section="' . e($section) . '" data-key="' . e($key) . '" data-type="' . e($type) . '" data-label="' . e($label) . '" ';
        }
        return '';
    }
}
