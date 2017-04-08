<?php

namespace Router\Dispatcher;

class GroupCountBasedTest extends DispatcherTest {
    protected function getDispatcherClass() {
        return 'Router\\Dispatcher\\GroupCountBased';
    }

    protected function getDataGeneratorClass() {
        return 'Router\\DataGenerator\\GroupCountBased';
    }
}
