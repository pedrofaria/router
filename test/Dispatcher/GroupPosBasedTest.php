<?php

namespace Router\Dispatcher;

class GroupPosBasedTest extends DispatcherTest {
    protected function getDispatcherClass() {
        return 'Router\\Dispatcher\\GroupPosBased';
    }

    protected function getDataGeneratorClass() {
        return 'Router\\DataGenerator\\GroupPosBased';
    }
}
