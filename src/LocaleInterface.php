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

use Vainyl\Core\ArrayInterface;
use Vainyl\Core\NameableInterface;

/**
 * Interface LocaleInterface
 *
 * @author Taras P. Girnyk <taras.p.gyrnik@gmail.com>
 */
interface LocaleInterface extends NameableInterface, ArrayInterface
{
    /**
     * @return int
     */
    public function getWeekStartsAt(): int;

    /**
     * @return int
     */
    public function getWeekEndsAt(): int;

    /**
     * @return array
     */
    public function getWeekendDays(): array;

    /**
     * @return string
     */
    public function getDefaultFormat(): string;
}
