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

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Reference;
use Vainyl\Core\Extension\AbstractCompilerPass;
use Vainyl\Core\Exception\MissingRequiredFieldException;
use Vainyl\Core\Exception\MissingRequiredServiceException;

/**
 * Class LocaleCompilerPass
 *
 * @author Taras P. Girnyk <taras.p.gyrnik@gmail.com>
 */
class LocaleCompilerPass extends AbstractCompilerPass
{
    /**
     * @inheritDoc
     */
    public function process(ContainerBuilder $container)
    {
        if (false === $container->has('locale.storage')) {
            throw new MissingRequiredServiceException($container, 'locale.storage');
        }

        $definition = $container->getDefinition('locale.storage');
        foreach ($container->findTaggedServiceIds('locale') as $id => $tags) {
            foreach ($tags as $attributes) {
                if (false === array_key_exists('alias', $attributes)) {
                    throw new MissingRequiredFieldException($container, $id, $attributes, 'alias');
                }
                $definition
                    ->addMethodCall('addLocale', [$attributes['alias'], new Reference($id)]);
            }
        }
    }
}