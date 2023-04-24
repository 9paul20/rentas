<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\Equipment
 *
 * @property int $clvEquipo
 * @property string $noSerieEquipo
 * @property string $noSerieMotor
 * @property string $noEconomico
 * @property string $modelo
 * @property int $clvDisponibilidad
 * @property int $clvCategoria
 * @property string|null $descripcion
 * @property string $precioEquipo
 * @property string $fechaAdquisicion
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Equipments\Category|null $categoria
 * @property-read \App\Models\Equipments\Status|null $disponibilidad
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\FixedExpenses\Catalog> $fixedExpensesCatalogs
 * @property-read int|null $fixed_expenses_catalogs_count
 * @method static \Database\Factories\EquipmentFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Equipment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Equipment newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Equipment query()
 * @method static \Illuminate\Database\Eloquent\Builder|Equipment whereClvCategoria($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Equipment whereClvDisponibilidad($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Equipment whereClvEquipo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Equipment whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Equipment whereDescripcion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Equipment whereFechaAdquisicion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Equipment whereModelo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Equipment whereNoEconomico($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Equipment whereNoSerieEquipo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Equipment whereNoSerieMotor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Equipment wherePrecioEquipo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Equipment whereUpdatedAt($value)
 */
	class Equipment extends \Eloquent {}
}

namespace App\Models\Equipments{
/**
 * App\Models\Equipments\Category
 *
 * @property int $clvCategoria
 * @property string $categoria
 * @property string|null $descripcion
 * @property int|null $clvTipoCategoria
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Equipments\TypeCategory|null $tipoCategoria
 * @method static \Database\Factories\Equipments\CategoryFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Category newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Category newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Category query()
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereCategoria($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereClvCategoria($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereClvTipoCategoria($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereDescripcion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereUpdatedAt($value)
 */
	class Category extends \Eloquent {}
}

namespace App\Models\Equipments{
/**
 * App\Models\Equipments\Status
 *
 * @property int $clvDisponibilidad
 * @property string $disponibilidad
 * @property string|null $descripcion
 * @property string|null $textColor
 * @property string|null $bgColorPrimary
 * @property string|null $bgColorSecondary
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\Equipments\StatusFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Status newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Status newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Status query()
 * @method static \Illuminate\Database\Eloquent\Builder|Status whereBgColorPrimary($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Status whereBgColorSecondary($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Status whereClvDisponibilidad($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Status whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Status whereDescripcion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Status whereDisponibilidad($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Status whereTextColor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Status whereUpdatedAt($value)
 */
	class Status extends \Eloquent {}
}

namespace App\Models\Equipments{
/**
 * App\Models\Equipments\TypeCategory
 *
 * @property int $clvTipoCategoria
 * @property string $tipoCategoria
 * @property string|null $descripcion
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\Equipments\TypeCategoryFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|TypeCategory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TypeCategory newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TypeCategory query()
 * @method static \Illuminate\Database\Eloquent\Builder|TypeCategory whereClvTipoCategoria($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TypeCategory whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TypeCategory whereDescripcion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TypeCategory whereTipoCategoria($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TypeCategory whereUpdatedAt($value)
 */
	class TypeCategory extends \Eloquent {}
}

namespace App\Models\FixedExpenses{
/**
 * App\Models\FixedExpenses\Catalog
 *
 * @property int $clvGastoFijo
 * @property string $gastoFijo
 * @property string|null $descripcion
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Catalog newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Catalog newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Catalog query()
 * @method static \Illuminate\Database\Eloquent\Builder|Catalog whereClvGastoFijo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Catalog whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Catalog whereDescripcion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Catalog whereGastoFijo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Catalog whereUpdatedAt($value)
 */
	class Catalog extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Person
 *
 * @property int $clvPersona
 * @property string|null $nombrePersona
 * @property string|null $apePaternoPersona
 * @property string|null $apeMaternoPersona
 * @property string|null $nacimiento
 * @property int|null $clvLocalidad
 * @property string|null $telefono
 * @property string|null $celular
 * @property int|null $clvComTel
 * @property string|null $ocupacion
 * @property int|null $clvNacionalidad
 * @property string|null $informacion
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Persons\ComTel|null $companiaTelefonica
 * @property-read \App\Models\Persons\Nationality|null $nacionalidad
 * @method static \Database\Factories\PersonFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Person newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Person newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Person query()
 * @method static \Illuminate\Database\Eloquent\Builder|Person whereApeMaternoPersona($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Person whereApePaternoPersona($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Person whereCelular($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Person whereClvComTel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Person whereClvLocalidad($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Person whereClvNacionalidad($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Person whereClvPersona($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Person whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Person whereInformacion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Person whereNacimiento($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Person whereNombrePersona($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Person whereOcupacion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Person whereTelefono($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Person whereUpdatedAt($value)
 */
	class Person extends \Eloquent {}
}

namespace App\Models\Persons{
/**
 * App\Models\Persons\ComTel
 *
 * @property int $clvComTel
 * @property string $companiaTelefonica
 * @property string|null $descripcion
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\Persons\ComTelFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|ComTel newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ComTel newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ComTel query()
 * @method static \Illuminate\Database\Eloquent\Builder|ComTel whereClvComTel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ComTel whereCompaniaTelefonica($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ComTel whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ComTel whereDescripcion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ComTel whereUpdatedAt($value)
 */
	class ComTel extends \Eloquent {}
}

namespace App\Models\Persons{
/**
 * App\Models\Persons\Nationality
 *
 * @property int $clvNacionalidad
 * @property string $nacionalidad
 * @property string|null $descripcion
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\Persons\NationalityFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Nationality newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Nationality newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Nationality query()
 * @method static \Illuminate\Database\Eloquent\Builder|Nationality whereClvNacionalidad($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Nationality whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Nationality whereDescripcion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Nationality whereNacionalidad($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Nationality whereUpdatedAt($value)
 */
	class Nationality extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Rent
 *
 * @property int $clvRenta
 * @property int|null $clvEquipo
 * @property int|null $clvCliente
 * @property string|null $descripcion
 * @property string|null $fecha_inicio
 * @property string|null $fecha_fin
 * @property int|null $clvPagoRenta
 * @property int|null $clvEstadoRenta
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Person|null $cliente
 * @property-read \App\Models\Equipment|null $equipo
 * @property-read \App\Models\Rents\StatusRent|null $estadoRenta
 * @property-read \App\Models\Rents\PaymentRent|null $pagoRenta
 * @method static \Database\Factories\RentFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Rent newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Rent newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Rent query()
 * @method static \Illuminate\Database\Eloquent\Builder|Rent whereClvCliente($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Rent whereClvEquipo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Rent whereClvEstadoRenta($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Rent whereClvPagoRenta($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Rent whereClvRenta($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Rent whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Rent whereDescripcion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Rent whereFechaFin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Rent whereFechaInicio($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Rent whereUpdatedAt($value)
 */
	class Rent extends \Eloquent {}
}

namespace App\Models\Rents{
/**
 * App\Models\Rents\CupRent
 *
 * @property int $clvTazaRenta
 * @property string $tazaRenta
 * @property string|null $rentaUnMes
 * @property string|null $rentaDosMeses
 * @property string|null $rentaTresMeses
 * @property string|null $ivaUnMes
 * @property string|null $ivaDosMeses
 * @property string|null $ivaTresMeses
 * @property string|null $descripcion
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\Rents\CupRentFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|CupRent newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CupRent newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CupRent query()
 * @method static \Illuminate\Database\Eloquent\Builder|CupRent whereClvTazaRenta($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CupRent whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CupRent whereDescripcion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CupRent whereIvaDosMeses($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CupRent whereIvaTresMeses($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CupRent whereIvaUnMes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CupRent whereRentaDosMeses($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CupRent whereRentaTresMeses($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CupRent whereRentaUnMes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CupRent whereTazaRenta($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CupRent whereUpdatedAt($value)
 */
	class CupRent extends \Eloquent {}
}

namespace App\Models\Rents{
/**
 * App\Models\Rents\PaymentRent
 *
 * @property int $clvPagoRenta
 * @property string|null $pagoRenta
 * @property string|null $ivaRenta
 * @property int|null $clvEstadoPagoRenta
 * @property string|null $descripcion
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Rents\StatusPaymentRent|null $estadoPagoRenta
 * @method static \Database\Factories\Rents\PaymentRentFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentRent newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentRent newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentRent query()
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentRent whereClvEstadoPagoRenta($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentRent whereClvPagoRenta($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentRent whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentRent whereDescripcion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentRent whereIvaRenta($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentRent wherePagoRenta($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentRent whereUpdatedAt($value)
 */
	class PaymentRent extends \Eloquent {}
}

namespace App\Models\Rents{
/**
 * App\Models\Rents\StatusPaymentRent
 *
 * @property int $clvEstadoPagoRenta
 * @property string $estadoPagoRenta
 * @property string|null $descripcion
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\Rents\StatusPaymentRentFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|StatusPaymentRent newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|StatusPaymentRent newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|StatusPaymentRent query()
 * @method static \Illuminate\Database\Eloquent\Builder|StatusPaymentRent whereClvEstadoPagoRenta($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StatusPaymentRent whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StatusPaymentRent whereDescripcion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StatusPaymentRent whereEstadoPagoRenta($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StatusPaymentRent whereUpdatedAt($value)
 */
	class StatusPaymentRent extends \Eloquent {}
}

namespace App\Models\Rents{
/**
 * App\Models\Rents\StatusRent
 *
 * @property int $clvEstadoRenta
 * @property string $estadoRenta
 * @property string|null $descripcion
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\Rents\StatusRentFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|StatusRent newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|StatusRent newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|StatusRent query()
 * @method static \Illuminate\Database\Eloquent\Builder|StatusRent whereClvEstadoRenta($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StatusRent whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StatusRent whereDescripcion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StatusRent whereEstadoRenta($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StatusRent whereUpdatedAt($value)
 */
	class StatusRent extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property int|null $clvPersona
 * @property string $name
 * @property string $email
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $last_login
 * @property string|null $active
 * @property string|null $activation_key
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string|null $foto
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Spatie\Permission\Models\Permission> $permissions
 * @property-read int|null $permissions_count
 * @property-read \App\Models\Person|null $persona
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Spatie\Permission\Models\Role> $roles
 * @property-read int|null $roles_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Laravel\Sanctum\PersonalAccessToken> $tokens
 * @property-read int|null $tokens_count
 * @method static \Database\Factories\UserFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User permission($permissions)
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User role($roles, $guard = null)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereActivationKey($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereClvPersona($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereFoto($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereLastLogin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

namespace App\Models\VariablesExpenses{
/**
 * App\Models\VariablesExpenses\VariableExpense
 *
 * @property int $clvGastoVariable
 * @property string $gastoVariable
 * @property string $descripcion
 * @property string $costoGastoVariable
 * @property int|null $clvEquipo
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Equipment|null $equipment
 * @method static \Illuminate\Database\Eloquent\Builder|VariableExpense newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|VariableExpense newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|VariableExpense query()
 * @method static \Illuminate\Database\Eloquent\Builder|VariableExpense whereClvEquipo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VariableExpense whereClvGastoVariable($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VariableExpense whereCostoGastoVariable($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VariableExpense whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VariableExpense whereDescripcion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VariableExpense whereGastoVariable($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VariableExpense whereUpdatedAt($value)
 */
	class VariableExpense extends \Eloquent {}
}

