<?php

declare(strict_types=1);

namespace GitList\Exception;

use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class RepositoryNotFoundException extends NotFoundHttpException
{
}
