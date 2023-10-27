<?php

namespace Grilar\Theme\Facades;

use Grilar\Theme\ThemeOption as BaseThemeOption;
use Illuminate\Support\Facades\Facade;

/**
 * @method static array constructArgs()
 * @method static array constructSections()
 * @method static array constructFields(string $sectionId = '')
 * @method static bool getSection(string $id = '')
 * @method static void checkOptName()
 * @method static array getSections()
 * @method static \Grilar\Theme\ThemeOption setSections(array $sections = [])
 * @method static \Grilar\Theme\ThemeOption setSection(array $section = [])
 * @method static int getPriority(string $type)
 * @method static void processFieldsArray(string $sectionId = '', array $fields = [])
 * @method static \Grilar\Theme\ThemeOption setField(array $field = [])
 * @method static \Grilar\Theme\ThemeOption removeSection(string $id = '', bool $fields = false)
 * @method static void hideSection(string $id = '', bool $hide = true)
 * @method static array|bool getField(string $id = '')
 * @method static void hideField(string $id = '', bool $hide = true)
 * @method static \Grilar\Theme\ThemeOption removeField(string $id = '')
 * @method static array getArgs()
 * @method static \Grilar\Theme\ThemeOption setArgs(array $args = [])
 * @method static string|null getArg(string $key = '')
 * @method static \Grilar\Theme\ThemeOption setOption(string $key, array|string|null $value = '')
 * @method static string getOptionKey(string $key, string|null $locale = '', string|null $theme = null)
 * @method static string|null renderField(array $field)
 * @method static bool hasOption(string $key)
 * @method static string|null getOption(string $key = '', array|string|null $default = '')
 * @method static bool saveOptions()
 * @method static array getFields()
 * @method static bool hasField(string $id)
 *
 * @see \Grilar\Theme\ThemeOption
 */
class ThemeOption extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return BaseThemeOption::class;
    }
}
