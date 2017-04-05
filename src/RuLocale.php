<?php
/**
 * Vain Framework
 *
 * PHP Version 7
 *
 * @package   vain-time
 * @license   https://opensource.org/licenses/MIT MIT License
 * @link      https://github.com/allflame/vain-time
 */
declare(strict_types = 1);

namespace Vainyl\Locale;

use Vainyl\Core\Id\AbstractIdentifiable;

/**
 * Class RuLocale
 *
 * @author Taras P. Girnyk <taras.p.gyrnik@gmail.com>
 */
class RuLocale extends AbstractIdentifiable implements LocaleInterface
{
    /**
     * @inheritDoc
     */
    public function getWeekStartsAt(): int
    {
        return 1;
    }

    /**
     * @inheritDoc
     */
    public function getWeekEndsAt(): int
    {
        return 0;
    }

    /**
     * @inheritDoc
     */
    public function getWeekendDays(): array
    {
        return [0, 6];
    }

    /**
     * @inheritDoc
     */
    public function getDefaultFormat(): string
    {
        return 'Y-m-d H:i:s';
    }
}