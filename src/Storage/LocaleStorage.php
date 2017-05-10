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

namespace Vainyl\Locale\Storage;

use Vainyl\Core\Storage\Proxy\AbstractStorageProxy;
use Vainyl\Locale\LocaleInterface;

/**
 * Class LocaleStorage
 *
 * @author Taras P. Girnyk <taras.p.gyrnik@gmail.com>
 */
class LocaleStorage extends AbstractStorageProxy
{
    /**
     * @param string          $name
     * @param LocaleInterface $locale
     *
     * @return LocaleStorage
     */
    public function addLocale(string $name, LocaleInterface $locale)
    {
        $this->offsetSet($name, $locale);

        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getLocale(string $name): LocaleInterface
    {
        return $this->offsetGet($name);
    }
}