<?php

declare(strict_types=1);

namespace Yiisoft\Rbac\RuleFactory;

use Yiisoft\Rbac\Rule;
use Yiisoft\Rbac\RuleFactoryInterface;

class ClassNameRuleFactory implements RuleFactoryInterface
{
    public function create(string $name): Rule
    {
        return new $name();
    }
}
