<?php


namespace App\Traits;

use App\Scopes\TenantScope;

trait BelongsToTenant
{
    protected static function bootBelongsToTenant()
    {
        static::addGlobalScope(new TenantScope);

        static::creating(function($model) {
            $model->tenant_id = session('tenant_id');
        });
    }
}
