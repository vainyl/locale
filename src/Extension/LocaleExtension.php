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
use Vainyl\Core\Extension\AbstractExtension;
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
        return [[new LocaleCompilerPass()]];
    }

    /**
     * @inheritDoc
     */
    public function load(array $configs, ContainerBuilder $container): AbstractExtension
    {
        parent::load($configs, $container);

        $configuration = new LocaleConfiguration();
        $localeConfiguration = $this->processConfiguration($configuration, $configs);

        $definition = $container->getDefinition('locale.' . $localeConfiguration['default']);
        $copy = clone $definition;
        $copy->setTags(array_replace_recursive($definition->getTags(), ['locale' => [['alias' => 'default']]]));
        $container->setDefinition('locale.default', $copy);

        return $this;
    }
}