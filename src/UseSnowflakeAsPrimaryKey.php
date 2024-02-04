<?php

declare(strict_types=1);

namespace Verdient\Hyperf3\Snowflake;

use Hyperf\Context\ApplicationContext;
use Hyperf\Snowflake\Concern\Snowflake;
use Hyperf\Snowflake\IdGeneratorInterface;

/**
 * 使用Snowflake作为主键
 */
trait UseSnowflakeAsPrimaryKey
{
    use Snowflake;

    /**
     * 生成主键
     * @return string|int
     * @author Verdient。
     */
    public static function generateKey(): string|int
    {
        /** @var IdGeneratorInterface */
        $idGeneratorInterface = ApplicationContext::getContainer()
            ->get(IdGeneratorInterface::class);
        return $idGeneratorInterface->generate();
    }
}
