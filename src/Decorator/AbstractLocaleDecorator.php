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

namespace Vainyl\Locale\Decorator;

use Vainyl\Locale\LocaleInterface;

/**
 * Class AbstractLocaleDecorator
 *
 * @author Taras P. Girnyk <taras.p.gyrnik@gmail.com>
 */
abstract class AbstractLocaleDecorator implements LocaleInterface
{
    private $locale;

    /**
     * AbstractLocaleDecorator constructor.
     *
     * @param LocaleInterface $locale
     */
    public function __construct(LocaleInterface $locale)
    {
        $this->locale = $locale;
    }

    /**
     * @inheritDoc
     */
    public function getId(): string
    {
        return $this->locale->getId();
    }

    /**
     * @inheritDoc
     */
    public function getWeekStartsAt(): int
    {
        return $this->locale->getWeekStartsAt();
    }

    /**
     * @inheritDoc
     */
    public function getWeekEndsAt(): int
    {
        return $this->locale->getWeekEndsAt();
    }

    /**
     * @inheritDoc
     */
    public function getWeekendDays(): array
    {
        return $this->locale->getWeekendDays();
    }

    /**
     * @inheritDoc
     */
    public function getDefaultFormat(): string
    {
        return $this->locale->getDefaultFormat();
    }
}