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

use Vainyl\Core\AbstractIdentifiable;

/**
 * Class Locale
 *
 * @author Taras P. Girnyk <taras.p.gyrnik@gmail.com>
 */
class Locale extends AbstractIdentifiable implements LocaleInterface
{
    private $weekStart;

    private $weekEnd;

    private $weekDays;

    private $timeFormat;

    /**
     * AbstractLocale constructor.
     *
     * @param int    $weekStart
     * @param int    $weekEnd
     * @param array  $weekDays
     * @param string $timeFormat
     */
    public function __construct(int $weekStart, int $weekEnd, array $weekDays, string $timeFormat)
    {
        $this->weekStart = $weekStart;
        $this->weekEnd = $weekEnd;
        $this->weekDays = $weekDays;
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
        return $this->weekDays;
    }

    /**
     * @return string
     */
    public function getDefaultFormat(): string
    {
        return $this->timeFormat;
    }

    /**
     * @inheritDoc
     */
    public function toArray(): array
    {
        return [
            'week_start'   => $this->weekStart,
            'week_end'     => $this->weekEnd,
            'weekend_days' => $this->weekEnd,
            'time_format'  => $this->timeFormat,
        ];
    }
}