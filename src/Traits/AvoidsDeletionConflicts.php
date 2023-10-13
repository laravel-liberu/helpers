<?php

namespace LaravelLiberu\Helpers\Traits;

use Illuminate\Database\QueryException;
use Illuminate\Support\Str;
use Symfony\Component\HttpKernel\Exception\ConflictHttpException;

trait AvoidsDeletionConflicts
{
    public function delete()
    {
        try {
            return parent::delete();
        } catch (QueryException) {
            $model = str_replace('_', ' ', Str::singular($this->getTable()));

            throw new ConflictHttpException(__(
                'The :model is being used in the system and cannot be deleted',
                ['model' => $model]
            ));
        }
    }
}
