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

namespace Vainyl\Locale\Extension;

use Vainyl\Core\Extension\AbstractFrameworkExtension;

/**
 * Class LocaleExtension
 *
 * @author Taras P. Girnyk <taras.p.gyrnik@gmail.com>
 */
class LocaleExtension extends AbstractFrameworkExtension
{
    /**
     * @inheritDoc
     */
    public function getCompilerPasses(): array
    {
        return [new LocaleCompilerPass()];
    }
}