<?hh

namespace Router\TestFixtures;

function empty_options_simple(): \Router\Dispatcher {
    return \Router\simpleDispatcher($collector ==> {}, shape());
}

function empty_options_cached(): \Router\Dispatcher {
    return \Router\cachedDispatcher($collector ==> {}, shape());
}
