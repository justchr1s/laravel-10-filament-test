<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Wallo\FilamentCompanies\FilamentCompanies;

/**
 * App\Models\CompanyInvitation
 *
 * @property int $id
 * @property int $company_id
 * @property string $email
 * @property string|null $role
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Company $company
 * @method static \Illuminate\Database\Eloquent\Builder|CompanyInvitation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CompanyInvitation newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CompanyInvitation query()
 * @method static \Illuminate\Database\Eloquent\Builder|CompanyInvitation whereCompanyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CompanyInvitation whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CompanyInvitation whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CompanyInvitation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CompanyInvitation whereRole($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CompanyInvitation whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class CompanyInvitation extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'email',
        'role',
    ];

    /**
     * Get the company that the invitation belongs to.
     *
     * @return BelongsTo
     */
    public function company(): BelongsTo
    {
        return $this->belongsTo(FilamentCompanies::companyModel());
    }
}
