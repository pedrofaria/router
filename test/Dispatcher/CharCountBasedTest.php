<?php

namespace Router\Dispatcher;

class CharCountBasedTest extends DispatcherTest {
    protected function getDispatcherClass() {
        return 'Router\\Dispatcher\\CharCountBased';
    }

    protected function getDataGeneratorClass() {
        return 'Router\\DataGenerator\\CharCountBased';
    }
}
