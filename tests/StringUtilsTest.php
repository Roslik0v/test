<?php

require_once 'vendor/autoload.php';

require_once './src/StringUtils.php';

use Webmozart\Assert\Assert;

Assert::eq(StringUtils\capitalize(''), '');

Assert::eq(StringUtils\capitalize('hello'), 'Hello');

echo 'Все тесты пройдены!';

