<?hh

namespace Router\TestFixtures;

function no_options_simple(): \Router\Dispatcher {
    return \Router\simpleDispatcher($collector ==> {});
}

function no_options_cached(): \Router\Dispatcher {
    return \Router\cachedDispatcher($collector ==> {});
}
