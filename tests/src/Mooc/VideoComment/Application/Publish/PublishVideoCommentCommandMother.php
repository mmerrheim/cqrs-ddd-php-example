<?php

declare(strict_types = 1);

namespace CodelyTv\Test\Mooc\VideoComment\Application\Publish;

use CodelyTv\Mooc\VideoComments\Contract\PublishVideoCommentCommand;
use CodelyTv\Mooc\VideoComments\Domain\VideoCommentContent;
use CodelyTv\Mooc\VideoComments\Domain\VideoCommentId;
use CodelyTv\Mooc\Videos\Domain\VideoId;
use CodelyTv\Shared\Domain\ValueObject\Uuid;
use CodelyTv\Test\Mooc\Video\Domain\VideoIdMother;
use CodelyTv\Test\Mooc\VideoComment\Domain\VideoCommentContentMother;
use CodelyTv\Test\Mooc\VideoComment\Domain\VideoCommentIdMother;
use CodelyTv\Test\Shared\Domain\UuidMother;

final class PublishVideoCommentCommandMother
{
    public static function create(
        Uuid $requestId,
        VideoCommentId $id,
        VideoId $videoId,
        VideoCommentContent $content
    ): PublishVideoCommentCommand {
        return new PublishVideoCommentCommand($requestId, $id->value(), $videoId->value(), $content->value());
    }

    public static function random(): PublishVideoCommentCommand
    {
        return self::create(
            new Uuid(UuidMother::random()),
            VideoCommentIdMother::random(),
            VideoIdMother::random(),
            VideoCommentContentMother::random()
        );
    }
}
