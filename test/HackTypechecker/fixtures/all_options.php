<?hh

namespace Router\TestFixtures;

function all_options_simple(): \Router\Dispatcher {
    return \Router\simpleDispatcher(
      $collector ==> {},
      shape(
        'routeParser' => \Router\RouteParser\Std::class,
        'dataGenerator' => \Router\DataGenerator\GroupCountBased::class,
        'dispatcher' => \Router\Dispatcher\GroupCountBased::class,
        'routeCollector' => \Router\RouteCollector::class,
      ),
    );
}

function all_options_cached(): \Router\Dispatcher {
    return \Router\cachedDispatcher(
      $collector ==> {},
      shape(
        'routeParser' => \Router\RouteParser\Std::class,
        'dataGenerator' => \Router\DataGenerator\GroupCountBased::class,
        'dispatcher' => \Router\Dispatcher\GroupCountBased::class,
        'routeCollector' => \Router\RouteCollector::class,
        'cacheFile' => '/dev/null',
        'cacheDisabled' => false,
      ),
    );
}
