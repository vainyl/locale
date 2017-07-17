<?php
/**
 * Vainyl
 *
 * PHP Version 7
 *
 * @package   Locale
 * @license   https://opensource.org/licenses/MIT MIT License
 * @link      https://vainyl.com
 */
declare(strict_types=1);

namespace Vainyl\Locale;

use Vainyl\Core\AbstractArray;

/**
 * Class Locale
 *
 * @author Taras P. Girnyk <taras.p.gyrnik@gmail.com>
 */
class Locale extends AbstractArray implements LocaleInterface
{
    private $name;

    private $weekStart;

    private $weekEnd;

    private $weekendDays;

    private $timeFormat;

    /**
     * AbstractLocale constructor.
     *
     * @param string $name
     * @param int    $weekStart
     * @param int    $weekEnd
     * @param array  $weekendDays
     * @param string $timeFormat
     */
    public function __construct(string $name, int $weekStart, int $weekEnd, array $weekendDays, string $timeFormat)
    {
        $this->name = $name;
        $this->weekStart = $weekStart;
        $this->weekEnd = $weekEnd;
        $this->weekendDays = $weekendDays;
        $this->timeFormat = $timeFormat;
    }

    /**
     * @return int
     */
    public function getWeekStartsAt(): int
    {
        return $this->weekStart;
    }

    /**
     * @return int
     */
    public function getWeekEndsAt(): int
    {
        return $this->weekEnd;
    }

    /**
     * @return array
     */
    public function getWeekendDays(): array
    {
        return $this->weekendDays;
    }

    /**
     * @return string
     */
    public function getDefaultFormat(): string
    {
        return $this->timeFormat;
    }
}