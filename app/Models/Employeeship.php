<?php

namespace App\Models;

use Wallo\FilamentCompanies\Employeeship as FilamentCompaniesEmployeeship;

/**
 * App\Models\Employeeship
 *
 * @property int $id
 * @property int $company_id
 * @property int $user_id
 * @property string|null $role
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Employeeship newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Employeeship newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Employeeship query()
 * @method static \Illuminate\Database\Eloquent\Builder|Employeeship whereCompanyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employeeship whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employeeship whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employeeship whereRole($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employeeship whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employeeship whereUserId($value)
 * @mixin \Eloquent
 */
class Employeeship extends FilamentCompaniesEmployeeship
{
    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = true;
}
